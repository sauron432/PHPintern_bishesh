<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $task = Tasks::where('status')
        return view('index',compact('task'));
    }
}
