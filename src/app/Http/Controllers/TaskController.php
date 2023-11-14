<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
     public function index()
    {
        $tasks = Task::all();
        return view('index', ['tasks' => $tasks]);
    }

     public function add()
    {
        return view('add');
    }

     public function create(TaskRequest $request)
    {
        $form = $request->all();
        Task::create($form);
        return redirect('/');
    }

    public function edit(Request $request){
        $task = Task::find($request->id);
        return view('edit', ['form' => $task]);
    }

    public function update(TaskRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Task::find($request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        return view('delete', ['task' => $task]);
    }

    public function remove(Request $request)
    {
        Task::find($request->id)->delete();
        return redirect('/');
    }
}

