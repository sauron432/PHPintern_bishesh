<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $task = Tasks
        return view('index',compact('task'));
    }
}
