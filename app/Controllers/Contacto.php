<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index()
    {
        // Cargar la página de contacto
        return view('templates/layout', [
            'title' => 'Contacto',
            'content' => view('pages/informacionContacto')
        ]);
    }
    
    public function send()
    {
        // Validar el formulario
        $rules = [
            'nombreUsuario' => 'required|min_length[3]',
            'correoElectronico' => 'required|valid_email',
            'motivoConsulta' => 'required',
            'comentarioAdicional' => 'required|min_length[10]'
        ];
        
        if (!$this->validate($rules)) {
            // Si la validación falla, mostrar errores
            return view('templates/layout', [
                'title' => 'Contacto',
                'content' => view('pages/informacionContacto', [
                    'validation' => $this->validator
                ])
            ]);
        }
        
        // Redirigir con mensaje de éxito
        return redirect()->to('/InformacionDeContacto')->with('message', 
            'Gracias por contactarnos. Te responderemos a la brevedad.');
    }
}