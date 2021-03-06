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
        <!--boostnav.css/animate.css-->
        <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">


         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

<!-- *************************** HEADER *************************** -->

        <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">
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

                <div class="menu_logo">
                    <a href="{{route('index')}}" class="navbar-brand">
                        <img src="{{asset('images/logo.png')}}" class="img-logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="barra-navegacao">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('who_we_are')}}"><span class="menu_itens_span">WHO WE ARE</span></a></li>
                        <li><a href="{{route('background')}}"><span class="menu_itens_span">BACKGROUND</span></a></li>
                        <li><a href="{{route('products')}}"><span class="menu_itens_span">PRODUCTS</span></a></li>
                        <li><a href="{{route('our_values')}}"><span class="menu_itens_span">OUR VALUES</span></a></li>
                        <li><a href="{{route('contact')}}"><span class="menu_itens_span">CONTACT</span></a></li>
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
                                <div class="col-md-6" style="padding-left: 10px;">
                                    <p style="margin-bottom: 0px">Connect with us</p>

                                    <div class="icons_rodape">
                                        <a href="#"><img src="{{asset('images/icon1.png')}}" class="img-responsive"></a>
                                        <a href="#"><img src="{{asset('images/icon2.png')}}" class="img-responsive"></a>
                                        <a href="#"><img src="{{asset('images/icon3.png')}}" class="img-responsive"></a>
                                        <a href="#"><img src="{{asset('images/icon4.png')}}" class="img-responsive"></a>
                                    </div>

                                </div>

                                <div class="col-md-6 logo_rodape_centralizado">
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
        <!--bootsnav-->
        <script src="{{asset('js/bootsnav.js')}}"></script>
        <!--paralax-->
        <script src="{{asset('js/parallax.min.js')}}"></script>

         @yield('scripts')

        <script type="text/javascript">

        $(function() {
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 35) {
                    $('#barra-navegacao a').addClass('menu_item_preto');
                    $('.menu_logo').addClass('menu_logo_alterado');
                    $('.navbar-header').addClass('navbar_header_alterado');
                } else {
                    $('#barra-navegacao a').removeClass('menu_item_preto');
                    $('.menu_logo').removeClass('menu_logo_alterado');
                    $('nav').removeClass('nav_ready');
                    $('.navbar-header').removeClass('navbar_header_alterado');
                }
            });

            $(document).ready(function(){
                if($(window).scrollTop() > 35) {
                    $('#barra-navegacao a').addClass('menu_item_preto');
                    $('.menu_logo').addClass('menu_logo_alterado');
                    $('nav').addClass('nav_ready');
                    $('nav').removeClass('no-background');
                    $('.navbar-header').addClass('navbar_header_alterado');
                } 
            });

        });



</script>
    </body>

</html>
