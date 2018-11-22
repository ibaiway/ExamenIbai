<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function mostrar($id)
        {
        	$reservas = Cliente::where('cliente_id', '$id');
            return view('hotel.index', compact($hotels));
        }
}
