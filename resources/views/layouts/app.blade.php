<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Recipe List')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Recipe List</h1>
    <p>Prepared by: Ronnie T. Vargas</p>
    @include('partials._nav')
    @yield('content')
</body>
</html>