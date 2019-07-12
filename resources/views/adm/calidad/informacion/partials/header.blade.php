@include('adm.layouts.app')
@include('adm.layouts.navbar')
@include('adm.layouts.sidebar')




<main>
	<div id="container-fluid">

			



			@if (session('alert'))

				<div class="card-panel alert-success">

					<ul>

						<li>ALERTA:

							{{ session('alert') }}				

						</li>

					</ul>

				</div>

			@endif

			<div class="col s12">

				<div class="col s12" id="breadcrumb-admin">

					<a href="{{ url('adm/home/' )}}" class="breadcrumb">Home</a>

					<a href="{{ url('adm/calidad/index' )}}" class="breadcrumb">Calidad</a>