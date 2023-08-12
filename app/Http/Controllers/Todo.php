<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Todo extends Controller
{

    public function index()
    {
        return view('todos',['data'=>[],'id'=>0]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
