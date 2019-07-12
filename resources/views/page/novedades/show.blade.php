@extends('app')

@section('content')


<body>



<div class="container" id="seccion-novedades">
	
	<div class="row">
		
	<div class="col s12 m12 l9" >

			<ul class="tabs">
				<li class="tab col s3" style="text-align: left !important"><a href="#" class="active titulo-tab-novedades" >{{ $novedad->categoria->{'nombre_'.$idioma} }}</a></li>
			</ul>
			<div class="divider" style="background: #222D8B; height: 4px; margin-bottom: 5%"></div>
            <img src="{{ asset('images/novedades/'.$novedad->file_image) }}" alt="" class="responsive-img">

            <div class="texto">
            	<p id="titulo-show-novedades">{{ $novedad->{'titulo_'.$idioma} }}</p>
            	<span id="descripcion-show-novedades">{!!  $novedad->{'texto_'.$idioma} !!}</span>
            </div>
		</div>

		<div class="col s12 m12 l3">
			<p id="titulo-categorias">Categorías</p>

			<ul class="collection" id="collection-novedades">
				@foreach($categorias as $c)
		      		<a href="{{ route('filtros', $c->id) }}" class="collection-item" id="collection-novedades-item"><i class="fas fa-angle-double-right" style="margin-right: 5%"></i>{{ $c->{'nombre_'.$idioma} }}</a>
		      	@endforeach
		    </ul>
		</div>
	</div>
		
</div>
	@endsection

	@include('layouts.script')
</body>
</html>


