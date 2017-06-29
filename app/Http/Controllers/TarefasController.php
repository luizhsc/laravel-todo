<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;
use App\Tag;

class TarefasController extends Controller {

    public function index() {
        $tasks = Tarefa::all();
        return view('tarefas.index')->withTarefas($tasks);
    }

    public function create() {

        $tags = Tag::get();
        //$tags= Tag::pluck('nome')->toArray();
        //return view('your view', compact('items', $items));
        
        return view('tarefas.create', compact('tags'));
    }

    public function store(Request $request) {
        $input = $request->all();

        Tarefa::create($input);

        return redirect()->route('tarefas.index');
    }

    public function edit($id) {
        $tarefa = Tarefa::find($id);
        return view('tarefas.edit')->with('tarefa', $tarefa);
    }

    public function update($id, Request $request) {
        $tarefa = Tarefa::findOrFail($id);

        $this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'required'
        ]);

        $input = $request->all();

        $tarefa->fill($input)->save();



        return redirect()->route('tarefas.index');
    }

    public function destroy(Request $request, $id) {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }

    public function show($id) {
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefas.show')->withTarefa($tarefa);
    }

    public function autocomplete(Request $request) {
        $term = $request->term;
        $data = stationary::where('item', 'LIKE', '%' . $term . '%')
                ->take(10)
                ->get();
        $results = array();
        foreach ($data as $key => $v) {
            $result[] = ['value' => $v->item];
        }
        return response()->json($results);
    }

    public function getIndex() {
        
    }

}
