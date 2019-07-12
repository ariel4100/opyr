@include('adm.novedades.partials.header')
					<a class="breadcrumb">Crear</a>
				</div>

				<h5>Novedades</h5>					
				<div class="divider"></div>
				<div class="col s12">

					<form method="POST"  enctype="multipart/form-data" action="{{action('NovedadController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
						{{ csrf_field() }}    

						<div class="row">
							<h5>Crear</h5>					
							<div class="divider"></div>



							<div class="file-field input-field s12">
								<div class="btn">
									<span>Imagen</span>
									<input type="file" name="file_image">            

								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
									<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 682x405</span>
								</div>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="titulo_es" >
								<label for="icon_prefix">Título ES</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="titulo_pt" >
								<label for="icon_prefix">Título PT</label>
							</div>

							<div class="input-field col s10">
								<select name="categoria_id">
									@foreach ($categorias as $c )
										<option value="{{ $c->id }}"  >{{ ucwords($c->nombre_es) }} (ES) / {{ ucwords($c->nombre_pt) }}(PT)</option>
									@endforeach
								</select>
							</div>

							<div class="input-field col s2">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="orden" >
								<label for="icon_prefix">Orden</label>
							</div>
							<div class="col s12">
								<h6 for="textarea1">Texto</h6>
							</div>
							<div class="input-field col s6">

								<textarea id="texto_es" name="texto_es"> </textarea>
							</div>

							<div class="input-field col s6">

								<textarea id="texto_pt" name="texto_pt"> </textarea>
							</div>
							<div class="row">
								

								<div class="right">
									<a href="{{ action('NovedadController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
									<button class="btn waves-effect waves-light btn-color" type="submit" name="action">Submit
										<i class="material-icons right">send</i>
									</button>
								</div>
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

	CKEDITOR.replace('texto_es');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';

	CKEDITOR.replace('texto_pt');
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