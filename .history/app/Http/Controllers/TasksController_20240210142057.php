<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $task = tasks
        return view('index',compact('task'));
    }
}
