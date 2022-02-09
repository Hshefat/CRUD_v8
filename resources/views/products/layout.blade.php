<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 8.x CRUD from Scratch</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <div class="text-center" style="margin: 50px 0 50px 0;"><a href="{{url("products")}}"><img
                src="{{asset("logo.png")}}" alt="Logo"></a><br>Laravel 8.x  CRUD from Scratch
    </div>

    @yield('content')
</div>

</body>
</html>