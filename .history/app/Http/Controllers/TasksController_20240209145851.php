<?php

namespace App\Http\Controllers;
use
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $task = Task::where('status','Active')-> get();
    }
}
