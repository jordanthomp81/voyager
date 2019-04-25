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
        $tasks = Tasks::all()->sortByDesc('deadline')->take(3);
        $projects = Projects::all()->where('createdById', '==', $id)->take(4)->sortByDesc('deadline');
        $projectIdArr = $projects->pluck('id')->toArray();
        $tasktIdArr = Tasks::where('id' ,'>' ,0)->pluck('projectId')->toArray();
        $compareArr = array_intersect($projectIdArr, $tasktIdArr);
        $compareArr = array_values($compareArr);
        for ($i = 0; $i < sizeof($compareArr); $i++) {
          $taskByIdArr = Tasks::all()->where('projectId' ,'==' , $compareArr[$i]);
          $taskCounts[$compareArr[$i]] = sizeof($taskByIdArr);
        }
        $projects = Projects::all();
        $projectIdArr = [];
        $projectNameArr = [];
        foreach ($tasks as $task => $value) {
          array_push($projectIdArr, $value->projectId);
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
        $projects = Projects::all()->where('createdById', '==', $id)->take(4)->sortByDesc('deadline');
        return view('dashboard/dashboard', compact('projects', 'tasks', 'taskCounts', 'projectNames'));
    }
}
