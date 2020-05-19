<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    //
    public function ListView()
    { 
    	
    	$tasks = Task::all(); 

		return view('tasks/ListView',compact('tasks'));

    }

    public function DetailView(Task $task)
    {
    	
    	//$task = Task::find($id);

		return view('tasks/DetailView',compact('task'));

    }
}
