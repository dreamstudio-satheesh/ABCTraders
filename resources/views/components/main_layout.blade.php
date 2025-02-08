<!DOCTYPE html>
<html lang="en" @if (Route::currentRouteName()=='admin.layout-rtl' ) dir="rtl" @endif>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
          content="">
        <meta name="keywords"
          content="web app">
        <meta name="author" content="DreamCoderz.com">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
        <title>{{ config('app.name') }}</title>
        @include('layouts.partials.simple.style')
        @livewireStyles
      </head>
      <script>
        var baseUrl = "{{ asset('') }}";
      </script>

    @switch(Route::currentRouteName())

    @case('admin.box-layout')

    <body class="box-layout">
        @break

        @case('admin.layout-rtl')

        <body class="rtl">
            @break

            @case('admin.layout-dark')

            <body class="dark-only">
                @break

                @default

                <body>
                    @endswitch

                    <!-- loader starts-->
                    <div class="loader-wrapper">
                        <div class="loader"></div>
                    </div>
                    <!-- loader ends-->

                    <!-- tap on top starts-->
                    <div class="tap-top">
                        <i data-feather="chevrons-up"></i>
                    </div>
                    <!-- tap on tap ends-->

                    <!-- page-wrapper Start-->
                    <div class="page-wrapper compact-wrapper" id="pageWrapper">
                        <div class="page-header row">
                            <!-- Page Header Start-->
                            @include('layouts.partials.simple.header')
                            <!-- Page Header Ends-->
                        </div>
                        <!-- Page Body Start-->
                        <div class="page-body-wrapper">
                            <!-- Page Sidebar Start-->
                            @include('layouts.partials.simple.sidebar')
                            <!-- Page Sidebar Ends-->
                            <div class="page-body">
                                <!-- Container-fluid starts-->
                                {{ $slot }}
                                <!-- Container-fluid Ends-->
                            </div>
                            <!-- footer start-->
                            @include('layouts.partials.simple.footer')
                            <!-- footer Ends-->
                        </div>
                    </div>
                    @include('layouts.partials.simple.script')
                    @include('admin.inc.alerts')
                    @livewireScripts
                </body>

</html>