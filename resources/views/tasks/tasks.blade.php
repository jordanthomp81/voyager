@extends('layouts.app')

@section('content')
  @include('dashboard/dash-header')
  <div class="dashboard-content-container">

    <div class="dashboard-content-inner-container">

      <div class="dashboard-content-inner-split-container">
        @include('dashboard/dash-side-nav')
      </div>

      <div class="dashboard-content-inner-split-container">

        <div class="task-content-inner-split-container">

          <h1 class="task-main-title">Tasks</h1>

          <div class="clear"></div>

          <div class="task-content-container">

            <h2 class="task-sub-title">Today</h2>

            <h2 class="task-sub-title">Due Soon</h2>

            <h2 class="task-sub-title">All Tasks(0)</h2>

          </div>

        </div>

      </div>

    </div>

  </div>
@endsection
