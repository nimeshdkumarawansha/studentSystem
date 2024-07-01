<?php

namespace App\Http\Controllers;

use domain\Facades\StudentFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class studentController extends ParentController
{
    //
    public function index()
    {
        return Inertia::render('Student/index');
    }

    public function store(Request $request)
    {
        return StudentFacade::store($request->all());
    }
    public function list()
    {
        $tasks = StudentFacade::all();

        return response()->json([$tasks]);
    }

    public function delete($task_id)
    {
        StudentFacade::delete($task_id);
        return redirect()->back();
    }

    // public function  done($task_id)
    // {
    //     $task = $this->task->find($task_id);
    //     $task->done = 1;
    //     $task->update();

    //     return redirect()->back();
    // }









}
