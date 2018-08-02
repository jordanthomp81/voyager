@extends('layouts.app')

@section('content')
  @include('dashboard/dash-header')
  <div class="content-container">

    <div class="content-inner-container">

      <div class="content-inner-split-container">
        @include('dashboard/dash-side-nav')
      </div>

      <div class="content-inner-split-container">

      </div>

    </div>

  </div>

@endsection
