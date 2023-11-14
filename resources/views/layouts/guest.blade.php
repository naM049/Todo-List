<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/todo.png') }}">
    <title>TODO</title>
</head>
<body>
<main class="main-content border-radius-lg">
    @yield('content')
</main>
</body>
</html>
