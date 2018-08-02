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

              @foreach ($tasks as $task)

                <?php
                  $task->deadline = explode('-', $task->deadline)[1] . '/' . explode('-', $task->deadline)[2] . '/' . explode('-', $task->deadline)[0];
                  $temptaskId = 'tasks/' . $task->id;
                  $task->description = substr($task->description, 0, 80) . '...';
                ?>

                <a href="#" class="content-task">

                  <p class="content-task-deadline">Deadline: {{ $task->deadline }}</p>

                  <h2>{{ $task->title }}</h2>

                  <p class="content-task-description">{{ $task->description }}</p>

                </a>

              @endforeach

            <h2 class="task-sub-title">Due Soon</h2>

            <h2 class="task-sub-title">All Tasks(0)</h2>

          </div>

        </div>

      </div>

    </div>

  </div>

@endsection
