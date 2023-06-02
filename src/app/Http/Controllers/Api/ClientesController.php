<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        
        return response() -> json([
            'status' => 200,
            'mensagem' => 'lista de clientes retornada',
            'clientes' => $clientes
        ]);
    }
}
