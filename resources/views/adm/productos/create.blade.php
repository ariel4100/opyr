@include('adm.productos.partials.header')

					<a class="breadcrumb">Crear</a>

				</div>



				<h5>Productos</h5>					

				<div class="divider"></div>

				<div class="col s12">



					<form method="POST"  enctype="multipart/form-data" action="{{action('ProductoController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">

						{{ csrf_field() }}    



						<div class="row">

							<h5>Crear</h5>					

							<div class="divider"></div>





							<div class="file-field input-field s10">

								<div class="btn">

									<span>Imagen</span>

									<input type="file" name="file_image">            



								</div>

								<div class="file-path-wrapper">

									<input class="file-path validate" type="text">

									<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 450x450

							</div>

							<div class="file-field input-field s10">
								<div class="btn">
									<span>Dibujo Técnico</span>
									<input type="file" name="file_plano">            

								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
									<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 450x450
							</div>


							<div class="file-field input-field s10">
								<div class="btn">
									<span>Ficha</span>
									<input type="file" name="file_ficha">            

								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
									<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 450x450
							</div>




							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_es"  >

								<label for="icon_prefix">Nombre ES</label>

							</div>





							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_pt"  >

								<label for="icon_prefix">Nombre PT</label>

							</div>



							<div class="input-field col s12">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="video"  >

								<label for="icon_prefix">Video</label>

							</div>
							
							<div class="input-field col s6">
								<h6 for="textarea1">Descripción ES</h6>



								<textarea id="descripcion_es" name="descripcion_es"> </textarea>

							</div>




							<div class="input-field col s6">

								<h6 for="textarea1">Descripción PT</h6>


								<textarea id="descripcion_pt" name="descripcion_pt"> </textarea>

							</div>





							<div class="input-field col s6">

								<h6 for="textarea1">Aplicaciones ES</h6>


								<textarea id="aplicaciones_es" name="aplicaciones_es">  </textarea>

							</div>



							<div class="input-field col s6">
								<h6 for="textarea1">Aplicaciones PT</h6>



								<textarea id="aplicaciones_pt" name="aplicaciones_pt">  </textarea>

							</div>



							<div class="input-field col s6">
								<h6 for="textarea1">Ciclos ES</h6>



								<textarea id="ciclos_es" name="ciclos_es">  </textarea>

							</div>


							<div class="input-field col s6">

								<h6 for="textarea1">Ciclos PT</h6>


								<textarea id="ciclos_pt" name="ciclos_pt">  </textarea>

							</div>





							<div class="input-field col s5">

								<select class="materialSelect" id="familia" name="familia_id">
		                            <option  selected disabled>Seleccione Familia</option>
									@foreach ($familias as $f )

									<option value="{{ $f->id }}" >{{ ucwords($f->nombre_es) }} </option>

									@endforeach

								</select>

							</div>



							<div class="input-field col s5">

								<select class="materialSelect" id="subfamilia" name="subfamilia_id">

									@foreach ($subfamilias as $s )

									<option value="{{ $s->id }}" >{{ ucwords($s->nombre_es) }} </option>

									@endforeach

								</select>

							</div>



							<div class="input-field col s2">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="orden"  >

								<label for="icon_prefix">Orden</label>

							</div>



						</div>

						<div class="row">

							



							<div class="right">

								<a href="{{ action('ProductoController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>

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




	CKEDITOR.replace('descripcion_es');

	CKEDITOR.config.height = '150px';

	CKEDITOR.config.width = '100%';





	CKEDITOR.replace('descripcion_pt');

	CKEDITOR.config.height = '150px';

	CKEDITOR.config.width = '100%';




	CKEDITOR.replace('aplicaciones_pt');

	CKEDITOR.config.height = '150px';

	CKEDITOR.config.width = '100%';





	CKEDITOR.replace('aplicaciones_es');

	CKEDITOR.config.height = '150px';

	CKEDITOR.config.width = '100%';




	CKEDITOR.replace('ciclos_pt');

	CKEDITOR.config.height = '150px';

	CKEDITOR.config.width = '100%';





	CKEDITOR.replace('ciclos_es');

	CKEDITOR.config.height = '150px';

	CKEDITOR.config.width = '100%';





	$(document).ready(function(){		

		M.AutoInit();

		$('.collapsible').collapsible();

		$('select').formSelect();  

	});







	 $(document).on("change", '#familia', function () {

        var subfamiliasURL = "{{ url('adm/productos/select/subfamilias')}}";



        $.get(subfamiliasURL,

                {option: $(this).val()},

                function (data) {

                    var model = $('#subfamilia');

                    model.empty();

                    model.append("<option value='1'>Ninguna</option>");

                    $.each(data, function (index, element) {

                        model.append("<option value='" + element.id + "'>" + element.nombre_es + "</option>");



                    });

                    $('select').formSelect();  



                }

        );



    });

</script>





</body>



</html>