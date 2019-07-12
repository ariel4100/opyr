
		<div class="col s12 m8">
			
			<form method="POST"  enctype="multipart/form-data" action="{{action('SeccionContactoController@store')}}" >
				{{ csrf_field() }}

				<div class="row">
					<div class="input-field col s12 m6 l4">
						<input id="icon_prefix" type="text" class="validate" name="nombre"  value="{{ old('nombre') }}">
						<label class="label-form-contact" for="icon_prefix">@lang('home.nombre')</label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="icon_prefix" type="text" class="validate" name="apellido"  value="{{ old('apellido') }}">
						<label class="label-form-contact" for="icon_prefix">@lang('home.apellido')</label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="email" type="email"  name="email" class="validate"  value="{{ old('email') }}">
						<label class="label-form-contact" for="email">@lang('home.email')</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l12">
						<input style="height: 150px;" id="mensaje" type="text" name="mensaje" class="validate"  @if($mensaje!='') value="{{$mensaje}}" @else value="{{ old('mensaje') }}" @endif>
						<label class="label-form-contact" for="mensaje">@lang('home.mensaje')</label>
					</div>
					<div class="input-field col s12 m6 l6">
						<div class="g-recaptcha" data-sitekey = "{{env('GOOGLE_RECAPTCHA_SITE_KEY')}}"></div>
					</div> 
					<div class="input-field col s12 m6 l6">
						<p>
							<label>
								<input type="checkbox" required name="condiciones" />
								<span>@lang('home.terminos')</span>
							</label>
						</p>
					</div> 
				</div>
				<div class="center">
					<button class="btn button-enviar-mas z-depth-0 center" type="submit" name="action">Enviar</button>
				</div>
			</form>
		</div>