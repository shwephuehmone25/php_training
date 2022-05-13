<?php

namespace App\Contracts\Dao\Employee;

use Illuminate\Http\Request;

/**
 * Interface of Data Access Object for Employee
 */
interface EmployeeDaoInterface
{
  public function selectEmployee();
  
}
