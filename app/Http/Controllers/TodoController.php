<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoController extends Controller
{

    public function index(): View
    {
        $todos = Todo::whereBelongsTo(auth()->user())->get();
        return view('todos', ['todos' => $todos]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required'
        ]);

        Todo::create([
            'title' => $request->title,
            'user_id' => \Auth::user()->id,
            'description' => $request->description,
            'completed' => (bool)$request->completed
        ]);

        return redirect()->back();

    }

    public function create()
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, Todo $todo): RedirectResponse
    {
        $request->validate([
            'title' => 'required'
        ]);

        $todo->update([
            'title' => $request->title,
            'user_id' => \Auth::user()->id,
            'description' => $request->description,
            'completed' => (bool)$request->completed
        ]);


        return redirect(route('todos.index'));
    }

    public function destroy(Todo $todo): RedirectResponse
    {
        $todo->delete();

        return redirect(route('todos.index'));

    }
}
