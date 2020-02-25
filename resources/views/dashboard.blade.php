@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

  @contentHeader(['breadcrumbs' => ['Home', 'Dashboard']])
    @slot('title')
      Dashboard
    @endslot
  @endcontentHeader

  <div class="container-fluid">
      <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
          @infoBox([
            'background' => 'bg-primary',
            'icon'  => 'far fa-folder',
            'text' => 'Projects',
            'number' => '0',
          ])
          @endinfoBox
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          @infoBox([
            'background' => 'bg-danger',
            'icon'  => 'fas fa-tasks',
            'text' => 'Tasks',
            'number' => '0',
          ])
          @endinfoBox
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          @infoBox([
            'background' => 'bg-success',
            'icon'  => 'far fa-check-square',
            'text' => 'Completed Task',
            'number' => '0',
          ])
          @endinfoBox
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          @infoBox([
            'background' => 'bg-warning',
            'icon'  => 'fas fa-user-clock',
            'text' => 'Completion Rate',
            'number' => '0%',
          ])
          @endinfoBox
        </div>

      </div>
  </div>

@endsection
