<?php

namespace App\Services\Task;

use App\Contracts\Dao\Task\TaskDaoInterface;
use App\Contracts\Services\Task\TaskServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for task.
 */
class TaskService implements TaskServiceInterface
{
    /**
     * task interface
     */
    private $taskDao;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaskDaoInterface $taskDaoInterface)
    {
        $this->taskDao = $taskDaoInterface;
    }
    public function selectTask()
    {
        $todo = $this->taskDao->selectTask();
        return $todo;
    }

}
