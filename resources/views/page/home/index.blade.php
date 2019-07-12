@extends('app')

@section('content')


<body>

	@include('page.partials.slider')

	<div class="container">
		<div class="row">
			<div class="col s12 center">
				<span id="titulo-busqueda">@lang('home.busqueda')</span>
				<div class="row">
			        <form action="{{ route('buscador') }}" method="get">

			        	<div class="input-field col s12 m12 l4 offset-l4">
				    		<i class="material-icons prefix" style="color: #00893A">search</i>
				    		<input id="icon_prefix2" type="text" name="nombre" class="validate">
				    		<label for="icon_prefix2">@lang('home.busqueda-label')</label>
			        	</div>
			        </form>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row center-align" style="">
				@foreach($familias as $eferinomanao)
					<div class="col s12 m6 l3" style="">
						<a href="{{route('productos.subfamilias', $eferinomanao->id)}}">
							<img class="responsive-img" src="{{ asset('/images/familias/'.$eferinomanao->file_image) }}">
						</a>
						<p>
							<a href="{{url('/')}}" style="color:#154C94; font-weight: 500">
								{{ $eferinomanao->{'nombre_'.$idioma} }}
							</a>
						</p>
					</div>
				@endforeach
		</div>
	</div>

	<div class="row hide-on-med-and-down " style="margin-bottom: 0px; height: 279px; position: relative; background-image:url({{url('images/home/'.$informacion->file_image) }}) ">
		<div class="col s12" style="position: absolute; width: 80%; margin-left: 10%;">
			<div class="col s12 m12 l6 offset-l6" >
				<p id="informacion-titulo">{{ $informacion->{'titulo_'.$idioma} }}</p>
			</div>
			<div class="col s12 m12 l6 offset-l6" >
				<p id="informacion-descripcion">{{ $informacion->{'descripcion_'.$idioma} }}</p>
			</div>
			<div class="col s12 m12 l6" >
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


