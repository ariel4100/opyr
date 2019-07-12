<style>
	::placeholder {
  color: black;
 
}
</style>
<nav id="header" class="{{ (\Request::is('privada*'))?"hide":"" }} z-depth-0" >
	<div class="nav-wrapper z-depth-0  header-top">
		<div class="container">
			<a href="{{ url('/') }}" class="brand-logo center"><img src="{{ asset('images/logos/'.$logos->file_image) }}" class="responsive-img"></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons" style="color: black">menu</i></a>
	        <ul id="nav-mobile" class="left hide-on-med-and-down header-top-ul" style="height: 115px; display: flex; justify-content: center; align-items: center;">

				@if(App::getLocale() == 'es')
					<li> <a href="http://wa.me/{{ $telefono_1->descripcion }}"><i class="fab fa-whatsapp"></i></a></li>
					<li> <a href="tel: {{ $telefono_1->descripcion }}">{{ $telefono_1->descripcion }}</a> </li>
				@else
					<li> <a href="http://wa.me/5562982340715"><i class="fab fa-whatsapp"></i></a></li>
					<li> <a href="	https://wa.me/5562982340715">+55 62 98234-0715</a> </li>

				@endif
	        </ul>
	        <ul id="nav-mobile" class="right hide-on-med-and-down header-top-ul" style="height: 115px; display: flex; justify-content: center; align-items: center;">
				<li> <i class="material-icons">account_circle</i> </li>
					@auth
					<li style="display:flex"> <a href="{{route('privada')}}">{{Auth::user()->name }}</a> <a id="logout-anchor" href="#!" style="padding-left:5px">(salir)</a> </li>

						<form action="{{route('logout')}}" method="POST" class="hide" id="logout-form">
							@csrf
						</form>
					@endauth

					@guest
					<li> <a href="{{route('login')}}">@lang('home.privada')</a> </li>
					@endguest
				<li style="color: #1CA22E; margin-left: 10px">
					<a class='dropdown-trigger  ' href='#' data-target='buscador'><i class="material-icons" style="color:#1CA22E">search</i></a>
					   <!-- Dropdown Structure -->
				  <ul id='buscador' class='dropdown-content' style="height: 0px !important; overflow-y: unset;">
				    <li>
					    <form action="{{ route('buscador') }}" method="get" style="padding: 5px; width: 300px;     margin-block-end: unset">
							@csrf
				        	<div class="input-field " style="display: flex; justify-content: center; align-items: center;">
					    		 <i class="material-icons" style="color:#1CA22E;">search</i>
					    		<input id="icon_prefix" type="text" style="margin: 0px" name="nombre" class="validate" placeholder="@lang('home.busqueda-label')">
				        	</div>
				        </form>
				    </li>
				  
				  </ul>
				</li>
	            <li> | </li>
				<li>
					<a class='dropdown-trigger' href='#' data-target='dropdown1'>
						@if ( \App::getLocale() == 'es')
							ES
						@elseif( \App::getLocale() == 'pt')
							PT
						@endif
					</a>
				</li>
	        </ul>
		</div>
	</div>
	<div class="nav-content">
		<ul id="nav-mobile" class="center hide-on-med-and-down header-secciones" >
            <li><a href="{{ url('empresa') }}" {{ (\Request::is('empresa*'))?"id=seccion-active":"" }}>@lang('home.empresa')</a></li>
            <li><a href="{{ url('productos') }}" {{ (\Request::is('productos*'))?"id=seccion-active":"" }}>@lang('home.productos')</a></li>
            <li><a href="{{ url('servicios') }}" {{ (\Request::is('servicios*'))?"id=seccion-active":"" }}>@lang('home.servicios')</a></li>
            <li><a href="{{ url('novedades') }}" {{ (\Request::is('novedades*'))?"id=seccion-active":"" }}>@lang('home.escuela')</a></li>
			@if(\App::getLocale() == 'es')
            <li><a href="{{ url('distribuidores') }}" {{ (\Request::is('distribuidores*'))?"id=seccion-active":"" }}>@lang('home.distribuidores')</a></li>
			@endif
            <li><a href="{{ url('calidad') }}" {{ (\Request::is('calidad*'))?"id=seccion-active":"" }}>@lang('home.calidad')</a></li>
            <li><a href="{{ url('contacto') }}" {{ (\Request::is('contacto*'))?"id=seccion-active":"" }}>@lang('home.contacto')</a></li>

        </ul>
	</div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ url('empresa') }}" {{ (\Request::is('empresa'))?"id=seccion-active":"" }}>@lang('home.empresa')</a></li>
    <li><a href="{{ url('productos') }}" {{ (\Request::is('productos'))?"id=seccion-active":"" }}>@lang('home.productos')</a></li>
    <li><a href="{{ url('servicios') }}" {{ (\Request::is('servicios'))?"id=seccion-active":"" }}>@lang('home.servicios')</a></li>
    <li><a href="{{ url('novedades') }}" {{ (\Request::is('novedades'))?"id=seccion-active":"" }}>@lang('home.escuela')</a></li>
	@if(\App::getLocale() == 'es')
    <li><a href="{{ url('distribuidores') }}" {{ (\Request::is('distribuidores'))?"id=seccion-active":"" }}>@lang('home.distribuidores')</a></li>
	@endif
    <li><a href="{{ url('calidad') }}" {{ (\Request::is('calidad'))?"id=seccion-active":"" }}>@lang('home.calidad')</a></li>
    <li><a href="{{ url('contacto') }}" {{ (\Request::is('contacto'))?"id=seccion-active":"" }}>@lang('home.contacto')</a></li>
	@auth
		<li style="display:flex"> <a href="{{route('privada')}}">{{Auth::user()->name }}</a> <a id="logout-anchor" href="#!" style="padding-left:5px">(@lang('home.salir'))</a> </li>

		<form action="{{route('logout')}}" method="POST" class="hide" id="logout-form">
			@csrf
		</form>
	@endauth

	@guest
		<li> <a href="{{route('login')}}">@lang('home.privada')</a> </li>
	@endguest

	<li> <a href="{{ url(''.'/setlocale/es') }}">ES</a> </li>
	<li> <a href="{{ url(''.'/setlocale/pt') }}">PT</a> </li>
	<form action="{{ route('buscador') }}" method="get" style="padding: 5px; width: 300px;     margin-block-end: unset">
		@csrf
		<div class="input-field " style="display: flex; justify-content: center; align-items: center;">
			<i class="material-icons" style="color:#1CA22E;">search</i>
			<input id="icon_prefix" type="text" style="margin: 0px" name="nombre" class="validate" placeholder="@lang('home.busqueda-label')">
		</div>
	</form>

</ul>

	<ul id='dropdown1' class='dropdown-content'>
		<li>
			<a href="{{ url(''.'/setlocale/es') }}">ES</a>
		</li>
		<li>
			<a href="{{ url(''.'/setlocale/pt') }}">PT</a>
		</li>
	</ul>

