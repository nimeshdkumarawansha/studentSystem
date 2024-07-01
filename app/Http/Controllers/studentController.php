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
        return  StudentFacade::all();
    }

    public function delete($task_id)
    {
        return StudentFacade::delete($task_id);
    }

    public function  done($task_id)
    {
        return StudentFacade::done($task_id);
    }









}
