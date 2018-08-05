<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::all();
        return view('tasks/tasks', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $task = new Tasks;
      $task->title = $request->name;
      $task->description = $request->description;
      $task->deadline = date('Y-m-d', strtotime($request->deadline));
      $task->createdById = Auth::id();
      $task->projectId = 2;
      $task->assignee = 1;
      $task->save();
      $tasks = Tasks::all();
      return view('tasks/tasks', compact('tasks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tasks = Tasks::all()->where('id', $id);
        return view('tasks/individual-task', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $userId = Auth::id();
      $newDate = date('Y-m-d', strtotime($request->deadline));
      $project = Tasks::all()->where('id', $id)->first()->update([
        'title' => $request->name,
        'description' => $request->description,
        'deadline' => $newDate
      ]);

      $projects = Projects::all()->where('id', $id);
      $tasks = Tasks::all()->where('id', $id);
      return view('tasks/individual-task', compact('projects', 'tasks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $task = Tasks::all()->where('id', $id)->first();
      $task->delete();
      $id = Auth::id();
      $tasks = Tasks::all()->where('createdById', '==', $id)->take(4);
      $projects = Projects::all();
      return view('dashboard/dashboard', compact('tasks', 'projects'));
    }
}
