<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'Usuarios';
    protected $primaryKey = 'id_usuario';
    protected $returnType = 'array';
    protected $allowedFields = ['id_rol', 'id_domicilio', 'dni', 'nombre', 'apellido', 'email', 'telefono', 'contrasena', 'primer_login', 'activo'];

    protected $useTimestamps = false;

    protected $validationRules = [
        'nombre' => 'required|max_length[50]', // Añadido para validar el formulario
        'apellido' => 'required|max_length[50]', // Añadido para validar el formulario
        'email' => 'required|valid_email|is_unique[Usuarios.email,id_usuario,{id_usuario}]', // Permitir actualizaciones
        'dni'   => 'permit_empty|min_length[8]|max_length[8]|numeric|is_unique[Usuarios.dni,id_usuario,{id_usuario}]', // Permitir actualizaciones
        'telefono' => 'permit_empty',
        'contrasena' => 'required|min_length[8]',
    ];

    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
            'max_length' => 'El nombre no puede exceder los 50 caracteres.',
        ],
        'apellido' => [
            'required' => 'El apellido es obligatorio.',
            'max_length' => 'El apellido no puede exceder los 50 caracteres.',
        ],
        'email' => [
            'required' => 'El correo electrónico es obligatorio.',
            'valid_email' => 'Debe ingresar un correo válido.',
            'is_unique' => 'Este correo ya está registrado.',
        ],
        'dni' => [
            'min_length' => 'El DNI debe tener 8 dígitos.',
            'max_length' => 'El DNI debe tener 8 dígitos.',
            'numeric' => 'El DNI debe contener solo números.',
            'is_unique' => 'Este DNI ya está registrado.',
        ],
        'contrasena' => [
            'required' => 'La contraseña es obligatoria.',
            'min_length' => 'La contraseña debe tener al menos 8 caracteres.',
        ],
    ];
}