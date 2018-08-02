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

              @foreach ($tasks as $task)

                {{ $task->title }}
                {{ $task->description }}
                {{ $task->assignee }}
                {{ $task->deadline }}

              @endforeach

          </div>

        </div>

      </div>

    </div>

  </div>

@endsection
