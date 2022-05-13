<?php

namespace App\Http\Controllers\Employee;

use App\Contracts\Services\Employee\EmployeeServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Validation\ValidationException;


class EmployeeController extends Controller
{
    /**
     * Employee interface
     */
    private $employeeInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmployeeServiceInterface $employeeServiceInterface)
    {
        $this->employeeInterface = $employeeServiceInterface;
    }

    public function index()
    {
        $employee = $this->employeeInterface->selectEmployee();
        $employees = Employee::all();
        // Pass data to view
        return view('employee.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('create');
    }

    public function show(employee $employee)
    {
        $employee = Employee::all();
        
        return view('show')->with('employee', $employee);
    }

    public function edit($id)
    {
        $employee = Employee::select('*')->where('id', '=', $id)->get();
        return view('edit')->with('employee', $employee);
    }

    public function update(Request $request)
    {
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'address' => ['required'],
                'salary' => ['required'],

            ]);
        } catch (ValidationException $e) {
        }

        Employee::where('id', '=', $request->id)->update
                    ([
                        'name' => $request->name,
                        'address' => $request->address,
                        'salary' => $request->salary,
                    ]);
        session()->flash('success', 'Employee info is updated successfully');

        return redirect('/');
    }
    public function delete($id)
    {
        Employee::where('id', '=', $id)->delete();
        return redirect('/');
    }
    public function store()
    {
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'address' => ['required'],
                'salary' => ['required'],
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $e = new Employee();
        //On the left is the field name in DB and on the right is field name in Form/view
        $e->name = $data['name'];
        $e->address = $data['address'];
        $e->salary = $data['salary'];
        $e->save();

        session()->flash('success', 'Employees information are created succesfully');

        return redirect('/');
    }
}
