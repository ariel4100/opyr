@include('adm.servicios.partials.header')

					<a class="breadcrumb">Editar</a>
				</div>

				<form method="POST"  enctype="multipart/form-data" action="{{action('ServicioController@update', $servicio->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}    
					{{ method_field('PUT')}}  

					<div class="row">
						<h5>Editar Servicio</h5>					
						<div class="divider"></div>
						<div class="file-field input-field s12">
							<div class="btn">
								<span>Imagen</span>
								<input type="file" name="file_image">            

							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
								<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 60x60</span>
							</div>
						</div>

						<div class="col s12">
							
							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="titulo_es"  value="{{ $servicio->titulo_es }}">
								<label for="icon_prefix">Nombre ES</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="titulo_pt"  value="{{ $servicio->titulo_pt }}">
								<label for="icon_prefix">Nombre PT</label>
							</div>
						</div>

						<div class="col s12">
							<h6 for="textarea1">Descripción</h6>
						</div>
						<div class="input-field col s6">

							<textarea id="descripcion_es" name="descripcion_es"> {!! $servicio->descripcion_es !!} </textarea>
						</div>
						<div class="input-field col s6">

							<textarea id="descripcion_pt" name="descripcion_pt"> {!! $servicio->descripcion_pt !!} </textarea>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">text_rotation_none</i>
							<input id="icon_prefix" type="text" class="validate" name="orden"  value="{{ $servicio->orden }}">
							<label for="icon_prefix">Orden</label>
						</div>
					</div>

					<div class="row">					
						<div class="right">
							<a href="{{ action('ServicioController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
							<button class="btn waves-effect waves-light btn-color" type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</main>

	@include('adm.layouts.script')

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>

	CKEDITOR.replace('descripcion_pt');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';


	CKEDITOR.replace('descripcion_es');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';


		$(document).ready(function(){		
			M.AutoInit();
			$('.collapsible').collapsible();
			$('select').formSelect();  


		});
	</script>

</body>
</html>