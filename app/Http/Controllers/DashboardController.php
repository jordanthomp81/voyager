<?php

namespace App\Http\Controllers;

use App\Projects;
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
        return view('dashboard/dashboard', compact('projects'));
    }
}
