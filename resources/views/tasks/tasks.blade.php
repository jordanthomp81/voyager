@extends('layouts.app')

@section('content')

  @include('dashboard/dash-header')

  <div class="content-container">

    <div class="content-inner-container">

      <div class="content-inner-split-container">

        @include('dashboard/dash-side-nav')

      </div>

      <div class="content-inner-split-container">

        <div class="task-content-inner-split-container">

          <h1 class="task-main-title">Tasks</h1>

          <div class="clear"></div>

          <div class="task-content-container">

            <h2 class="task-sub-title">Today</h2>

              @foreach ($tasks as $indexKey => $task)

                @if($task->completed != 1)

                  <?php
                    // dd($task->deadline);
                    if($task->deadline == null) {
                      $task->deadline == null;
                    }else {
                      $task->deadline = explode('-', $task->deadline)[1] . '/' . explode('-', $task->deadline)[2] . '/' . explode('-', $task->deadline)[0];
                    }
                    // dd($task->deadline);
                    $temptaskId = 'tasks/' . $task->id;
                    $task->description = substr($task->description, 0, 80) . '...';
                  ?>

                  <!-- <a href="tasks/{{ $task->id }}" class="content-task"> -->
                  <div href="#!" class="content-task">

                    <div class="pretty p-svg p-round p-pulse">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <!-- svg path -->
                        <svg class="svg svg-icon" viewBox="0 0 20 20">
                          <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                        </svg>
                        <label></label>
                      </div>
                    </div>

                    <a href="tasks/{{ $task->id }}" class="content-task-project-container">

                      <h2>{{ $task->title }}</h2>

                      <p class="content-task-project">Projects > {{ $projectNames[$indexKey] }}</p>

                    </a>

                    <div class="content-deadline-container">

                      <p class="content-task-deadline">Deadline:

                        @if($task->deadline == null)
                          No Deadline
                        @else
                          {{ $task->deadline }}
                        @endif

                      </p>

                    </div>

                  </div>

                @endif

              @endforeach

            <h2 class="task-sub-title">Due Soon</h2>

            <h2 class="task-sub-title">All Tasks(0)</h2>

          </div>

        </div>

      </div>

    </div>

  </div>

  @include('modals/modals')

@endsection
