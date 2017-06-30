<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;
use App\Tag;

class TarefasController extends Controller {
	
	public function busca(Request $request) {
		 
		$tags = Tag::pluck('nome', 'id')->toArray();		 
		$tags = collect([$tags])->all();	
		 
		$search = \Request::get('search'); //<-- we use global request to get the param of URI 	
		$query = Tarefa::where('tag', $search)->get()->count();
		
		
		if ($query === 0){
			$tasks = Tarefa::all();
			return view('tarefas.index')->withTarefas($tasks, $tags);
		}elseif ($query > 0){
				$tasks = Tarefa::where('tag', $search)->get();
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

        //$tags = Tag::get();        
        //return view('your view', compact('items', $items));
		
		//$tags= Tag::pluck('nome')->toArray();		
		
		//$categories = Category::select('id', 'name')->lists('name', 'id')->prepend('Select a category', '')->toArray();
		//$tags = Tag::select('nome')->lists('nome')->prepend('Select a category', '')->toArray();
		
		
		$tags= Tag::pluck('nome')			
			->toArray();	
		
        return view('tarefas.create', compact('tags'));
    }

    public function store(Request $request) {
        $input = $request->all();		

		$this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'required',
			'tag' => 'required'
        ]);		
		
        Tarefa::create($input);
        return redirect()->route('tarefas.index');
    }

    public function edit($id) {
        $tarefa = Tarefa::find($id);
		
		$tags= Tag::pluck('nome')->toArray();
		
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

    
}
