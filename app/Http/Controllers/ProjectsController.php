<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        // $userId = Auth::id();
        $projectIdArr = Projects::where('id' ,'>' ,0)->pluck('id')->toArray();
        $tasktIdArr = Tasks::where('id' ,'>' ,0)->pluck('projectId')->toArray();
        $compareArr = array_intersect($projectIdArr, $tasktIdArr);
        // we know that id 2 has tasks
        for ($i = 0; $i < sizeof($compareArr); $i++) {
          $taskByIdArr = Tasks::where('projectId' ,'==' , $compareArr[$i]);
          $taskCounts[$compareArr[$i]] = sizeof($taskByIdArr);
        }
        // $tempTaskCountArr[]
        // $tasks = Tasks::all()->where('projectId', $id);
        // array_intersect
        return view('projects/projects', compact('projects', 'taskCounts'));
    }

    /**
     * Display a listing of individual project
     *
     * @return \Illuminate\Http\Response
     */
    public function single($projectId)
    {
        $projects = Projects::all()->where('id', $projectId);
        return view('projects/individual-project', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $project = new Projects;
      $project->name = $request->name;
      $project->description = $request->description;
      $project->deadline = date('Y-m-d', strtotime($request->deadline));
      $project->createdById = Auth::id();
      $project->members = 1;
      $project->save();
      $projects = Projects::all();
      return view('projects/projects', compact('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $userId = Auth::id();
      $projects = Projects::all()->where('id', $id);
      $tasks = Tasks::all()->where('projectId', $id)->where('createdById', $userId);
      $projectIdArr = Projects::where('id' ,'>' ,0)->pluck('id')->toArray();
      $tasktIdArr = Tasks::where('id' ,'>' ,0)->pluck('projectId')->toArray();
      $compareArr = array_intersect($projectIdArr, $tasktIdArr);
      // we know that id 2 has tasks
      for ($i = 0; $i < sizeof($compareArr); $i++) {
        $taskByIdArr = Tasks::where('projectId' ,'==' , $compareArr[$i]);
        $taskCounts[$compareArr[$i]] = sizeof($taskByIdArr);
      }
      return view('projects/individual-project', compact('projects', 'tasks', 'taskCounts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
      $project = Projects::all()->where('id', $id)->first()->update([
        'name' => $request->name,
        'description' => $request->description,
        'deadline' => $newDate
      ]);

      $projects = Projects::all()->where('id', $id);
      $tasks = Tasks::all()->where('projectId', $id)->where('createdById', $userId);
      return view('projects/individual-project', compact('projects', 'tasks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Projects::all()->where('id', $id)->first();
        $project->delete();
        $id = Auth::id();
        $projects = Projects::all()->where('createdById', '==', $id)->take(4);
        return view('dashboard/dashboard', compact('projects'));
    }
}
