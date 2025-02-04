@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jkanban.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Kanban Board</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Apps</li>
        <li class="breadcrumb-item f-w-500 active">Kanban Board</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid jkanban-container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Default Demo </h2>
        </div>
        <div class="card-body">
          <div id="demo1"></div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Custom Board </h2>
          <p class="f-m-light mt-1">Colors, gutter, click on board&apos;s item and restricting which boards to drag
            items too.</p>
        </div>
        <div class="card-body">
          <div id="demo2"></div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>API</h2>
          <p class="f-m-light mt-1">Add item, add board, delete board. </p>
        </div>
        <div class="card-body">
          <div id="demo3"></div>
          <div class="kanban-buttons">
            <button class="btn btn-success" id="addDefault">Add &quot;Default&quot; board</button>
            <button class="btn btn-success" id="addToDo">Add element in &quot;To Do&quot; Board</button>
            <button class="btn btn-danger" id="removeBoard">Remove &quot;Done&quot; Board</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card note p-20">jKanban is pure agnostic javascript plugin for Kanban boards for more options please
        refer <a href="http://www.riccardotartaglia.it/jkanban/" target="_blank">jkanban Official site </a>and <a
          href="https://github.com/riktar/jkanban" target="_blank">githup link</a></div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/jkanban/jkanban.js') }}"></script>
<script src="{{ asset('assets/js/jkanban/custom.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
@endsection