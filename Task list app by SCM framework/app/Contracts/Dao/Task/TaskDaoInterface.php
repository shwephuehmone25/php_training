<?php

namespace App\Contracts\Dao\Task;

use Illuminate\Http\Request;

/**
 * Interface of Data Access Object for Task
 */
interface TaskDaoInterface
{
  public function selectTask();
  
}
