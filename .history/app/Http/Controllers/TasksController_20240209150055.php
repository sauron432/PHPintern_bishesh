<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $task = Tasks::where('status','Active')-> get();

        return view('index',compact)
    }
}
