@extends('layouts.partials.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.css') }}">
@endsection

@section('breadcrumb')
    <div class="col-auto header-right-wrapper page-title">
        <div>
            <h2>Blogs Management</h2>
            <nav>
                <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                    <li class="breadcrumb-item f-w-500">Blogs</li>
                    <li class="breadcrumb-item f-w-500 active">Create</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add Blog</h2>
                    </div>
                    <div class="card-body add-post main-post">
                        <form class="row needs-validation" novalidate="" id="blogForm"
                            action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.blog.fields')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom-add-product4.js') }}"></script>
    <script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/custome-validation/validation.js') }}"></script>
@endsection