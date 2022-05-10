<?php

namespace App\Dao\Employee;

use App\Contracts\Dao\Employee\EmployeeDaoInterface;
use App\Models\Employee;
use Illuminate\Http\Request;

/**
 * Data Access Object for Employee
 */
class EmployeeDao implements EmployeeDaoInterface
{
  public function selectEmployee()
  {
    $employee = Employee::all();
    return $employee;
  }
}
