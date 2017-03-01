<?php

namespace App\Http\Controllers;

use Validator;
use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class taskController extends Controller
{
	/**
	 * Show Task Dashboard
	 */
    public function index()
    {
	    return view('tasks', [

	        'tasks' => Task::orderBy('created_at', 'asc')->get()

	    ]);
    }

    /**
     * Add New Task
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('tasks')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('tasks');
         
    }

    /**
     * Delete Task
     */
    public function remove(Request $request)
    {

        Task::findOrFail($request->id)->delete();

        return redirect('tasks');
        
    }
}
