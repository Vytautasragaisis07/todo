<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function prideti(){

        return view('/prideti');
    }
    public function pridetiTask(Request $request )
    {
        $validateData = $request->validate([
                    'subject' => 'required',
                    'priority' => 'required',
                    'date' => 'required',
                    'complete' => 'required',
                    'modified' => 'required'
        ]);

        $task = Task::create([
            'id' => request('id'),
            'subject' => request('subject'),
            'priority' => request('priority'),
            'date' => request('date'),
            'complete' => request('complete'),
            'modified' => request('modified')

        ]);

        return redirect('/home');
    }
    public function controlTasks(){
        $tasks = Task::all();
        return view('/home', compact('tasks'));
    }


    public function TrintiTask(Task $task)
    {
        $task -> delete();
        return redirect('/home');
    }
    public function RedaguotiTask(Task $task){

        return view ('/redaguoti', compact('task'));

    }
    public function Redaguoti_Task(Request $request, Task $task){
        $validateData = $request->validate([
            'subject' => 'required',
            'priority' => 'required',
            'date' => 'required',
            'complete' => 'required',
            'modified' => 'required'
        ]);

        Task::where('id', $task->id)
            ->update(['subject' => request('subject'),
                'priority' => request('priority'),
                'date' => request('date'),
                'complete' => request('complete'),
                'modified' => request('modified')
            ]);

        return redirect('/home');
    }
}
