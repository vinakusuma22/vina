<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="http://localhost:8080/laravel/public/css/bootstrap.css">
</head>
<body>
<header>
@include('layout.header')
</header>
<ul>
@section('sidebar')
<li>HTML</li>
<li>CSS</li>
<li>JS</li>
@show
</ul>

<div class="container">
@yield('content')
</div>
</body>
</html>