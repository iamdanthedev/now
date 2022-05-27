<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css"/>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div id="root"></div>
{{--    <div>--}}
{{--        <a class="btn btn-primary" href="/auth/redirect">--}}
{{--            <i class="bi bi-github"></i>--}}
{{--            Sign in with GitHub--}}
{{--        </a>--}}
{{--    </div>--}}
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
