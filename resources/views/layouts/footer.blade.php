<footer class="page-footer" id="footer" style="position: relative;">
		<div class="row" style="margin:0;">
			<div class="col s12 m12 l4" style="padding: 2% 10%" >
				<a href="{{ url('/') }}" class="brand-logo">
					<img id="logo-footer" class="img-responsive" src="{{ asset('images/logos/'.$logos->file_image) }}" alt="">
				</a>
			    @php($social = \App\Social::first())

				@if($social->facebook)
				<span>@lang('home.seguinos') <a href="{{ $social->facebook}}" target="_blank"> <i class="fab fa-facebook white-text"></i></a></span>
				@endif
	            @if($social->twitter)
			    <a href="{{ $social->twitter}}" style="margin: 5px" target="_blank"><i class="fab fa-linkedin  white-text"></i></a>
				@endif
				@if($social->instagram)
				<a href="{{ $social->instagram}}" target="_blank"><i class="fab fa-instagram white-text"></i></a>
				@endif
			</div>

			<div class="col s12 m12 l5" style="padding-top: 6%">
				<div class=" footer-text">
					<div class="row">
						<div class="col s12 m4">
							<a href=" {{ url('/')}} " >@lang('home.home')</a>
						</div>
						<div class="col s12 m4">
							<a href=" {{ url('empresa')}} " >@lang('home.empresa')</a>
						</div>
						<div class="col s12 m4">
							<a href=" {{ url('calidad')}} " >@lang('home.calidad')</a>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m4">
							<a href=" {{ url('productos')}} " >@lang('home.productos')</a>
						</div>
						<div class="col s12 m4">
							<a href=" {{ url('servicios')}} " >@lang('home.servicios')</a>
						</div>
						<div class="col s12 m4">
							<a href=" {{ url('contacto')}} " >@lang('home.contacto')</a>
						</div>
					</div>
				</div>
			</div>


			<div class="col s12 m12 l3 footer-contact">
				<span id="nombre-footer">@lang('home.contacto')</span>
				<ul style="margin-top: 5%;">
					<li class="footer-text" style="margin-bottom: 10px">
						<div class="row">
							<div class="col s1 footer-icon">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="col s10">
								 @php($dir1 = \App\Dato::where('tipo','direccion1')->first())

								@if(App::getLocale() == 'es')
								<a href="https://goo.gl/maps/wosGhSCQNY42" target="_blank">{{ $direccion->descripcion ?? '' }}</a>
								@else
									<a href="https://goo.gl/maps/3rAXMQLS4okRZpzp7" target="_blank">{{ $dir1->descripcion ?? ''}} </a>
								@endif
							</div>
						</div>
					</li>
					<li class="footer-text" >
						<div class="row">
							<div class="col s1 footer-icon">
								<i class="fas fa-phone-volume"></i>
							</div>
							<div class="col s10">
								@if(App::getLocale() == 'es')
									<a href="tel:{{ $telefono_1->descripcion ?? '' }}">{{ $telefono_1->descripcion  ?? '' }}</a></br>
									<a href="tel:{{ $telefono_2->descripcion ?? '' }}">{{ $telefono_2->descripcion  ?? '' }}</a></br>
									<a href="tel:{{ $telefono_3->descripcion ?? '' }}">{{ $telefono_3->descripcion ?? '' }}</a>
								@else
									<a href="mailto:55 62 8234-0715">+55 62 8234-0715</a>
								@endif

							</div>
						</div>
					</li>
					<li class="footer-text" style="margin-bottom: 10px">
						<div class="row">
							<div class="col s1 footer-icon">
								<i class="fab fa-telegram-plane"></i>
							</div>
							<div class="col s10">
								@php($email1 = \App\Dato::where('tipo','email1')->first())
{{--                                @dd($email1)--}}
								@if(App::getLocale() == 'es')
									<a href="mailto:{{ $email->descripcion  ?? '' }}">{{ $email->descripcion ?? '' }}</a>
								@else
									<a href="mailto:{{ $email1->descripcion  ?? '' }}">{{ $email1->descripcion ?? '' }}</a>
								@endif

							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="divider" style="width: 90%; margin-left: 6%; background: #A4A4A4; height: 2px;"></div>
		<div class="row" style="margin:0;">
			<div class="col s12" id="osole-span" >
				<span class="right ">BY OSOLE</span>
			</div>
		</div>
</footer>
