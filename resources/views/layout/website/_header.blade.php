<!DOCTYPE HTML>
<html>
    <head>
        <!-- META -->
        <meta charset="utf-8" />
        <meta name="author" content="Eduardo Bessa & José Ferreira" />
        <meta name="keyworks" content="Pricos, Braga, CDC Priscos, Clube, Despotivo, Cultural, Cultura, Desporto" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- LINK -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        {!! Html::style("css/bootstrap.min.css") !!}
        {!! Html::style("css/bootstrap.css") !!}
        {!! Html::style("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css") !!}
        {!! Html::style("css/main.css") !!}
        <!-- TITLE -->
        <title>CDC Priscos // @yield('title')</title>
    </head>
    <div class="page">
        <!-- HEADER PAGE -->
        <header class="header">
            <div class="logo"><p>Clube Desportivo e Cultural de Priscos</p></div>
        </header>
        <!-- HEADER PAGE -->
        <!-- NAVIGATION -->
        <nav class="navigation">
            <div class="navbar navbar-default navbar-custom">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a class="active" href="./pages/home">Inicio</a></li>
                            <li><a href="">Loja</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clube <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">História</a></li>
                                    <li><a href="#">Estrutura</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Desporto <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Atletismo</a></li>
                                    <li><a href="#">Futsal</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Teatro</a></li>
                            <li><a href="#">Área Social</a></li>
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Junte-se a nós</a>
                            <li><a href="#">Contactos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- NAVIGATION -->
