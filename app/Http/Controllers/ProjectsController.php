<?php

namespace App\Http\Controllers;

use App\Projects;
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
        return view('projects/projects', compact('projects'));
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
      return view('projects/crud/create-project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $projects = Projects::all()->where('id', $id);
      return view('projects/individual-project', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $projects = Projects::all()->where('id', $id);
      return view('projects/crud/edit-project', compact('projects'));
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
      $newDate = date('Y-m-d', strtotime($request->deadline));
      $project = Projects::all()->where('id', $id)->first()->update([
        'name' => $request->name,
        'description' => $request->description,
        'deadline' => $newDate
      ]);

      $projects = Projects::all()->where('id', $id);
      return view('projects/individual-project', compact('projects'));
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
