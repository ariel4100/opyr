@include('adm.privada.cliente.partials.header')

<a class="breadcrumb">Crear</a>

</div>


<div class="col s12">



	<form method="POST"  enctype="multipart/form-data" action="{{ route('cliente.update',$cliente->id) }}" class="col s12 m8 offset-m2 xl10 offset-xl1">

		{{ csrf_field() }}
		@method('PUT')

		<div class="row">

			<h5>Crear</h5>

			<div class="divider"></div>


			<div class="input-field col s6">

				<i class="material-icons prefix">keyboard_arrow_right</i>

				<input id="icon_prefix" type="text" class="validate" name="name" value="{{ $cliente->name }}" >

				<label for="icon_prefix">Nombre completo</label>

			</div>





			<div class="input-field col s6">

				<i class="material-icons prefix">keyboard_arrow_right</i>

				<input id="icon_prefix" type="text" class="validate" name="username" value="{{ $cliente->username }}">

				<label for="icon_prefix">Nombre de usuario</label>

			</div>


			<div class="input-field col s6">

				<i class="material-icons prefix">keyboard_arrow_right</i>

				<input id="icon_prefix" type="email" class="validate" name="email"  value="{{ $cliente->email }}">

				<label for="icon_prefix">Email</label>

			</div>
			<div class="input-field col s6">

				<i class="material-icons prefix">keyboard_arrow_right</i>

				<input id="icon_prefix" type="password" class="validate" name="password"   >

				<label for="icon_prefix">Contraseña</label>

			</div>

			<div class="input-field col s6">

				<i class="material-icons prefix">keyboard_arrow_right</i>

				<input id="icon_prefix" type="text" class="validate" name="telefono"  value="{{ $cliente->telefono }}">

				<label for="icon_prefix">Telefono</label>

			</div>

			<div class="input-field col s6">

				<i class="material-icons prefix">keyboard_arrow_right</i>

				<input id="icon_prefix" type="text" class="validate" name="social"  value="{{ $cliente->social }}">

				<label for="icon_prefix">Social</label>

			</div>
			@php($data = json_decode($cliente->seccion))
			{{--@dd()--}}
			<div class="input-field col m6 s12">
				<i class="material-icons prefix">keyboard_arrow_right</i>
				<select multiple name="seccion[]">
					@php($data = json_decode($cliente->seccion))
					@php($seccion = array('descargas','Informacion general'))
						{{--@dd($data[0])--}}
					<option disabled selected>Seleccionar Seccion</option>
					@foreach($seccion as $k=>$item)
					<option value="{{ $item }}" {{  in_array($item,$data ?? []) ? 'selected' : '' }} >{{ $item }}</option>
					@endforeach
					{{--<option value="general" {{ isset($data[1]) ? 'selected' : '' }}>Informacion general</option>--}}
				</select>
				<label>Permitir privilegios(dar de alta)</label>
			</div>

			<div class="col m12 s12">

			</div>

			<div class="right">

				<a href="{{ action('ClienteController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>

				<button class="btn waves-effect waves-light btn-color" type="submit" name="action">Submit

					<i class="material-icons right">send</i>

				</button>

			</div>

		</div>

	</form>



</div>

</div>

</div>

</div>

</main>



@include('layouts.script')



<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

<script>


    $(document).ready(function(){

        M.AutoInit();

        $('.collapsible').collapsible();

        $('select').formSelect();
    });

	CKEDITOR.replace('descripcion');

	CKEDITOR.config.height = '150px';

	CKEDITOR.config.width = '100%';

</script>





</body>



</html>
