@extends('app')

@section('content')


<body>

	<div class="container" style="width: 80%">
		<div class="col s12">
			<div class="row">
						
				<div class="col s12 m12 l6">
					<div class="row" >
						<p id="titulo-calidad">@lang('calidad.titulo')</p>
						<div class="divider" style="background: #00883E; height: 2px; width: 20%"></div>
					</div>
					<div class="row">
						<p class="texto-empresa">{!! $calidad->{'texto_'.$idioma} !!}</p>
					</div>
					@forelse($descargas as $d)

					<div class="descargas-calidad" style="padding:3% 0% 12%">

						<div class="col s10">

							<span class="d-mobile">{!! $d->{'nombre_'.$idioma} !!}</span>

							<div>

								<a href="{{route('calidad-down', $d->file)}}" target="_blank" ><span class="d-mobile" style="color: #999999 !important">Descargar</span></a>

							</div>

						</div>

						<div class="col s2">

							<a href="{{route('calidad-down', $d->file)}}" target="_blank" style="color: #595959"><i class="material-icons">file_download</i></a>

						</div>

					</div>

				@empty

				@endforelse
				</div>

				<div class="col s12 m12 l6">
					<div class="row">
						<p id="slogan-calidad">
							{{ $calidad->{'titulo_'.$idioma} }}
						</p>
					</div>
					<div class="row center">
						@if($calidad->file_image)
							<img id="imagen-calidad" src="{{ asset('images/calidad/'.$calidad->file_image) }}">
						@else
							 
						@endif

					</div>
				</div>
				
			</div>	
		</div>
	</div>

	@endsection

	@include('layouts.script')

</body>
</html>


