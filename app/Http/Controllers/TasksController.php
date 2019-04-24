<?php

namespace App\Http\Controllers;

use Response;
use App\Tasks;
use App\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today()->toDateTimeString();
        $nextWeek = Carbon::today()->addWeeks(1)->toDateTimeString();
        $taskWeeks = Tasks::where('deadline', '<=', $nextWeek)->where('deadline', '>=', $today)->get();
        $tasks = Tasks::all()->sortByDesc('deadline');
        $projects = Projects::all();
        $projectIdArr = [];
        $projectNameArr = [];
        // $tasks = Tasks::all()->where('projectId', $id)->where('createdById', $userId);
        // $projectIdArr = Projects::where('id' ,'>' ,0)->pluck('id')->toArray();
        for ($n=0; $n < count($tasks); $n++) {
          if(isset($tasks[$n]->projectId)) {
            array_push($projectIdArr, $tasks[$n]->projectId);
          }
        }
        for ($m = 0; $m < count($projectIdArr); $m++) {
          $tempCurrItems = $projects->where('id', $projectIdArr[$m]);
          for ($h = 0; $h < count($tempCurrItems); $h++) {
            foreach ($tempCurrItems as $tempCurrItem) {
              array_push($projectNameArr, $tempCurrItem->name);
            }
          }
        }
        $projectNames = $projectNameArr;
        return view('tasks/tasks', compact('tasks', 'taskWeeks', 'projectNames', 'today', 'nextWeek'));
    }

    /**
     * Set the given task id {taskId} to be completed in the db
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function finish($id)
    {
      $tasks = Tasks::all();
      $currTaskItem = DB::table('tasks')->where(['id' => $id])->update([
        'completed' => 1
      ]);
      $projects = Projects::all();
      $projectIdArr = [];
      $projectNameArr = [];
      // $tasks = Tasks::all()->where('projectId', $id)->where('createdById', $userId);
      // $projectIdArr = Projects::where('id' ,'>' ,0)->pluck('id')->toArray();
      for ($n=0; $n < count($tasks); $n++) {
        if(isset($tasks[$n]->projectId)) {
          array_push($projectIdArr, $tasks[$n]->projectId);
        }
      }
      for ($m = 0; $m < count($projectIdArr); $m++) {
        $tempCurrItems = $projects->where('id', $projectIdArr[$m]);
        for ($h = 0; $h < count($tempCurrItems); $h++) {
          foreach ($tempCurrItems as $tempCurrItem) {
            array_push($projectNameArr, $tempCurrItem->name);
          }
        }
      }
      $projectNames = $projectNameArr;
      return view('tasks/tasks', compact('tasks', 'projectNames'));
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
      // dd($projectNames);
      $task = new Tasks;
      $task->title = $request->name;
      $task->description = $request->description;
      $project = $request->project;
      $project = Projects::all()->where('name', $project)->pluck('id')->toArray()[0];
      $task->projectId = $project;
      if($request->deadline != null) {
        $task->deadline = date('Y-m-d', strtotime($request->deadline));
      }else {
        $task->deadline = null;
      }
      $task->createdById = Auth::id();
      $task->assignee = 1;
      $task->completed = '0';
      $task->save();
      $tasks = Tasks::all();

      // $tasks = Tasks::all();
      $projects = Projects::all();
      $projectIdArr = [];
      $projectNameArr = [];
      // $tasks = Tasks::all()->where('projectId', $id)->where('createdById', $userId);
      // $projectIdArr = Projects::where('id' ,'>' ,0)->pluck('id')->toArray();
      for ($n=0; $n < count($tasks); $n++) {
        if(isset($tasks[$n]->projectId)) {
          array_push($projectIdArr, $tasks[$n]->projectId);
        }
      }
      for ($m = 0; $m < count($projectIdArr); $m++) {
        $tempCurrItems = $projects->where('id', $projectIdArr[$m]);
        for ($h = 0; $h < count($tempCurrItems); $h++) {
          foreach ($tempCurrItems as $tempCurrItem) {
            array_push($projectNameArr, $tempCurrItem->name);
          }
        }
      }
      $projectNames = $projectNameArr;

      return view('tasks/tasks', compact('tasks', 'projectNames'));
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
        $modalProjects = Projects::all();
        $projectId = $tasks->pluck('projectId')->toArray()[0];
        $projects = Projects::all()->where('id', $projectId)->pluck('name')->toArray()[0];
        return view('tasks/individual-task', compact('tasks', 'modalProjects', 'projects'));
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
      $project = $request->project;
      $projectId = Projects::all()->where('name', $project)->pluck('id')->toArray()[0];

      if($request->deadline == null) {
        $newDate = null;
      }else {
        $newDate = date('Y-m-d', strtotime($request->deadline));
      }
      // dd(Tasks::all()->where('id', $id)->first());
      $project = DB::table('tasks')->where(['id' => $id])->update([
        'projectId' => $projectId,
        'title' => $request->name,
        'description' => $request->description,
        'deadline' => $newDate
      ]);
      // dd(Tasks::all()->where('id', $id)->first());
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
