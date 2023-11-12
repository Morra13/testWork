<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name', 'title') }}</title>

    <link rel="stylesheet" href="{{ asset('storage') }}/css/normalize.css">
    <link rel="stylesheet" href="{{ asset('storage') }}/css/style.css">

    <link type="image/png" sizes="16x16" rel="icon" href="{{ asset('storage') }}/favicon.svg">
</head>
<body class="page">

    @yield('content')

    <script src="{{ asset('storage') }}/js/dropDown.js?{{rand()}}"></script>
    <script src="{{ asset('storage') }}/js/popupAdd.js?{{rand()}}"></script>
    <script src="{{ asset('storage') }}/js/popupCheck.js?{{rand()}}"></script>
    <script src="{{ asset('storage') }}/js/popupEdit.js?{{rand()}}"></script>
    <script src="{{ asset('storage') }}/js/popupAuth.js?{{rand()}}"></script>
    {{--    <script src="{{ asset('storage') }}/js/popupReg.js?{{rand()}}"></script>--}}
    <script src="{{ asset('storage') }}/js/attribute.js?{{rand()}}"></script>
</body>
</html>
