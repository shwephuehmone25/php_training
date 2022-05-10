<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;
use Illuminate\Validation\ValidationException;

class TaskController extends Controller
{
    public function index()
    {
       
        return view('index')->with('todolist', $todo);
    }
    /* 
    * Create task list view
    * 
    * @param Request $request
    * @return array object
    */
    public function create()
    {
        return view('create');
    }
    /* 
    * Show task list view
    * 
    * @param Request $request
    * @return array object
    */
    public function show(todolist $todo)
    {
        $todo = Todolist::all();
        
        return view('show')->with('todolist', $todo);
    }
    /* 
    * edit task list view
    * 
    * @param Request $request
    * @return array object
    */
    public function edit($id)
    {
        $todo = Todolist::select('*')->where('id', '=', $id)->get();
        return view('edit')->with('todolist', $todo);
    }
    /* 
    * update task list view
    * 
    * @param Request $request
    * @return array object
    */
    public function update(Request $request)
    {
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required'],

            ]);
        } catch (ValidationException $e) {
        }

        Todolist::where('id', '=', $request->id)->update
                    ([
                        'name' => $request->name,
                        'description' => $request->description,
                    ]);
        session()->flash('success', 'Todolist updated successfully');

        return redirect('/');
    }
    /* 
    * Delete task list view
    * 
    * @param $id
    * @return array object
    */
    public function delete($id)
    {
        Todolist::where('id', '=', $id)->delete();
        return redirect('/');
    }
    /* 
    * Store task list view
    * 
    * @param Request $request
    * @return array object
    */
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

        $todo = new Todolist();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo lists are created succesfully');

        return redirect('/');
    }
}
