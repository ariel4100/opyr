@extends('app')

@section('content')
<nav id="header" class=" z-depth-0">
	<div class="nav-wrapper z-depth-0 hide-on-med-and-down header-top">
		<div class="container">		 
			<a href="{{ url('/') }}" class="brand-logo center"><img src="{{ asset('images/logos/'.$logos->file_image) }}"></a>
	        <ul id="nav-mobile" class="left hide-on-med-and-down header-top-ul" style="height: 115px; display: flex; justify-content: center; align-items: center;">       
	            <li> <i class="fab fa-whatsapp"></i></li>
	            <li> <a href="tel: {{ $telefono_1->descripcion }}">{{ $telefono_1->descripcion }}</a> </li>
	        </ul>
	        <ul id="nav-mobile" class="right hide-on-med-and-down header-top-ul" style=";height: 115px; display: flex; justify-content: center; align-items: center;">       
				<li> <i class="material-icons">account_circle</i> </li>
					@auth
                <li style="display:flex"> 
                    <a href="{{route('privada')}}">{{Auth::user()->name }}</a>
                    <a id="logout-anchorino" href="#!" style="padding-left:5px">(@lang('home.salir'))</a>
                </li>

				<form action="{{route('logout')}}" method="POST" class="hide" id="logout-formerino">
					@csrf
				</form>
					@endauth
						
					@guest
					<li> <a href="{{route('login')}}">@lang('home.privada') </a> </li>
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
			@php($data = json_decode(Auth()->user()->seccion))
			{{--@dd($data[1])--}}
			@if( $data == null)
				<li><a href=" "> </a></li>
			@endif
			@if(count($data ?? []) == 1 && $data[0] == 'descargas')
				<li><a href="{{ route('privada') }}" {{ (\Request::is('privada'))?"id=seccion-active":"" }}>@lang('home.descargas')</a></li>
			@endif
			@if(count($data ?? []) == 1 && $data[0] == 'Informacion general')
				<li><a href="{{ route('privada.descargas') }}" {{ (\Request::is('privada*'))?"id=seccion-active":"" }}>@lang('home.general')</a></li>
			@endif
			@if(count($data ?? []) == 2)
				<li><a href="{{ route('privada') }}" {{ (\Request::is('privada'))?"id=seccion-active":"" }}>@lang('home.descargas')</a></li>
				<li><a href="{{ route('privada.descargas') }}" {{ (\Request::is('privada/informacion-general'))?"id=seccion-active":"" }}>@lang('home.general')</a></li>
			@endif
        </ul>			
	</div>
</nav>

<div class="container" style="margin-top: 5%; margin-bottom: 5%">
    <div class="row">
		{{--si la seccion es descargas muestra la descarga--}}
		@if( $data == null)

		@else
			@foreach ($descargas as $d)
				@foreach ($d->descargas as $des)
					@php($data = json_decode($des->seccion))
					{{--@dd($data)--}}
					@if(isset($data[0]))
						<div class="col l6">
							<div class="descargas-calidad" style="padding:3% 0% 12%">

								<div class="col m10 s12">

									<span class="d-mobile">{!! $des->{'nombre_'.$idioma} !!}</span>

									<div>
										@if ($des->file)
											<a href="{{route('privada-down', $des->file)}}" target="_blank" ><span class="d-mobile" style="color: #999999 !important">@lang('home.descargar')</span></a>
										@endif

									</div>

								</div>

								<div class="col m2 s12">
									@if ($des->file)
										<a href="{{route('privada-down', $des->file)}}" target="_blank" style="color: #595959"><i class="material-icons">file_download</i></a>
									@endif

								</div>
							</div>
						</div>
					@endif
				@endforeach
			@endforeach
		@endif

    </div>
</div>

@endsection

@include('layouts.script')

</body>
</html>


