@include('adm.general.condiciones.partials.header')


					<a class="breadcrumb">Editar</a>
				</div>

				<h5>Informacion</h5>					
				<div class="divider"></div>
				<div class="col s12">

					<form method="POST"  enctype="multipart/form-data" action="{{action('CondicionController@update', $condicion->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
						{{ csrf_field() }}    
						{{ method_field('PUT')}}  

						<div class="row">

							<div class="row">
								
								<div class="col s12">
									<h6 for="textarea1">Términos y Condiciones ES</h6>
								</div>
								<div class="input-field col s12">
									<textarea id="descripcion_es" name="descripcion_es"> {{ $condicion->descripcion_es }} </textarea>
								</div>

							</div>
							<div class="row">
								
								<div class="col s12">
									<h6 for="textarea1">Términos y Condiciones PT</h6>
								</div>
								<div class="input-field col s12">
									<textarea id="descripcion_pt" name="descripcion_pt"> {{ $condicion->descripcion_pt }} </textarea>
								</div>

							</div>
							<div class="right">
								<a href="{{ action('CondicionController@edit', '1') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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

	CKEDITOR.replace('descripcion_pt');
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