@extends('includes.base')

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

{{csrf_field()}}
<!--***************************CONTEÚDO INDEX***************************-->
<section id="index_section1">
    
<!--*************************** SLIDE *************************** -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            
            <div class="item active image_section1 " style="background: url(../images/banner_index.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;   background-size: cover;">
                
                <div class="text_section1_rotate">
                    <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
                </div>
                
                <div class="text_section1">
                    <div class="text_section1_center">
                        <h1 style="letter-spacing: 0.1em;">AN UNIQUE KNOWLEDGE</h1>
                        <h1 style="font-family: DINNextLTPro-Bold;">OF THE BRAZILIAN MARKET</h1>
                        <h3>______________</h3>
                        <h4>Lasting and original tailor-mate</h4>
                        <h4>solutions for our clients and partners.</h4>
                    </div>
                </div>
                
            </div>

            <div class="item image_section1 " style="background: url(../images/banner_teste1.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;   background-size: cover;">
                
                <div class="text_section1_rotate">
                    <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
                </div>

                <div class="text_section1">
                    <div class="text_section1_center">
                        <h1 style="letter-spacing: 0.1em;">AN UNIQUE KNOWLEDGE</h1>
                        <h1 style="font-family: DINNextLTPro-Bold;">OF THE BRAZILIAN MARKET</h1>
                        <h3>______________</h3>
                        <h4>Lasting and original tailor-mate</h4>
                        <h4>solutions for our clients and partners.</h4>
                    </div>
                </div>
                
            </div>

            <div class="item image_section1 " style="background: url(../images/banner_teste2.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;   background-size: cover;">
                
                <div class="text_section1_rotate">
                    <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
                </div>

                <div class="text_section1">
                    <div class="text_section1_center">
                        <h1 style="letter-spacing: 0.1em;">AN UNIQUE KNOWLEDGE</h1>
                        <h1 style="font-family: DINNextLTPro-Bold;">OF THE BRAZILIAN MARKET</h1>
                        <h3>______________</h3>
                        <h4>Lasting and original tailor-mate</h4>
                        <h4>solutions for our clients and partners.</h4>
                    </div>
                </div>
                
            </div>

            <div class="item image_section1 " style="background: url(../images/banner_teste3.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;   background-size: cover;">
                
                <div class="text_section1_rotate">
                    <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
                </div>

                <div class="text_section1">
                    <div class="text_section1_center">
                        <h1 style="letter-spacing: 0.1em;">AN UNIQUE KNOWLEDGE</h1>
                        <h1 style="font-family: DINNextLTPro-Bold;">OF THE BRAZILIAN MARKET</h1>
                        <h3>______________</h3>
                        <h4>Lasting and original tailor-mate</h4>
                        <h4>solutions for our clients and partners.</h4>
                    </div>
                </div>
                
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!--*************************** /SLIDE *************************** -->
</section><!--/section-->

<section id="index_section2">

    <div class="container">

        <div class="row">
            
            <div class="col-md-4">

                <div class="image_section2 image_1_section2">
                    
                    <div class="text_section2">
                        <img src="{{asset('images/barra.png')}}" /> <h3>WHO WE ARE</h3>
                    </div>

                </div>
                
                <!--<img src="{{asset('images/who_we_are_index.jpg')}}" class="img-responsive"/>-->
                <p>
                    BWI is an independent petrochemicals,
                    bio and fossil fuels trading house, with
                    its roots deep in Brazil, while stringly
                    connected to global markets
                </p> 
                <span class="button_span"><button>/ VIEW SECTION</button></span>
            </div>
            
            <div class="col-md-4">

                <div class="image_section2 image_2_section2"s>
                    
                    <div class="text_section2">
                        <img src="{{asset('images/barra.png')}}" /> <h3>BACKGROUND</h3>
                    </div>
    
                </div>

                <p>
                    Brazil is the 5 biggest olil consumer
                    globally, with a vast demand os diesel on
                    the 50 million m³ per year level and for 
                    gasoline floating around 30 million m³
                </p>
                <span class="button_span"><button>/ VIEW SECTION</button></span>
            </div>
            
            <div class="col-md-4">

                <div class="image_section2 image_3_section2"s>
                    
                    <div class="text_section2">
                        <img src="{{asset('images/barra.png')}}" /> <h3>OUR VALUES</h3>
                    </div>
    
                </div>

                <p>
                    Our team works together in balance,
                    showing the highest levels of efficiency in
                    all activities of our business, always
                    focused in bringing true value...
                </p>
                <span class="button_span"><button>/ VIEW SECTION</button></span>
            </div>

        </div>

    </div>

</section>