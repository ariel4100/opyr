@extends('app')

@section('content')


<body>

	@include('page.partials.slider')

	<div class="container" style="width: 80%">
		<div class="col s12">
			<div class="row">
						
				<div class="col s12 m12 l4" id="empresa- image">
					<img src="{{ asset('images/empresa/'.$empresa->file_image) }}" class="responsive-img" alt="">
				</div>
				<div class="col s12 m12 l4">
					<div class="row">
						<p id="titulo-empresa">@lang('empresa.titulo')</p>
					</div>
					<p class="texto-empresa">{!! $empresa->{'descripcion_'.$idioma} !!}</p>
				</div>
				<div class="col s12 m12 l4">
					<div class="row">
						<p id="slogan-empresa">
							{!! $empresa->{'slogan_'.$idioma} !!}
						</p>
					</div>
					<div class="row">
						<p class="texto-empresa">
							{!! $empresa->{'mision_'.$idioma} !!}
						</p>
					</div>
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


