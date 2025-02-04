@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/leaflet.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Map JS</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">Maps</li>
                <li class="breadcrumb-item f-w-500 active">Map JS</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h2>Map at a Specified Location</h2>
                    <p class="f-m-light mt-1">Display a map at a specified location and zoom level.</p>
                </div>
                <div class="card-body z-1">
                    <div class="map-js-height" id="weathermap"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h2>Map Using View Bounds</h2>
                    <p class="f-m-light mt-1">Display a map of a given area.</p>
                </div>
                <div class="card-body z-1">
                    <div class="map-js-height" id="map2"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/map-js/leaflet.js') }}"></script>
<script src="{{ asset('assets/js/map-js/leaflet-hash.js') }}"></script>
<script src="{{ asset('assets/js/map-js/custom.js') }}"></script>
<script src="{{ asset('assets/js/map-js/map-custom2.js') }}"></script>
@endsection