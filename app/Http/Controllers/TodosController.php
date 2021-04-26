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
}
