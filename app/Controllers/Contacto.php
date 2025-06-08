<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index()
    {
        // cargar la pagina de contacto
        return view('templates/layout', [
            'title' => 'Contacto',
            'content' => view('pages/informacionContacto')
        ]);
    }
    
    public function send()
    {
        // validar el formulario
        $rules = [
            'nombreUsuario' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'El campo Nombre de Usuario es obligatorio.',
                    'min_length' => 'El Nombre de Usuario debe tener al menos 3 caracteres.'
                ]
            ],
            'correoElectronico' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'El campo Correo Electrónico es obligatorio.',
                    'valid_email' => 'El Correo Electrónico debe ser una dirección de correo válida.'
                ]
            ],
            'motivoConsulta' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo Motivo de Consulta es obligatorio.'
                ]
            ],
            'comentarioAdicional' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'El campo Comentario Adicional es obligatorio.',
                    'min_length' => 'El Comentario Adicional debe tener al menos 10 caracteres.'
                ]
            ]
        ];
        
        if (!$this->validate($rules)) {
            // si la validación falla 
            return view('templates/layout', [
                'title' => 'Contacto',
                'content' => view('pages/informacionContacto', [
                    'validation' => $this->validator
                ])
            ]);
        }
        
        // redirigir con mensaje 
        return redirect()->to('/InformacionDeContacto')->with('message', 
            'Gracias por contactarnos. Te responderemos a la brevedad.');
    }
}