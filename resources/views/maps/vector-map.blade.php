@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/vector-map.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Vector Maps</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">Maps</li>
                <li class="breadcrumb-item f-w-500 active">Vector Maps</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h2>Vector World Map</h2>
                    <p class="f-m-light mt-1">Below Map is displaying the world map.</p>
                </div>
                <div class="card-body">
                    <div class="jvector-map-height" id="world-map"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h2>Vector Usa Map</h2>
                    <p class="f-m-light mt-1">Below Map is displaying the usa map.</p>
                </div>
                <div class="card-body">
                    <div class="jvector-map-height" id="usa"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h2>Vector Canada Map</h2>
                    <p class="f-m-light mt-1">Below Map is displaying the canada map.</p>
                </div>
                <div class="card-body">
                    <div class="jvector-map-height" id="canada"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h2>Vector India Map</h2>
                    <p class="f-m-light mt-1">Below Map is displaying the india map.</p>
                </div>
                <div class="card-body">
                    <div class="jvector-map-height" id="india"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h2>Vector Asia Map</h2>
                    <p class="f-m-light mt-1">Below Map is displaying the asia map.</p>
                </div>
                <div class="card-body">
                    <div class="jvector-map-height" id="asia"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h2>Vector Canada Map</h2>
                    <p class="f-m-light mt-1">Below Map is displaying the uk map.</p>
                </div>
                <div class="card-body">
                    <div class="jvector-map-height" id="uk"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h2>Vector Chicago Map</h2>
                    <p class="f-m-light mt-1">Below Map is displaying the chicago map.</p>
                </div>
                <div class="card-body">
                    <div class="jvector-map-height" id="chicago"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h2>Vector Australia Map</h2>
                    <p class="f-m-light mt-1">Below Map is displaying the australia map.</p>
                </div>
                <div class="card-body">
                    <div class="jvector-map-height" id="australia"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map-vector.js') }}"></script>
@endsection