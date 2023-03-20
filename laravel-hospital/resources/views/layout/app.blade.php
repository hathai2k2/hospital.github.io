<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("assets/bootstrap-5.0.2-dist/css/bootstrap.min.css")}}">
    <script src="{{asset("assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js")}}"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>