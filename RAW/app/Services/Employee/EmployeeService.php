<?php

namespace App\Services\Employee;

use App\Contracts\Dao\Employee\EmployeeDaoInterface;
use App\Contracts\Services\Employee\EmployeeServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for Employee.
 */
class EmployeeService implements EmployeeServiceInterface
{
    /**
     * Employee interface
     */
    private $employeeDao;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmployeeDaoInterface $employeeDaoInterface)
    {
        $this->employeeDao = $employeeDaoInterface;
    }
    public function selectEmployee()
    {
        $employee = $this->employeeDao->selectEmployee();
        return $employee;
    }
}
