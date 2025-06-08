<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class PerfilController extends Controller
{
    protected $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        // Verificar si hay sesion activa
        $session = session();
        if (!$session->has('id_rol')) {
            session()->setFlashdata('error', 'Debes iniciar sesion para acceder a esta pagina.');
            return redirect()->to('/ingresar');
        }

        // Obtener los datos del usuario de la sesion
        $userId = $session->get('user_id');
        $usuario = $this->usuarioModel->find($userId);

        if (!$usuario) {
            session()->setFlashdata('error', 'Usuario no encontrado.');
            return redirect()->to('/ingresar');
        }

        // Cargar la vista con los datos del usuario
        return view('templates/layout', [
            'title' => 'Editar Perfil',
            'content' => view('pages/editar_perfil', ['usuario' => $usuario])
        ]);
    }
}