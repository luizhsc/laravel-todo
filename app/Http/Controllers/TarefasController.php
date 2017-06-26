<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefasController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::get();
        return view('tarefas.index')->with('tarefas', $tarefas);
    }
    
    public function create()
    {
        return view('tarefas.create');
    }
    
    public function store(Request $request)
    {
        $tarefa = new Pastel;
        $tarefa->titulo = $request->input('titulo');
        $tarefa->descricao  = $request->input('descricao');

        $tarefa->save();

        return redirect()->route('tarefas.index');
    }
    
    
    public function edit($id)
    {
        $tarefa = Tarefa::find($id);
        return view('tarefas.edit')->with('tarefa',$tarefa);
    }
    
    
    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->titulo = $request->input('titulo');
        $tarefa->descricao  = $request->input('descricao');
        $tarefa->save();
        return redirect()->route('$tarefas.index');
    }
    
    public function destroy($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}
