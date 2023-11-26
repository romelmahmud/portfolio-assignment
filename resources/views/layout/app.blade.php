<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   <!-- google font -->

   <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com')}}">
<link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin>
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Anonymous+Pro&family=Poppins:wght@400;700&display=swap')}}" rel="stylesheet">
  <title>Romel Mahmud</title>
</head>
<body>
@include('components.header')
    @yield('content')
  @include('components.footer')
</body>
</html>
