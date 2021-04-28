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

        session()->flash('success', 'Todo created successfully!');

        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', [
            'todo' => $todo
        ]);
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $todo->update(['name' => $request->name, 'description' => $request->description, 'completed' => false]);

        session()->flash('success', 'Todo updated successfully!');

        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        session()->flash('success', 'Todo deleted successfully!');

        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['completed' => true]);

        session()->flash('success', 'Todo completed successfully!');

        return redirect('/todos');
    }
}
