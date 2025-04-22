<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/layout', [
            'title' => 'Tecnalix',
            'content' => view('pages/inicio')
        ]);
    }

    public function QuienesSomos()
    {
        return view('templates/layout', [
            'title' => 'Quienes Somos',
            'content' => view('pages/QuienesSomos')
        ]);
    }

    public function Comercializacion()
    {
        return view('templates/layout', [
            'title' => 'Comercializacion',
            'content' => view('pages/comercializacion')
        ]);
    }

    public function InformacionDeContacto()
    {
        return view('templates/layout', [
            'title' => 'Contacto',
            'content' => view('pages/informacionContacto')
        ]);
    }

    public function TerminosYUsos()
    {
        return view('templates/layout', [
            'title' => 'Terminos y Usos',
            'content' => view('pages/terminosYUsos')
        ]);
    }
}


