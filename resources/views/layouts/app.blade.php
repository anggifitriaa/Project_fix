<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="vanta-js">
    <div class="container col-xl-10 col-xxl-10 px-8 py-5">
    <div class="col-lg-10 text-center text-lg-start">
      <h1 class="display-10 fw-bold lh-1 mb-3">Kasir Restoran</h1>
</div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
<script>
VANTA.GLOBE({
  el: "#vanta-js",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 750.00,
  minWidth: 750.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x3bff,
  color2: 0xff0505,
  size: 1.40,
  backgroundColor: 0xffffff
})
</script>

        <main class="py-4">
            @yield('content')
        </main>
        

 
    </div>
</body>
</html>
