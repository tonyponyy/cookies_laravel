<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompruebaController extends Controller
{
    public function ver(Request $contra){
            print $contra->usuario;
            print '<p> Contraseña correcta </p>';
    }
}
//marisol
//massiel
//rafael
//rocio durcal
//
?>