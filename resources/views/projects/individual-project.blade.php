@extends('layouts.app')

@section('content')
  @include('dashboard/dash-header')
  <div class="dashboard-content-container">

    <div class="dashboard-content-inner-container">

      <div class="dashboard-content-inner-split-container">
        @include('dashboard/dash-side-nav')
      </div>

      <div class="dashboard-content-inner-split-container">
        <!-- <h1>Individual Project</h1> -->
        @foreach ($projects as $project)
          <h1>{{ $project->name }}</h1>
        @endforeach
      </div>

    </div>

  </div>
@endsection
