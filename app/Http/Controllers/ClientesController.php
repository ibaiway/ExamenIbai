<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Cliente;

class ClientesController extends Controller
{
    public function index()
        {
        	$clientes = Cliente::all();
            return view('cliente.index', compact($clientes));
        }
    public function create(Request $request)
    	{
    		$cliente = new Cliente;

            $cliente->nif = $request->nif;
            $cliente->nombre = $request->nombre;
            $cliente->apellido = $request->apellido;
            $cliente->telefono = $request->telefono;

            $cliente->save();
            return view('enunciado');
    	}
}
