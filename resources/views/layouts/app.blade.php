<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pila Bibr: {{$title}}</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{asset('css/app.css')}}'>
    <script src='main.js'></script>
</head>
<body>
   @include('layouts.main_menu')
    @yield('content')
  
   
</body>
</html>