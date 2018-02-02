@extends('layouts.app')

@section('content')
  @include('dashboard/dash-header')
  <div class="dashboard-content-container">

    <div class="dashboard-content-inner-container">

      <div class="dashboard-content-inner-split-container">
        @include('dashboard/dash-side-nav')
      </div>

      @foreach ($requests as $request)
      <div class="dashboard-content-inner-split-container">
        {{ $request->name }}
      </div>
      @endforeach

    </div>

  </div>
@endsection