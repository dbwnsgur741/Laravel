<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Laravel')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/tailwind.css') }}">
</head>
<body>
<!--
<ul>
    <li><a href="/">Welcom</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/hello">Hello</a></li>
</ul>
-->
<div class="container mx-auto">
  @yield('contents')
</div>
</body>
</html>
