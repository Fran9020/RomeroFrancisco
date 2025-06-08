<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Registro extends Controller
{
    protected $helpers = ['form'];
    protected $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        // Si hay una sesion activa y el usuario no es administrador, cerrar la sesion
        $session = session();
        if ($session->has('id_rol') && $session->get('id_rol') != 1) {
            log_message('debug', 'Sesion activa detectada al entrar a /registrar. Cerrando sesion.');
            $session->destroy();
        }

        return view('templates/layout', [
            'title' => 'Registrarse',
            'content' => view('pages/registrar')
        ]);
    }

    public function save()
    {
        try {
            // Validar que las contraseñas coincidan
            $contrasena = $this->request->getPost('contrasena');
            $confirmarContrasena = $this->request->getPost('confirmar_contrasena');
            if ($contrasena !== $confirmarContrasena) {
                session()->setFlashdata('error', 'Las contrasenas no coinciden.');
                return redirect()->to('/registrar')->withInput();
            }

            $email = $this->request->getPost('email');
            $existingUser = $this->usuarioModel->where('email', $email)->first();

            // Datos a guardar
            $data = [
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'dni' => $this->request->getPost('dni'),
                'email' => $email,
                'telefono' => $this->request->getPost('telefono'),
                'contrasena' => password_hash($contrasena, PASSWORD_DEFAULT),
                'activo' => 1,
            ];

            // Obtener datos de la sesion
            $session = session();
            $idRol = $session->get('id_rol');
            $isAdmin = $session->has('id_rol') && $idRol == 1;
            $sessionEmail = $session->get('email');

            // Depurar: Registrar datos de la sesion y el valor de $isAdmin
            log_message('debug', 'Datos de sesion en Registro::save: id_rol=' . ($idRol ?? 'no definido') . ', email=' . ($sessionEmail ?? 'no definido') . ', isAdmin=' . ($isAdmin ? 'true' : 'false'));

            if ($isAdmin) {
                // Caso: Administrador (id_rol = 1)
                // Validar que el correo ingresado coincida con el de la sesion
                if ($email !== $sessionEmail) {
                    session()->setFlashdata('error', 'El correo ingresado no coincide con el de tu sesion.');
                    return redirect()->to('/registrar')->withInput();
                }

                // El correo ya deberia existir (fue anadido en /anadir_admin)
                if (!$existingUser) {
                    session()->setFlashdata('error', 'Error: No se encontro el correo en la base de datos. Contacta al administrador.');
                    return redirect()->to('/registrar')->withInput();
                }

                // Actualizar el registro existente
                $userId = $existingUser['id_usuario'];
                $data['id_rol'] = 1;
                $data['primer_login'] = 0; // Cambiar a 0 despues de completar el registro

                // Ignorar la validacion de unicidad de email si no cambia
                $db = \Config\Database::connect();
                $builder = $db->table('usuarios');
                $builder->where('id_usuario', $userId);
                if ($builder->update($data)) {
                    // Actualizar la sesion
                    $session->set('primer_login', 0);
                    session()->setFlashdata('success', 'Registro completado exitosamente. Bienvenido administrador.');
                    return redirect()->to('/admin_dashboard');
                } else {
                    $errors = $db->error();
                    session()->setFlashdata('error', 'Error al actualizar los datos: ' . ($errors['message'] ?? json_encode($errors)));
                    log_message('error', 'Fallo al actualizar usuario ID ' . $userId . ': ' . ($errors['message'] ?? json_encode($errors)));
                    return redirect()->to('/registrar')->withInput();
                }
            } else {
                // Caso: Cliente (id_rol = 2 o no hay sesion)
                // Verificar si hay sesion activa (no deberia haberla para clientes nuevos)
                if ($session->has('id_rol')) {
                    log_message('debug', 'Sesion activa detectada para un cliente: id_rol=' . ($idRol ?? 'no definido'));
                }

                // Verificar si el correo ya existe
                if ($existingUser) {
                    session()->setFlashdata('error', 'Este correo ya esta registrado.');
                    return redirect()->to('/registrar')->withInput();
                }

                // Registrar como cliente nuevo
                $data['id_rol'] = 2;
                $data['primer_login'] = 0;

                if ($this->usuarioModel->insert($data)) {
                    session()->setFlashdata('success', 'Registro exitoso. Por favor inicia sesion.');
                    return redirect()->to('/ingresar');
                } else {
                    $errors = $this->usuarioModel->errors();
                    session()->setFlashdata('error', 'Error al guardar los datos: ' . json_encode($errors));
                    log_message('error', 'Fallo al insertar cliente: ' . json_encode($errors));
                    return redirect()->to('/registrar')->withInput();
                }
            }
        } catch (\Exception $e) {
            log_message('error', 'Error en Registro::save: ' . $e->getMessage());
            session()->setFlashdata('error', 'Error al procesar el registro: ' . $e->getMessage());
            return redirect()->to('/registrar')->withInput();
        }
    }
}