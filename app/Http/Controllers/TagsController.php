<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;
use App\Tag;

class TagsController extends Controller {

    public function index() {
        $tags = Tag::all();
        return view('tags.index')->withTags($tags);
    }

    public function create() {
        return view('tags.create');
    }

    public function store(Request $request) {
        $input = $request->all();

        $this->validate($request, [
            'nome' => 'unique:tags'          
         
        ]);

        Tag::create($input);

        return redirect()->route('tags.index');
    }

    public function edit($id) {
        $tag = Tag::find($id);
        return view('tags.edit')->with('tag', $tag);
    }

    public function update($id, Request $request) {
        $tag = Tag::findOrFail($id);

        $this->validate($request, [
            'nome' => 'required',
        ]);

        $input = $request->all();
        $tag->fill($input)->save();
        return redirect()->route('tags.index');
    }

    public function destroy(Request $request, $id) {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tags.index');
    }

    public function show($id) {

        $tag = Tag::findOrFail($id);
        return view('tags.show')->withTag($tag);
    }

}
