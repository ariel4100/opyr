@extends('app')

@section('content')
	<style>
		.tabs .tab a:hover, .tabs .tab a.active {
			background-color: transparent;
			color: #FFFFFF !important;
		}
		ul:not(.browser-default) {

			list-style-type: none;
		}

	</style>

<body>
	<div class="container">
		<div class="row" id="seccion-nombre">
			<span>@lang('home.servicios')</span>
			<div class="divider" style="width:7%; background: #00883E; height: 2px;"></div>
		</div>
	</div>


	<div class="row">
		<div class="col s12">
			<ul class="tab s container">
				@forelse($servicios as $key=>$s)
					<li class="tab col s12 m12 l4">
						<a href="#test_{{ $key }}" style=" ">
							<div class="" style="border: 1px solid #1a4f93;padding: 20px;margin-bottom: 20px; height: 180px;">
								<div class="row center">
									<img src="{{ asset('images/servicios/'.$s->file_image) }}">
								</div>
								<div class="row center" style="color: #1a4f93;">
									{!! $s->{'titulo_'.$idioma} !!}
								</div>
							</div>
						</a>
					</li>
				@empty
				@endforelse
			</ul>
		</div>

		@forelse($servicios as $key=>$s)
			<div id="test_{{ $key }}" class="col s12">
				<div class="container">
					<div class="row">
				<span id="texto1-servicios">
					{!! $s->{'titulo_'.$idioma}!!}
				</span>
					</div>
					<div class="row">
				<span id="texto2-servicios">
					{!! $s->{'descripcion_'.$idioma}!!}
				</span>
					</div>
				</div>
			</div>
		@empty
		@endforelse

	</div>

<!--
	<div class="container">
		<div class="row">
			<span id="texto1-servicios">
				Mantenimiento y calibración equipos

			</span>
		</div>
		<div class="row">
			<span id="texto2-servicios">
				En vez de invertir en un equipo adicional para contingencias, adquiere una marca con buen soporte técnico.
La clave al adquirir un equipo es asegurar su vida útil y eso sólo es posible con un buen soporte técnico.
			</span>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<span id="texto1-servicios">
				¿En qué se diferencia el servicio técnico de OPyR?
			</span>
		</div>
		<div class="row">
			<span id="texto2-servicios">
				Soporte inmediato. Sabemos que tu equipo es clave en tu línea de producción por lo que una aseguramos respuesta inmediata.
Mantenimiento y calibración a costo único. 
El único costo adicional es la compra de repuestos. 
Soporte en toda Latam. 
			</span>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<span id="texto1-servicios">
				Instalación IQOQ
			</span>
		</div>
		<div class="row">
			<span id="texto2-servicios">
				La clave en monitoreo continuo es saber posicionar las sondas en cada punto crítico de tu proceso por lo que necesitas más que un proveedor de equipos, necesitas un buen soporte técnico.
			</span>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<span id="texto1-servicios">
				¿En qué se diferencia la instalación IQOQ de OPyR?
			</span>
		</div>
		<div class="row">
			<span id="texto2-servicios">
Asesoramiento completo de salas limpias. No nos limitamos a la instalación de nuestros equipos, ofrecemos soluciones para el control completo de la sala limpia al comprender el comportamiento del flujo laminar. 
Fabricantes de sondas a medida para tu aplicación lo que te permite optimizar los recursos sin afectar la calidad de tu línea de producción.

			</span>
		</div>
	</div>

		<div class="container">
		<div class="row">
			<span id="texto1-servicios">
				Bio-decontaminación por vapor de peróxido de hidrógeno
			</span>
		</div>
		<div class="row" style="margin-bottom:30px">
			<span id="texto2-servicios">
Toda perturbación en las salas limpias afectan su calidad de aire, es por ello que después de cada parada de planta es recomendable realizar una limpieza profunda. 
OPyR siempre te acompaña. Luego de la instalación de un IQOQ con OPyR cuentas con un % de descuento para descontaminar y volver al grado de calidad. 


			</span>
		</div>
	</div>

-->

	<div id="form-servicios" style="margin-bottom: 0">
		<div class="container">
			@include('page.partials.alert')
			<div class="textos center">				
				<p id="titulo-formulario">@lang('servicios.formulario')</p>
				<p id="label-formulario">@lang('servicios.formulario-label')</p>
			</div>
			<div class="row" >
				<div class="col s12 m8 offset-m2">
					<form method="POST"  enctype="multipart/form-data" action="{{action('SeccionContactoController@store')}}" >
						{{ csrf_field() }}

						<div class="row">
							<div class="input-field col s12 m12 l12">
								<input id="icon_prefix" type="text" class="validate" name="nombre"  value="{{ old('nombre') }}">
								<label class="label-form-contact" for="icon_prefix">@lang('home.nombre')</label>
							</div>
							<div class="input-field col s12 m12 l12">
								<input id="icon_prefix" type="text" class="validate" name="apellido"  value="{{ old('apellido') }}">
								<label class="label-form-contact" for="icon_prefix">@lang('home.apellido')</label>
							</div>
							<div class="input-field col s12 m12 l12">
								<input id="email" type="email"  name="email" class="validate"  value="{{ old('email') }}">
								<label class="label-form-contact" for="email">@lang('home.email')</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m6 l12">
								<input style="height: 150px;" id="mensaje" type="text" name="mensaje" class="validate"  @if($mensaje!='') value="{{$mensaje}}" @else value="{{ old('mensaje') }}" @endif>
								<label class="label-form-contact" for="mensaje">@lang('home.mensaje')</label>
							</div>
							<div class="input-field col s12 m6 l6">
								<div class="g-recaptcha" data-sitekey = "{{env('GOOGLE_RECAPTCHA_SITE_KEY')}}"></div>
							</div>
							<div class="input-field col s12 m6 l6">
								<p>
									<label>
										<input type="checkbox" required name="condiciones" />
										<span>@lang('home.terminos')</span>
									</label>
								</p>
							</div>
						</div>
						<div class="center">
							<button class="btn button-enviar-mas z-depth-0 center" type="submit" name="action">Enviar</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

	@endsection

	@include('layouts.script')
	<script>

		$(document).ready(function(){
			$('.tab.s').tabs();
		});
	</script>
</body>
</html>


