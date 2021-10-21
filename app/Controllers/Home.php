<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Pasar parametros a la vista
        $date['nombre']="John Doe";
        $date['programas'] = ['Desarrollo de software','Sitemas','Redes','Video Juegos'];
        $date['contacto']=[
            'cedula'=>'145',
            'nombre'=>'Pepito perez',
            'salario'=>2500000
        ];
        return view('welcome_message',$date);
        //echo "hola desde el metodo index";
    }

    function mindex(){

        echo view ("welcome_message");

    }
}
