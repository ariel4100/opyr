@include('adm.empresa.informacion.partials.header')


					<a class="breadcrumb">Editar</a>
				</div>

				<h5>Informacion</h5>					
				<div class="divider"></div>
				<div class="col s12">

					<form method="POST"  enctype="multipart/form-data" action="{{action('EmpresaController@update', $empresa->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
						{{ csrf_field() }}    
						{{ method_field('PUT')}}  

						<div class="row">
							<h5>Editar</h5>					
							<div class="divider"></div>
							<div class="row">
								<div class="file-field input-field s12">
									<div class="btn">
										<span>Imagen</span>
										<input type="file" name="file_image">            
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text">
										<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 346x460</span>
									</div>
								</div>
							</div>

							<div class="row center">
								<div class="col s6">
									<strong>ES</strong>
								</div>
								<div class="col s6">
									<strong>BR</strong>
								</div>
							</div>	
							

							<div class="row">
								<div class="row"><strong>DESCRIPCIÓN</strong></div>
								
							<div class="col s12">
								<div class="input-field col s6">
									<textarea id="descripcion_es" name="descripcion_es"> {{ $empresa->descripcion_es }} </textarea>
								</div>
								<div class="input-field col s6">
									<textarea class="descripcion_pt" name="descripcion_pt"> {{ $empresa->descripcion_pt }} </textarea>
								</div>
							</div>

							<div class="row">
								<div class="row"><strong>SLOGAN</strong></div>

								<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
									<input id="icon_prefix" type="text" class="validate" name="slogan_es" value="{{ $empresa->slogan_es }}">
									<label for="icon_prefix">Slogan</label>
								</div>


								<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
									<input id="icon_prefix" type="text" class="validate" name="slogan_pt" value="{{ $empresa->slogan_pt }}">
									<label for="icon_prefix">Slogan</label>
								</div>

							</div>

							<div class="row">
								<div class="row"><strong>MISIÓN</strong></div>
							
								<div class="col s12">
									<div class="input-field col s6">
										<textarea id="mision_es" name="mision_es"> {{ $empresa->mision_es }} </textarea>
									</div>

									<div class="input-field col s6">
										<textarea id="mision_pt" name="mision_pt"> {{ $empresa->mision_pt }} </textarea>
									</div>

								</div>
							</div>

							<div class="right">
								<a href="{{ action('EmpresaController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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

@include('adm.layouts.script')
 
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>

	CKEDITOR.replace('descripcion_es');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';

	CKEDITOR.replace('descripcion_en');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';


	CKEDITOR.replace('descripcion_pt');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';
	

	CKEDITOR.replace('mision_es');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';

	CKEDITOR.replace('mision_en');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';


	CKEDITOR.replace('mision_pt');
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