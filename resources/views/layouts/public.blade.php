<!DOCTYPE HTML>
<html lang="es">

<head>
  <title>textured_orbs</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="{{url('/')}}">precio_<span class="logo_colour">producto</span></a></h1>
          <h2>Tu asesor de compras en Internet.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li @if (Request::is('/')) class="selected" @endif><a href="{{url('/')}}">Inicio</a></li>
          <li @if (Request::is('productos')) class="selected" @endif><a href="{{url('productos')}}">Productos</a></li>
          <li @if (Request::is('contacto')) class="selected" @endif><a href="{{url('contacto')}}">Contacto</a></li>

          <li>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
          </li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">

      </div>
      <div id="content">
        @yield('content')
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="{{url('/')}}">Inicio</a> | <a href="{{url('productos')}}">Productos</a> | <a href="{{url('contacto')}}">Contacto</a> </p>
      <p>Copyright &copy; precio_producto 2019</p>
    </div>
  </div>
</body>
</html>