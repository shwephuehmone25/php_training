<?php

namespace App\Dao\Task;

use App\Contracts\Dao\Task\TaskDaoInterface;
use App\Models\Todolist;
use Illuminate\Http\Request;

/**
 * Data Access Object for Task
 */
class TaskDao implements TaskDaoInterface
{
  public function selectTask()
  {
    $todo = Todolist::all();
    return $todo;
  }
}
