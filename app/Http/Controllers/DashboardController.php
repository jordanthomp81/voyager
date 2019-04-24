<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id = 1;
        $projects = Projects::all()->where('createdById', '==', $id)->take(4);
        $projectIdArr = $projects->pluck('id')->toArray();
        $tasktIdArr = Tasks::where('id' ,'>' ,0)->pluck('projectId')->toArray();
        $compareArr = array_intersect($projectIdArr, $tasktIdArr);
        $compareArr = array_values($compareArr);
        for ($i = 0; $i < sizeof($compareArr); $i++) {
          $taskByIdArr = Tasks::all()->where('projectId' ,'==' , $compareArr[$i]);
          $taskCounts[$compareArr[$i]] = sizeof($taskByIdArr);
        }

        return view('dashboard/dashboard', compact('projects', 'taskCounts'));
    }
}
