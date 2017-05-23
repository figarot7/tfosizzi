<!DOCTYPE html>
<html>
    <head>
        <title>IZZI-SOFT</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/bootstrap-theme.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/estilo.css')}}" />
    </head>

    <body>
        <div id="pagina">
            <div id="contenedor" class="container">
                <nav id="xxx" class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">
                                Desplegar barra de navegación
                            </span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">RESERVA DE AMBIENTES</a>
                    </div>
                    <div id="barra" class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">

                            @if(!Auth::check())
                            <li><a href="/usuario/registrarse"><span class=""><i class="glyphicon glyphicon-pencil"></i></span>Registrarse</a></li>
                            <li><a href="/usuario/login"><span class=""><i class="glyphicon glyphicon-user"></i></span>Iniciar sesión</a></li>
                            <li><a href="/reserva/lista"><span class=""><i class="glyphicon glyphicon-calendar"></i></span>calendario</a><li>
                            <li><a href="/usuario/protocolo"><span class=""><i class="glyphicon glyphicon-book"></i></span>protocolo</a></li>
                            @else
                            <li><a href="/reserva/lista"><span class=""><i class="glyphicon glyphicon-calendar"></i></span>calendario</a><li>
                            <li class="dropdwon">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <b class="glyphicon glyphicon-user"></b>
                                    {{ Auth::user()->username }}
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    @include('menu', ['tipo' => Auth::user()->tipo])
                                    <li><a href="/usuario/logout">Cerrar Sesion</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>

                <section>
                    @yield('contenido')
                </section>
            </div>
        </div>

    <foorter id="pie-pagina" class="text-center">
        <div id="ctm">
            <h4>IZZI-SOFT</h4>
            <h5>2017</h5>
        </div>
    </footer>

    <script src="{{asset('/js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/script.js')}}"></script>
</body>
</html>
