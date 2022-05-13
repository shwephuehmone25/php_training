<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;
  
class DemoController extends Controller
{
    
    public function importExportView()
    {
       return view('import');
    }
   
    public function export() 
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }
   
    public function import() 
    {
        Excel::import(new EmployeesImport,request()->file('file'));
           
        return redirect()->back();
    }
}
