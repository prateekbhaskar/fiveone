<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fiveone {{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel='stylesheet' href='../../css/style.css'>
</head>

<body>
    <div class='header'>
        <button onclick='location.replace("/")' style="background-color:red">Home</button>
        <button onclick='location.replace("/notes")'>Find minimum notes required</button>
        <button onclick='location.replace("/crud")'>CRUD</button>
        <button onclick='location.replace("/api/posts")'>See all post and comment-JSON</button>
        <button onclick='location.replace("/chart")'>See Chart</button>
    </div>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src='../../js/js.js'></script>
</html>
@if(!empty(session('message')))
<div class='message'>{{session('message')}}</div>
@endif
