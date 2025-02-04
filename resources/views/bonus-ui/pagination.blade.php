@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Pagination</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Pagination</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- simple pagination-->
    <div class="col-md-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Default Pagination</h2>
          <p class="f-m-light mt-1"></p>If the pagination component is used to navigate between a set of search results,
          an appropriate label could be <code>aria-label="Search results pages"</code>.
        </div>
        <div class="card-body">
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-primary pagin-border-primary">
              <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- pagination with active and disabled state-->
    <div class="col-md-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Pagination with Active and Disabled</h2>
          <p class="f-m-light mt-1">Use <code>.disabled</code> for links that appear un-clickable and
            <code>.active</code> to indicate the current page.
          </p>
        </div>
        <div class="card-body">
          <nav aria-label="...">
            <ul class="pagination pagination-success pagin-border-success">
              <li class="page-item disabled"><a class="page-link" href="#!" tabindex="-1">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item active"><a class="page-link" href="#!">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- pagination with icons-->
    <div class="col-md-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Pagination with Icons</h2>
          <p class="f-m-light mt-1">Use an icon or symbol in place of text for some pagination links.</p>
        </div>
        <div class="card-body">
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-secondary pagin-border-secondary">
              <li class="page-item"><a class="page-link" href="#!" aria-label="Previous"><span
                    aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">...</a></li>
              <li class="page-item"><a class="page-link" href="#!">20</a></li>
              <li class="page-item"><a class="page-link" href="#!" aria-label="Next"><span
                    aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- Rounded Pagination-->
    <div class="col-md-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2> Rounded Pagination</h2>
          <p class="f-m-light mt-1">Used in rounded pagination.Use an icon or symbol in place of text for some
            pagination links.<code>[.rounded-circle]</code></p>
        </div>
        <div class="card-body">
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-dark pagin-border-dark gap-2">
              <li class="page-item"><a class="page-link rounded-circle" href="#!" aria-label="Previous"><span
                    aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#!">1</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#!">2</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#!">...</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#!">9</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#!" aria-label="Next"><span
                    aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- pagination alignments-->
    <div class="col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pagination Alignment</h2>
          <p class="f-m-light mt-1">Change the alignment of pagination components with flexbox utilities. For example,
            with <code>.justify-content-center:</code>.</p>
        </div>
        <div class="card-body">
          <!-- left aligned pagination-->
          <nav class="m-b-30" aria-label="Page navigation example">
            <ul class="pagination pagin-border-warning pagination-warning">
              <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
          <!-- center aligned pagination-->
          <nav class="m-b-30" aria-label="Page navigation example">
            <ul class="pagination justify-content-center pagin-border-danger pagination-danger">
              <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#!">I </a></li>
              <li class="page-item active"><a class="page-link" href="#!">II </a></li>
              <li class="page-item"><a class="page-link" href="#!">III</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
          <!-- right aligned pagination-->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end pagin-border-success pagination-success">
              <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#!">i </a></li>
              <li class="page-item"><a class="page-link" href="#!">ii </a></li>
              <li class="page-item"><a class="page-link" href="#!">iii</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- pagination sizing-->
    <div class="col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pagination Sizing</h2>
          <p class="f-m-light mt-1">Use <code>[pagination-lg/pagination-md/pagination-lg]</code> for additional sizes.
          </p>
        </div>
        <div class="card-body">
          <!-- large size pagination-->
          <nav class="m-b-30" aria-label="Page navigation example">
            <ul class="pagination pagination-lg pagination-info pagin-border-info">
              <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
          <!--medium size pagination-->
          <nav class="m-b-30" aria-label="Page navigation example">
            <ul class="pagination pagination-md pagination-info pagin-border-info">
              <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
          <!-- small size pagination-->
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm pagination-info pagin-border-info">
              <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection