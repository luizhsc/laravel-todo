<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefasController extends Controller
{
    public function index()
    {       
		$tasks = Tarefa::all();
		return view('tarefas.index')->withTarefas($tasks);        
		
    }
    
    public function create()
    {
        return view('tarefas.create');
    }
    
    public function store(Request $request)
    {	
		$input = $request->all();
        Tarefa::create($input);		
		
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
        return redirect()->route('tarefas.index');
    }
    
    public function destroy(Request $request, $id)
    {			
		$tarefa = Tarefa::findOrFail($id);									
		$tarefa->delete();		
		return redirect()->route('tarefas.index');
    }
	
	
	public function show($id)
	{
		$tarefa = Tarefa::findOrFail($id);
		return view('tarefas.show')->withTarefa($tarefa);
	}
	
	public function autocomplete(Request $request)
    {
        $term=$request->term;
        $data = stationary::where('item','LIKE','%'.$term.'%')
        ->take(10)
        ->get();
        $results=array();
        foreach ($data as $key => $v){
			$result[]=['value' =>$v->item];
        }
        return response()->json($results);
}
}
