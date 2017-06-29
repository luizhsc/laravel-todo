<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index() {
        $tags = Tag::all();
        return view('tarefas.index')->withTarefas($tags);
    }
    public function create() {
        return view('tags.create');
    }
    public function store(Request $request) {
        $input = $request->all();		
        Tag::create($input);
        return redirect()->route('tarefas.index');
    }
    public function edit($id) {
        $tags = Tag::find($id);
        return view('tags.edit')->with('tags', $tags);
    }
    public function update($id, Request $request) {
        $tags = Tag::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',           
        ]);
        $input = $request->all();
        $tags->fill($input)->save();
        return redirect()->route('tarefas.index');
    }
    public function destroy(Request $request, $id) {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tarefas.index');
    }
    public function show($id) {
        $tag = Tag::findOrFail($id);
        return view('tags.show')->withTarefa($tag);
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
