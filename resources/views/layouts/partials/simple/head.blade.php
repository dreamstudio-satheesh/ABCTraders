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
</head>
<script>
  var baseUrl = "{{ asset('') }}";
</script>