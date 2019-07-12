@include('adm.productos.partials.header')

					<a class="breadcrumb">Editar</a>

				</div>



				<h5>Productos</h5>					

				<div class="divider"></div>

				<div class="col s12">



					<form method="POST"  enctype="multipart/form-data" action="{{action('ProductoController@update', $producto->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">

						{{ csrf_field() }}    

						{{ method_field('PUT')}}  



						<div class="row">

							<h5>Editar</h5>					

							<div class="divider"></div>




                            <div class="s10" style="display: flex;align-items: center;">
    							<div class="file-field input-field" style="flex: 1;">
    								<div class="btn" style="position: relative;">
    									<span>Imagen</span>
    									<input type="file" name="file_image">
    								</div>
    								<div class="file-path-wrapper">
    									<input class="file-path validate" type="text">
    									<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 450x450
    							    </div>
    							</div>
    							<div style="padding: 5px; border: 1px solid #ccc; margin: 5px;">
                                <img src="{{ asset('images/productos/'.$producto->file_image) }}" style="width: 150px;float: left;">
                                </div>
                            </div>

							<div class="file-field input-field s10">
								<div class="btn" style="position: relative;">
									<span>Dibujo Técnico</span>
									<input type="file" name="file_plano">            

								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
									<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 450x450
							</div>


							<div class="file-field input-field s10">
								<div class="btn" style="position: relative;">
									<span>Ficha</span>
									<input type="file" name="file_ficha">            

								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
									<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 450x450
							</div>




							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_es" value="{{ $producto->nombre_es }}" >

								<label for="icon_prefix">Nombre ES</label>

							</div>





							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_pt"  value="{{ $producto->nombre_pt }}">

								<label for="icon_prefix">Nombre PT</label>

							</div>



							<div class="input-field col s12">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="video" value="{{ $producto->video }}" >

								<label for="icon_prefix">Video</label>

							</div>

							<div class="input-field col s6">


								<h6 for="textarea1">Descripción ES</h6>

								<textarea id="descripcion_es" name="descripcion_es">  {!!  $producto->descripcion_es !!}  </textarea>

							</div>


							<div class="input-field col s6">



								<h6 for="textarea1">Descripción PT</h6>
								<textarea id="descripcion_pt" name="descripcion_pt">  {!!  $producto->descripcion_pt !!}  </textarea>

							</div>




							<div class="input-field col s6">


								<h6 for="textarea1">Aplicaciones ES</h6>

								<textarea id="aplicaciones_es" name="aplicaciones_es"> {!! $producto->aplicaciones_es !!}  </textarea>

							</div>

							<div class="input-field col s6">


								<h6 for="textarea1">Aplicaciones PT</h6>

								<textarea id="aplicaciones_pt" name="aplicaciones_pt"> {!!  $producto->aplicaciones_pt !!} </textarea>

							</div>


							<div class="input-field col s6">

								<h6 for="textarea1">Ciclos ES</h6>


								<textarea id="ciclos_es" name="ciclos_es" > {!! $producto->ciclos_es !!}   </textarea>

							</div>

							<div class="input-field col s6">

								<h6 for="textarea1">Ciclos PT</h6>


								<textarea id="ciclos_pt" name="ciclos_pt" > {!! $producto->ciclos_pt !!}   </textarea>

							</div>


							<div class="input-field col s6">

								<select class="materialSelect" id="familia"  name="familia_id">

									@foreach ($familias as $f )

									<option value="{{ $f->id }}"  >{{ ucwords($f->nombre_es) }} </option>

									@endforeach

								</select>

							</div>



							<div class="input-field col s6">

								<select class="materialSelect" id="subfamilia" name="subfamilia_id">


								</select>

							</div>

							<div class="col s4 m4">
                                <p>
                                    <label>
                                        <input type="checkbox" name="display_es" />
                                        <span>Mostrar en Español</span>
                                    </label>
                                </p>
							</div>
							<div class="col s4 m4">
                                <p>
                                    <label>
                                        <input type="checkbox" name="display_pt" />
                                        <span>Mostrar en Portugués</span>
                                    </label>
                                </p>
							</div>


							<div class="input-field col s4 m4">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="orden"   value="{{$producto->orden}}" >

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
	    $("#familia").val("{{$producto->familia_id}}").trigger("change");

		M.AutoInit();

		$('.collapsible').collapsible();

		$('select').formSelect();  

	});

	





	 $(document).on("change", '#familia', function () {
	     console.log("DD");

        var subfamiliasURL = "{{ url('adm/productos/select/subfamilias')}}";

		let idSubfamilia = "{{ $producto->subfamilia_id }}";

        $.get(subfamiliasURL,

                {option: $(this).val()},

                function (data) {

                    var model = $('#subfamilia');

                    model.empty();

                    model.append("<option value='1'>Ninguna</option>");

                    $.each(data, function (index, element) {
						if(parseInt(element.id) == parseInt(idSubfamilia))
                        	model.append(`<option selected value="${element.id}">${element.nombre_es}</option>`);
						else
                            model.append(`<option value="${element.id}">${element.nombre_es}</option>`);


                    });

                    $('select').formSelect();  



                }

        );



    });

</script>





</body>



</html>