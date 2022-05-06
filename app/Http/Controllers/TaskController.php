<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todolist;
use Illuminate\Validation\ValidationException;

class TaskController extends Controller
{
    public function index()
    {
        $todo = Todolist::all();
        return view('index')->with('todos', $todo);
    }
    public function create()
    {
        return view('create');
    }
    public function show(Todolist $todo)
    {
        return view('show')->with('todos', $todo);
    }

    public function edit(Todolist $todo)
    {
        return view('edit')->with('todos', $todo);
    }
    public function update(Todolist $todo)
    {
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required'],

            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todolist updated successfully');

        return redirect('/');
    }
    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
    public function store()
    {
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required']
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $todo = new Todo();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo lists are created succesfully');

        return redirect('/');
    }
}
