@extends('app')

@section('content')
<link rel="stylesheet" href="{{asset('css/page/productos.css')}}">
    <style>
        .product img {
            height: 200px;
            margin: auto;
            display: block;
        }
        .product {
            overflow-x: hidden;
            margin-bottom: 1em;
        }
    </style>
<body>
    <div class="container">
        <div class="row" id="seccion-nombre" style="margin-bottom:10px">
            <span>Productos</span>
            <div class="divider" style="width:7%; background: #00883E; height: 2px;"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12" style="padding-left:0;  font-size: 13px">
                @include('page.productos.partials.breadcrumb')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col l3 m3 s12" style="padding-left:0">
                @include('page.productos.partials.botonera')
            </div>
            <div class="col l9 m9 s12">
                <div class="row">
                    <div class="col l6 m12 s12">
                        <div class="carousel carousel-slider" >
                            <a class="carousel-item" href="#0!">
                                <img src="{{asset('/images/productos/'.$producto->file_image)}}" alt="{{$producto->{'nombre_'.$lang} }}"  >
                            </a>
                            @if($producto->galerias->count() > 0)
                                @foreach($producto->galerias as $k=>$s)
                                    <a class="carousel-item" href="#{{$k+1}}!"><img src="{{ asset('images/galeria_productos/'.$s->file_image) }}"></a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col l6">
                        <h6 class="greensillo" style="font-size: 1.5rem">{{$producto->{'nombre_'.$lang} }}</h6>
                        <p class="bluesillo" style="font-weight:600">@lang('home.descripcion')</p>
                        {!! $producto->{'descripcion_'.$lang} !!}
                        <div class="div">
                                @if($producto->file_ficha != null)
                                <a class="waves-effect waves-light btn" style="background-color:#1A4F93" href="{{asset('/images/planos/'.$producto->file_ficha)}}" target="_blank">FICHA TÉCNICA</a>
                                @endif
                            <a class="waves-effect waves-light btn" style="background-color:#1A4F93" href="{{route('contacto.index')}}">CONSULTAR</a>
                        </div>
                    </div>
                </div>
                    @if($producto->aplicaciones_es || $producto->aplicaciones_pt)
                    <div class="row">
                        <p class="bluesillo" style="font-weight:600">@lang('home.aplicaciones')</p>
                        {!! $producto->{'aplicaciones_'.$lang} !!}
                    </div>
                @endif

                @if($producto->ciclos_es || $producto->ciclos_pt)
                    <div class="row">
                        <p class="bluesillo" style="font-weight:600">@lang('home.tiempos')</p>
                        {!! $producto->{'ciclos_'.$lang} !!}
                    </div>
                @endif
                @if($producto->file_plano)
                    <div class="row">
                        <p class="bluesillo" style="font-weight:600">@lang('home.planos')</p>
                        <img src="{{asset('/images/planos/'.$producto->file_plano)}}"  class="responsive-img">
                    </div>
                @endif
              
                @if(count($relacionados) >= 0)
                      <div class="row">
                        <p class="bluesillo" style="font-weight:600">@lang('home.relacionados')</p>
                        @foreach ($relacionados as $r)
                            <div class="col l4 m6 s12">
                                <div class="product">
                                    <div class="product-fotou center">
                                        <a href="{{ route('producto', $r->id) }}" class="center">
                                            <img src="{{asset('/images/productos/'.$r->file_image)}}" alt="{{ $r->{'nombre_'.$lang} }}" class="responsive-img">
                                        </a>
                                    </div>
                                    <div>
                                        <p class="center">
                                            <a class="graysillo" href="{{ route('producto', $r->id) }}">
                                                {{ $r->{'nombre_'.$lang} }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

	@endsection

	@include('layouts.script')
    <script>
        $(document).ready(function(){
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
            });

        });
    </script>
</body>
</html>

