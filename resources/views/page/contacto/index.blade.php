@extends('app')

@section('content')


<body>
	


	<!-- Mapa  -->



		@include('page.contacto.partials.mapa')



	<!-- Formulario  -->

	<div class="container container-fluid">
		<div class="row" >
			
			@include('page.partials.alert')
			@include('page.partials.form')
			@include('page.contacto.partials.informacion')
		</div>
	</div>


	@endsection

	@include('layouts.script')
</body>
</html>


