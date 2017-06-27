<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
	
	public function index()
	{
		$tasks = Task::all();

		return view('tasks.index')->withTasks($tasks);
	}
	
    public function create()
	{
		return view('tasks.create');
	}
	
	
	public function store(Request $request)
	{
		$input = $request->all();

		Task::create($input);

		return redirect()->back();
	}
	
	
	public function show($id)
	{
		$task = Task::findOrFail($id);

		return view('tasks.show')->withTask($task);
	}
	
	public function edit($id)
	{
		return view('tasks.edit');
	}
	
	
	
	
	
	
}
