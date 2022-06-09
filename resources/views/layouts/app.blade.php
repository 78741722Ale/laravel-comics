<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <!-- Site Header -->
    @include('partials.header')
    <!-- Site Main -->
    <main>
        @yield('content')
    </main>
    <!-- Site Footer -->
    @include('partials.footer')

    <!-- Link a JS -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
