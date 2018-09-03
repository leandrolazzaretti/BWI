@extends('includes.base')

@section('scripts')


    <script type="text/javascript">

        $(document).ready(function(){

            /* ao clicar na div com id="box" executa a função */
            $(".products_div_buttom").click(function(){

                $(".products_div_buttom").css("background","black").attr('value', 'false');

                /* a função muda o background da div selecionada */	
                if ($(this).attr('value') == 'true') {

                    $(this).css("background","black").attr('value', 'false');
                    
                }else{

                    $(this).css("background","#46ab7e").attr('value', 'true');
                    
                }
            });
        });

    </script>

@endsection

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

{{csrf_field()}}

<!--***************************CONTEÚDO PRODUCTS***************************-->

<section id="products_section1">

    <div class="parallax_banner">

        <div class="parallax" data-parallax="scroll" data-z-index="1"   
        data-image-src="../images/banner_products.jpg">
        </div><!-- /parallax -->

    </div>

</section><!--/products_section1-->

<section id="products_section2">

    <div class="products_section2_rotate">
        <h4>FUELS AND OIL DERIVATES / BIOFUELS / CHEMICAL / AGRICULTURAL</h4>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-3">
                <div class="products_div">
                    <h1>PRODUCTS</h1>
                </div>
            </div>
        </div><!--/row-->

        <div class="row"> 
            <div class="col-md-1"></div>

            <div class="col-md-3"> 
                    <!-- Nav tabs -->

                    <ul class="nav nav-tabs" role="tablist">
                       
                    
                        <a href="#products1" aria-controls="products1" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>FUELS AND DERIVATES</h3>
                            </div>
                        </a>
                   

                       <a href="#products2" aria-controls="products2" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>GLYCERIN</h3>
                            </div>
                        </a>

                       <a href="#products3" aria-controls="products3" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>BIOFUELS</h3>
                            </div>
                        </a>

                        <a href="#products4" aria-controls="products4" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>CHEMICAL</h3>
                            </div>
                        </a>

                       <a href="#products5" aria-controls="products5" role="tab" data-toggle="tab">
                            <div class="products_div_buttom" role="presentation">
                                <h3>AGRICULTURAL</h3>
                            </div>
                       </a>

                    </ul>
            </div>
            
            <div class="col-md-7">
                    <!-- Tab panes -->
                    
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active div_image_products" id="products1">
                            <img src="{{asset('images/glycerin_products.jpg')}}" class="image_products">

                            <div class="" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5>FUELS AND DERIVATES</h5>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade div_image_products" id="products2">
                            <img src="{{asset('images/glycerin_products_teste1.jpg')}}" class="image_products">

                            <div class="" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5>GLYCERIN</h5>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade div_image_products" id="products3">
                            <img src="{{asset('images/glycerin_products_teste2.jpg')}}" class="image_products">

                            <div class="" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5>BIOFUELS</h5>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade div_image_products" id="products4">
                            <img src="{{asset('images/glycerin_products_teste3.jpg')}}" class="image_products">
        
                            <div class="" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5>CHEMICAL</h5>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade div_image_products" id="products5">
                            <img src="{{asset('images/glycerin_products_teste4.jpg')}}" class="image_products">

                            <div class="" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5>AGRICULTURAL</h5>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

            </div>

        </div><!--/row-->
    </div><!--/container-->

</section><!--/products_section2-->

@endsection