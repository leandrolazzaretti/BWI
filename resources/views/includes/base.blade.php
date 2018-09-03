<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

<!-- *************************** HEADER *************************** -->

        <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente ">
            <div class="container">

                <div class="navbar-header">
                    
                    <!-- Botão toggle - esse é o botão que aparece no menu quando diminuimos muito a tela, escondendo assim o menu dentro dele-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao"><!--aqui vai o ID da navbar-->
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--/button-->
                </div>

                <a href="{{route('index')}}" class="navbar-brand">
                    <img src="{{asset('images/logo.png')}}" class="img-logo">
                </a>

                <div class="collapse navbar-collapse" id="barra-navegacao">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('who_we_are')}}">WHO WE ARE</a></li>
                        <li><a href="{{route('background')}}">BACKGROUND</a></li>
                        <li><a href="{{route('products')}}">PRODUCTS</a></li>
                        <li><a href="{{route('our_values')}}">OUR VALUES</a></li>
                        <li><a href="{{route('contact')}}">CONTACT</a></li>
                    </ul>
                </div>

            </div><!--/container-->
        </nav><!--/nav-->

 <!-- *************************** CAPA *************************** -->

        <br/><br/>

        @yield('conteudo')



<!-- *************************** RODAPÉ *************************** -->

                <footer id="rodape">
                    <div class="container">
                        <div class="row">

                        <div class="col-md-2">
                            <a href="{{route('who_we_are')}}"><h4>WHO ARE WE</h4></a>
                            <ul class="nav">
                                <li><a href="#">Potencial Fuel Distributor</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2">
                           <a href="{{route('background')}}"><h4>BACKGROUND</h4></a>
                           <a href="{{route('products')}}"><h4>PRODUCTS</h4></a>
                            <ul class="nav">
                                <li><a href="#">Fuels and Oil Derivate</a></li>
                                <li><a href="#">Biofuels</a></li>
                                <li><a href="#">Chemical</a></li>
                                <li><a href="#">Agricultural</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2">
                            <a href="{{route('our_values')}}"><h4>OUR VALUES</h4></a>
                            <ul class="nav">
                                <li><a href="#">Efficiency</a></li>
                                <li><a href="#">Transparency</a></li>
                                <li><a href="#">Our Mission</a></li>
                                <li><a href="#">Our Vision</a></li>
                            </ul><br>
                            <a href="{{route('contact')}}"><h4>CONTACT</h4></a>
                        </div>

                        <div class="col-md-2">
                        </div>

                        <div class="col-md-4" style="padding-top:7px">

                            <div class="row">
                                <div class="col-md-6" style="padding-left: 0px;">
                                    <p style="margin-bottom: 0px">Connect with us</p>
                                    <a href="#"><img src="{{asset('images/icon1.png')}}" class="img-responsive"></a>
                                    <a href="#"><img src="{{asset('images/icon2.png')}}" class="img-responsive"></a>
                                    <a href="#"><img src="{{asset('images/icon3.png')}}" class="img-responsive"></a>
                                    <a href="#"><img src="{{asset('images/icon4.png')}}" class="img-responsive"></a>
                                </div>

                                <div class="col-md-6">
                                    <img src="{{asset('images/logo_rodape.png')}}">
                                </div>
                            </div><!--/row-->

                            <div class="row" style="padding-top: 80px">
                                <div >
                                    <p>Cidade Jardim, São Paulo/Sp | 01454-011 | Brasil</p>
                                    <p> &copy; BWI TRADING 2018 ALL RIGHTS RESERVED</p>
                                </div>
                            </div><!--/row-->

                        </div>

                        </div><!-- /row -->
                    </div><!--/container-->
                </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!--paralax-->
        <script src="{{asset('js/parallax.min.js')}}"></script>

         @yield('scripts')
    </body>

</html>
