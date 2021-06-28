
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Portafolio</title>
    <meta name="description" content="">
    <meta name="author" content="">
     <!-- mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet">
</head>
<body id="top" class="ss-preload">


    <!-- preloader -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header -->
    <header class="s-header">
        <div class="row s-header__nav-wrap">
            <nav class="s-header__nav">
                <ul>
                    <li class="current"><a class="smoothscroll" href="#hero">Inicio</a></li>
                    <li><a class="smoothscroll" href="#resume">Portafolio</a></li>
                    <li><a class="smoothscroll" href="#portfolio">Contactos</a></li>
                </ul>
            </nav>
        </div>
         <a class="s-header__menu-toggle" href="#0" title="Menu">
            <span class="s-header__menu-icon"></span>
        </a>
    </header>
  @yield('content')

 <!-- Java Script  -->
 <script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
