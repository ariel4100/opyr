		<div class="col s12 m4" style="margin-top: 5%">
			<ul>
				<li class="contacto-text" style="margin-bottom: 10px">
					<div class="row">
						<div class="col s1 contacto-icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="col s10">
							@php($dir1 = \App\Dato::where('tipo','direccion1')->first())

							@if(App::getLocale() == 'es')
								<a href="https://goo.gl/maps/wosGhSCQNY42" target="_blank">{{ $direccion->descripcion }}</a>
							@else
								<a href="https://goo.gl/maps/3rAXMQLS4okRZpzp7" target="_blank">{{ $dir1->descripcion }} </a>
							@endif
						</div>
					</div>
				</li>
				<li class="contacto-text" >
					<div class="row">
						<div class="col s1 contacto-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="col s10">
							<span>@lang('home.telefono'):</span>
						</div>
						<div class="col s9 offset-s1">
							@if(App::getLocale() == 'es')
								<a href="tel:{{ $telefono_1->descripcion }}">{{ $telefono_1->descripcion }}</a></br>
								<a href="tel:{{ $telefono_2->descripcion }}">{{ $telefono_2->descripcion }}</a></br>
								<a href="tel:{{ $telefono_3->descripcion }}">{{ $telefono_3->descripcion }}</a>
							@else
								<a href="mailto:55 62 8234-0715">+55 62 8234-0715</a>
							@endif

						</div>
					</div>
				</li>
				<li class="contacto-text" style="margin-bottom: 10px">
					<div class="row">
						<div class="col s1 contacto-icon">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="col s10">
							@php($email1 = \App\Dato::where('tipo','email1')->first())

							@if(App::getLocale() == 'es')
								<a href="mailto:{{ $email->descripcion }}">{{ $email->descripcion }}</a>
							@else
								<a href="mailto:{{ $email1->descripcion }}">{{ $email1->descripcion }}</a>
							@endif

						</div>
					</div>
				</li>
			</ul>
		</div>