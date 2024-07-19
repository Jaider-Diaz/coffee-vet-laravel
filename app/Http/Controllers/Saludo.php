<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saludo extends Controller
{
    public function saludito(){
        return 'Oh, estoy trabajando con Laravel';
    }
}
