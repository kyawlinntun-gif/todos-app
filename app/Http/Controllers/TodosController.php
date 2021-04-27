<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index', [
            'todos' => Todo::all()
        ]);
    }

    public function show(Todo $todo)
    {
        return view('todos.show', [
            'todo' => $todo
        ]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        Todo::create(['name' => $request->name, 'description' => $request->description, 'completed' => false]);

        return redirect('/todos');
    }
}
