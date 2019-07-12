@extends('app')

@section('content')


<body>

	<div class="privada">
		
		<!-- Formulario  -->


			<div class="container container-fluid" style="padding-top: 5%">
				<div class="row">

					@forelse($resultado as $s)
						<div class="col s12 m6 l3 center">
							<div class="card z-depth-0" id="subfamilia">
								<div class="subfamilia-productos">
									<a href="{{ route('producto', $s->id) }}">
										{{--<img src="{{ asset('images/productos/'.$s->file_image) }}" class="responsive-img">--}}
										<img src="{{ asset('images/subfamilias/'.$s->subfamilia->file_image) }}" class="responsive-img">
									</a>
								</div>
								<div class="card-content"   style="height: 70px;" >
									<div class="card-title center" >{{ $s->{'nombre_'.App::getLocale()} }}</div>
								</div>
							</div>
						</div>
					@empty
						<p>
							No conseguimos productos relacionados a esta categoría
						</p>
					@endforelse
				</div>
			</div>


		@endsection
	</div>

	@include('layouts.script')
</body>
</html>


