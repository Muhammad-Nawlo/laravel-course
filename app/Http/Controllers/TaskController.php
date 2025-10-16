<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::query()->orderBy('created_at', 'desc')->get();
        $tasksT = Task::query()->count();
        $tasksP = Task::query()->where('status', false)->count();
        $tasksC = Task::query()->where('status', true)->count();

        return view('tasks.index', compact('tasks', 'tasksC', 'tasksP', 'tasksT'));
    }

    public function store(TaskRequest $request)
    {
        Task::query()->create($request->all());

        return redirect()->route('home');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('home');

    }

    public function update(Task $task)
    {
        $task->update([
            'status' => !$task->status
        ]);

        return redirect()->route('home');

    }

}
