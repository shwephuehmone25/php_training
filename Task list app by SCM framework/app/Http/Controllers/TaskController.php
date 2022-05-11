<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Task\TaskServiceInterface;
use Illuminate\Http\Request;
use App\Models\Todolist;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * task interface
     */
    private $taskInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaskServiceInterface $taskServiceInterface)
    {
        $this->taskInterface = $taskServiceInterface;
    }
    /*select all data from  todolist tables*/
    public function index()
    {
       
        $todo = Todolist::all();
        return view('index')->with('todolist', $todo);
    }
    /*create a new todolist  in tables*/
    public function create()
    {
        return view('create');
    }
    /*insert data into todolist tables*/
    public function insert()
    {
        DB::insert('insert into todolist (id, name,description) values (?, ?,?)', [2, 'Fixing']);
    }
     /*show all data from  todolist tables*/
    public function show(todolist $todo)
    {
        $todo = Todolist::all();
        
        return view('show')->with('todolist', $todo);
    }

    public function edit($id)
    {
        $todo = Todolist::select('*')->where('id', '=', $id)->get();
        return view('edit')->with('todolist', $todo);
    }
    /*update where name=? from todolist table*/
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

    /*delete data from todolist table*/
    public function delete($id)
    {
        Todolist::where('id', '=', $id)->delete();
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

        $todo = new Todolist();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo lists are created succesfully');

        return redirect('/');
    }
}
