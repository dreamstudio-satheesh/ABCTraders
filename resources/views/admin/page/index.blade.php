@extends('layouts.partials.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
    <div class="col-auto header-right-wrapper page-title">
        <div>
            <h2>Pages Management</h2>
            <nav>
                <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                    <li class="breadcrumb-item f-w-500">Laravel Example</li>
                    <li class="breadcrumb-item f-w-500 active">Pages Management</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header categories-edit pb-0 card-no-border">
                        <a href="{{ route('admin.page.create') }}" class="btn btn-primary">{{ __('Add Page')
                            }}</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endsection