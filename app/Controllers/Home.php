<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('inicio');
        echo view('footer');
    }

    public function QuienesSomos()
    {
        echo view('header');
        echo view('QuienesSomos');
        echo view('footer');
    }

    public function Comercializacion()
    {
        echo view('header');
        echo view('comercializacion');
        echo view('footer');
    }

    public function InformacionDeContacto()
    {
        echo view('header');
        echo view('informacionContacto');
        echo view('footer');
    }

    public function TerminosYUsos()
    {
        echo view('header');
        echo view('terminosYusos');
        echo view('footer');
    }
}
