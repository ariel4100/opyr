@include('adm.calidad.descargas.partials.header')

					<a class="breadcrumb">Editar</a>

				</div>



				<h5>Descargas de Calidad</h5>					

				<div class="divider"></div>

				<div class="col s12">



					<form method="POST"  enctype="multipart/form-data" action="{{action('DescargaController@update', $descarga->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">

						{{ csrf_field() }}    

						{{ method_field('PUT')}}  



						<div class="row">

							<h5>Editar</h5>					

							<div class="divider"></div>





							<div class="file-field input-field s12">

								<div class="btn">

									<span>Archivo</span>

									<input type="file" name="file">            



								</div>

								<div class="file-path-wrapper">

									<input class="file-path validate" type="text">

									<span class="helper-text" data-error="wrong" data-success="right">Formato aceptado: PDF</span>

								</div>

							</div>



							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_pt"  value="{{ $descarga->nombre_pt }}">

								<label for="icon_prefix">Nombre PT</label>

							</div>





							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_es" value="{{ $descarga->nombre_es }}" >

								<label for="icon_prefix">Nombre ES</label>

							</div>


							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="orden"  value="{{$descarga->orden}}" >

								<label for="icon_prefix">Orden</label>

							</div>

							



							<div class="right">

								<a href="{{ action('DescargaController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>

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



	CKEDITOR.replace('descripcion');

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