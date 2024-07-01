<?php
namespace domain\Services;

use App\Models\Student;

class StudentService {





    protected $task;
    public function __construct()
    {

        $this->task = new Student();
    }



    public function all()
    {
        return  $this->task->all();

    }



    public function store($request)
    {
        $this->task->create($request);

    }



    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();

    }

    public function  done($task_id)
    {
        $task = $this->task->find($task_id);
        $task->done = 1;
        $task->update();

    }

}



