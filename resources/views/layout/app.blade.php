<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Romel Mahmud</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css')}}" />
    <script src="{{asset('https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js')}}"></script>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap')}}" rel="stylesheet">
</head>
<body>
@include('components.header')
    @yield('content')
  @include('components.footer')
  <script src="{{asset('asset/vendors/js/glightbox.min.js')}}"></script>

    <script type="text/javascript">
      const lightbox = GLightbox({
        'touchNavigation': true,
        'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoPlayVideos': 'true',
});

    </script>
     <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
