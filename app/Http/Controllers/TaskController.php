<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        return response()->json([
            'tasks' => $tasks
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return response()->json([
            'message' => 'Task created successfully!',
            'task' => $task
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Task::find($id);

        if($task){
            return response()->json([
                'task' => $task
            ], 200);
        } else {
            return response()->json([
                'message'=> 'Task not found',
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = [
            'started_at' => $request->started_at,
            'completed_at' => $request->completed_at,
            'title' => $request->title,
            'detail' => $request->detail
        ];

        $task = Task::where('id', $id)->update($update);
        $tasks = Task::all();

        if ($task) {
            return response()->json([
                'message'=> 'Task update',
                'tasks' => $tasks
            ], 200);
        } else {
            return response()->json([
                'message' => 'Task not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::where('id', $id)->delete();
        if ($task) {
            return response()->json([
                'message' => 'Task deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Task not found',
            ], 404);
        }
    }
}
