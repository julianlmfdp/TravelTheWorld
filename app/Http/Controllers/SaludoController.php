<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function index()
    {
        $nombre = 'Estudiante Laravel';
        return view('saludo', ['nombre' => $nombre]);
        
    }

    //
}
