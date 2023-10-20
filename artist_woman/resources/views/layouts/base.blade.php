<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    
</head>

<body>
    <div class="container-fluid">
        <!-- header giong nhau  -->
       
        <!-- main conten giong nhau -->
        @yield('main')
        <!-- footer giong nhau -->
       

    </div>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>

</html>