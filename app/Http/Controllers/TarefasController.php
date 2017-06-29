<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tarefa;
<<<<<<< HEAD

class TarefasController extends Controller {

=======
class TarefasController extends Controller {
	
>>>>>>> f098be063901a41b68469d0c0b29d02ad796ed08
    public function index() {
        $tasks = Tarefa::all();
        return view('tarefas.index')->withTarefas($tasks);
    }
<<<<<<< HEAD

    public function create() {
        return view('tarefas.create');
    }

    public function store(Request $request) {
        $input = $request->all();
        Tarefa::create($input);

        return redirect()->route('tarefas.index');
    }

=======
    public function create() {
        return view('tarefas.create');
    }
    public function store(Request $request) {
        $input = $request->all();
        Tarefa::create($input);
        return redirect()->route('tarefas.index');
    }
>>>>>>> f098be063901a41b68469d0c0b29d02ad796ed08
    public function edit($id) {
        $tarefa = Tarefa::find($id);
        return view('tarefas.edit')->with('tarefa', $tarefa);
    }
<<<<<<< HEAD

    public function update($id, Request $request) {
        $tarefa = Tarefa::findOrFail($id);



=======
    public function update($id, Request $request) {
        $tarefa = Tarefa::findOrFail($id);
>>>>>>> f098be063901a41b68469d0c0b29d02ad796ed08
        $this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'required'
        ]);
<<<<<<< HEAD

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

=======
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
>>>>>>> f098be063901a41b68469d0c0b29d02ad796ed08
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
<<<<<<< HEAD

}
=======
}
>>>>>>> f098be063901a41b68469d0c0b29d02ad796ed08
