@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Tags Management</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item f-w-500">Laravel Example</li>
                <li class="breadcrumb-item f-w-500 active">Tags Management</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col-xxl-6 box-col-6">
                <div class="card role-management">
                    <div class="card-body bg-primary">
                        <div class="blog-card">
                            <div class="blog-card-content">
                                <div class="role-details">
                                    <div class="role-profile">
                                        <img src="{{ asset('assets/images/avtar/3.jpg') }}" alt="Ticket-star">
                                    </div>
                                    <div class="role-profile-details">
                                        <h2>Welcome back {{ \Illuminate\Support\Str::title(auth()->user()->first_name ?? '') }} {{ \Illuminate\Support\Str::title(auth()->user()->last_name ?? '') }} !</h2>
                                    </div>
                                </div>
                                <div class="divider-h-line bg-light"></div>
                                <div class="blog-tags">
                                    <div class="tags-icon">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ sprintf("%02d",\App\Models\Blog::all()->count()) }}</h2>
                                        <p>Total Blogs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-image">
                                <img src="{{ asset('assets/images/role-management.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="btn-light1-primary b-r-15">
                                    <div class="upcoming-box">
                                        <div class="upcoming-icon bg-primary">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#tags') }}"></use>
                                            </svg>
                                        </div>
                                        <p>Tag</p>
                                        <a href="{{ route('admin.tag.create') }}" class="btn btn-primary">{{ __('Add Tag') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 tag-card">
                                <div class="btn-light1-secondary b-r-15">
                                    <div class="upcoming-box">
                                        <div class="upcoming-icon bg-secondary">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                                            </svg>
                                        </div>
                                        <p>Blog</p>
                                        <a href="{{ route('admin.blog.create') }}" class="btn btn-secondary">{{ __('Add Blog') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
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