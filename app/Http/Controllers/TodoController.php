<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index')->with('todos',$todos);
    }
    public function show(Todo $todo)
    {
        return view('todo.show')->with('todo',$todo);
    }
    public function create()
    {
        return view('todo.create');
    }
    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'memo' => 'required'
        ]);
        $data = request()->all();

        $todo = new Todo();
        $todo->title = $data['title'];
        $todo->memo = $data['memo'];
        $todo->completed = false;

        $todo->save();
        session()->flash('success', 'Todo created Sucessfully.');

        return redirect('/todo');
    }
    public function edit(Todo $todo)
    {
        return view('todo.edit')->with('todo',$todo);
    }
    public function update(Todo $todo)
    {
        $this->validate(request(),[
            'title' => 'required',
            'memo' => 'required'
        ]);
        $data = request()->all();
        $todo->title = $data['title'];
        $todo->memo = $data['memo'];
        $todo->completed = false;

        $todo->save();
        session()->flash('success', 'Todo updated Sucessfully.');


        return redirect('/todo');
    }
    public function completed(Todo $todo)
    {
        $todo->completed = true;

        $todo->save();
        session()->flash('success', 'Todo Completed.');

        return redirect('/todo');
    }
    public function incomplete(Todo $todo)
    {
        $todo->completed = false;

        $todo->save();
        return redirect('/todo');
    }
    public function delete(Todo $todo)
    {
        $todo->delete();
        session()->flash('success', 'Todo Deleted Sucessfully.');


        return redirect('/todo');
    }
}
