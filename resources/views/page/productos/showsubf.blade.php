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
            <span>@lang('home.productos')</span>
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
            <div class="col l9  m9 s12">
                    <div class="row">
                        @foreach ($subfamilia->productos as $ppp)
                            <div class="col l4 m6 s12">
                                <div class="product">
                                    <div class="product-fotou center">
                                        <a href="{{ route('producto', $ppp->id) }}" class="center">
                                            <img src="{{asset('/images/productos/'.$ppp->file_image)}}" alt="{{ $ppp->{'nombre_'.$lang} }}" class="responsive-img">
                                        </a>
                                    </div>
                                    <div>
                                        <p class="center">
                                            <a class="graysillo" href="{{ route('producto', $ppp->id) }}">
                                                {{ $ppp->{'nombre_'.$lang} }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>

	@endsection

	@include('layouts.script')
</body>
</html>

