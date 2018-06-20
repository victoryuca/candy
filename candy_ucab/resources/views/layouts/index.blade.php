<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Default') | @yield('subtitle', 'Default')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/demo.css" />
    <link rel="stylesheet" href="/css/component2.css" />
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/style2.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script  src="js/index.js"></script>


    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-7243260-2']);
      _gaq.push(['_trackPageview']);
        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

  </head>

  <body>

<header>
  <div class="logo"><img src="/imagenes/logo.png" width="180" hspace="0" alt="Logotipo"/></div>

<form class="form-wrapper cf">
    <input type="text" placeholder="Busca tus caramelos favoritos" required>
    <button type="submit">buscar</button>
</form>

<div class="weapper">


<!--menu-->
 <nav>
  <a href="#">  <img src="/imagenes/servicios.png" width="70" hspace="7" vspace="-100" alt="Logotipo"/>Sevicios</a>
  <a href="#">  <img src="/imagenes/contacto.png" width="70" hspace="7" vspace="-100" alt="Logotipo"/>Contacto</a>
  <a href="../carrito/index.html">  <img src="/imagenes/carrito.png" width="70" hspace="7" vspace="-100" alt="Logotipo"/>Mi carrito</a>
  <a href="../registro/index.html">  <img src="/imagenes/user.png" width="70" hspace="7" vspace="-100" alt="Logotipo"/>Mi cuenta</a>
 </nav>
  
  <div>@yield('inicio')</div>
  <div>@include('flash::message')</div>

  <footer class="container-fluid top-buffer container-default">
  <div class="container top-buffer">
    <div class="row">
            <div class="col-xs-6 col-sm-3">
                <ul class="list-unstyled">
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Servicio al cliente 100% garantizado</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Política de privacidad</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3">
                <ul class="list-unstyled">
                    <li><a href="#">Política de envío</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Seguimiento de su pedido</a></li>
                    <li><a href="#">Ofertas y Promociones</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3">
                <ul class="list-unstyled">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Intagram</a></li>
                    <li><a href="#">Email</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3">
                <ul class="list-unstyled">
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Top 10</a></li>
                    <li><a href="#">Volver arriba</a></li>
                </ul>
            </div>
    </div>
    <hr>
  
            <div class="col-xs-4">
                <p class="text-muted pull-right"> 2018 Brito Amelia, García Víctor, Lodato Thomas</p>
            </div>
        </div>
  </div>
</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
  </body>
</html>