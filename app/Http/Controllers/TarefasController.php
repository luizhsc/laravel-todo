<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;
use App\Tag;
use DB;
use Illuminate\Support\Str;

class TarefasController extends Controller {

    public function home(Request $request) {
        return view('home');
    }

    public function busca(Request $request) {

        $tags = Tag::pluck('nome', 'id')->toArray();
        $tags = collect([$tags])->all();

        //$search = \Request::get('search'); //<-- we use global request to get the param of URI 
        $search = $request->input('search');

        if (strlen($search) === 0) {
            $tasks = Tarefa::all();
            return view('tarefas.index')->withTarefas($tasks, $tags);
        } elseif (strlen($search) > 0) {
            $tasks = Tarefa::where('tag', 'like', '%' . $search . '%')->get();
            return view('tarefas.index')->withTarefas($tasks, $tags);
        }
    }

    public function index(Request $request) {
        $tasks = Tarefa::all();

        //$tags= Tag::pluck('nome');
        $tags = Tag::pluck('nome', 'id')->toArray();

        $tags = collect([$tags])->all();


        return view('tarefas.index')->withTarefas($tasks, $tags);
    }

    public function create() {
        $tags = Tag::pluck('nome')
                ->toArray();

        return view('tarefas.create', compact('tags'));
    }

    public function store(Request $request) {
        $input = $request->all();

        $this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'required|max:200',
            'tag' => 'required'
        ]);

        Tarefa::create($input);
        return redirect()->route('tarefas.index');
    }

    public function edit($id) {
        $tarefa = Tarefa::find($id);

        $tags = Tag::pluck('nome')->toArray();

        return view('tarefas.edit', compact('tags'))->with('tarefa', $tarefa);
    }

    public function update($id, Request $request) {
        $tarefa = Tarefa::findOrFail($id);

        $this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'required',
            'tag' => 'required'
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

}
