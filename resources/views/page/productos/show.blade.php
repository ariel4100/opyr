@extends('app')

@section('content')
<link rel="stylesheet" href="{{asset('css/page/productos.css')}}">
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
            <div class="col l3 m3 s12 " style="padding-left:0">
                @include('page.productos.partials.botonera')
            </div>
            <div class="col l9 m9 s12">
                <div class="row">
                    @forelse ($subfamilias as $ss)
                    <div class="col l4 m6 s12" style="    margin-bottom: 20px;">
                        <div class="product">
                            @if(is_null($ss->is_servicio))
                            <div class="product-fotou center">
                                <a href="{{ route('productos.prod', ['familia' => $ss->familia->id, 'subfamilia' => $ss->id]) }}">
                                    <img src="{{asset('/images/subfamilias/'.$ss->file_image)}}" alt="{{ $ss->{'nombre_'.$lang} }}" class="responsive-img">
                                </a>
                            </div>
                            <div>
                                <p class="center">
                                    <a class="graysillo" href="{{ route('productos.prod', ['familia' => $ss->familia->id, 'subfamilia' => $ss->id]) }}">
                                        {{ $ss->{'nombre_'.$lang} }}
                                    </a>
                                </p>
                            </div>
                            @else
                            <div class="product-fotou center">
                                <a href="{{ url('servicios') }}">
                                    <img src="{{asset('/images/subfamilias/'.$ss->file_image)}}" alt="{{ $ss->{'nombre_'.$lang} }}" class="responsive-img">
                                </a>
                            </div>
                            <div>
                                <p class="center">
                                    <a class="graysillo" href="{{ url('servicios') }} ">
                                        {{ $ss->{'nombre_'.$lang} }}
                                    </a>
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                    @empty
                    @if(isset($control) || count($sliders) >= 1)
                     	@include('page.partials.slider')
                     		<div class="container" style="width: 80%">
                        			<div class="row">	
                        		 
                        				<div class="col s12 m12 l4">
                        				 
                        					<p class="texto-empresa">{!! $control->texto !!}</p>
                        				</div>
                        			 
                        			</div>
                        	</div>
                    @endif
                    @endforelse
                </div>
            </div>
        </div>
    </div>

	@endsection

	@include('layouts.script')
		<script>
		$(document).ready(function(){  
			$('#slider-home').slider({
				height: 479,
			})
		});
	</script>
</body>
</html>

