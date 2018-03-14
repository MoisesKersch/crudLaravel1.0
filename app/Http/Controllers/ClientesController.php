<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Redirect;
use Session;

class ClientesController extends Controller
{
	public function index()
    {
    	$clientes = Cliente::get();
    	return view('clientes/lista', ['clientes' => $clientes]);
    }

    public function novo()
    {
    	return view('clientes/formulario');
    }

    public function salvar(Request $request)
    {
    	$cliente = new Cliente();

    	$cliente = $cliente->create($request->all());

    	Session::flash('message', 'Cliente cadastrado com sucesso!');
        return Redirect::to('clientes/novo');
    }

    public function editar($id)
    {

    	$cliente = Cliente::findOrFail($id);

    	return view('clientes/formulario', ['cliente' => $cliente]);
    }

    public function atualizar($id, Request $request)
    {
    	$cliente = Cliente::findOrFail($id);

    	$cliente->update($request->all());

    	Session::flash('message', 'Cliente atualizado com sucesso!');

    	return Redirect::to('clientes/'.$cliente->id.'/editar');
    }

    public function deletar($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        Session::flash('message', 'Cliente removido com sucesso!');

        return Redirect::to('clientes');
    }
}