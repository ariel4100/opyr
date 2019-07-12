@include('adm.productos.familias.partials.header')

					<a class="breadcrumb">Editar</a>

				</div>



				<h5>Familias</h5>					

				<div class="divider"></div>

				<div class="col s12">



					<form method="POST"  enctype="multipart/form-data" action="{{action('FamiliaController@update', $familia->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">

						{{ csrf_field() }}    

						{{ method_field('PUT')}}  



						<div class="row">

							<h5>Editar</h5>					

							<div class="divider"></div>





							<div class="file-field input-field s12">

								<div class="btn">

									<span>Imagen</span>

									<input type="file" name="file_image">            



								</div>

								<div class="file-path-wrapper">

									<input class="file-path validate" type="text">

									<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 266x279</span>

								</div>

							</div>



							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_es"  value="{{$familia->nombre_es}}" >

								<label for="icon_prefix">Nombre ES</label>

							</div>
							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_pt"  value="{{$familia->nombre_pt}}" >

								<label for="icon_prefix">Nombre PT</label>

							</div>



							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="orden"   value="{{$familia->orden}}" >

								<label for="icon_prefix">Orden</label>

							</div>
							@if($familia->control)
                                <p>
                                  <label>
                                    <input type="checkbox" name="control" {{$familia->control == 'on' ? 'checked' : ''}}/>
                                    <span>Control</span>
                                  </label>
                                </p>
                            @endif


							<div class="right">

								<a href="{{ action('FamiliaController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>

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



<script>



	$(document).ready(function(){		

		M.AutoInit();

		$('.collapsible').collapsible();

		$('select').formSelect();  

	});

</script>





</body>



</html>