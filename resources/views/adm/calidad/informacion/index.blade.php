@include('adm.calidad.informacion.partials.header')



				</div>
			</div>


				<h5>Información CALIDAD</h5>					

				<div class="divider"></div>

				<table class="index-table responsive-table ">

					<tbody>

						@if($calidad)

							<tr>

								<td><b>Título ES</b></td>

								<td>{!! $calidad->titulo_es !!}</td>

							</tr>

							<tr>

								<td><b>Título PT</b></td>

								<td>{!! $calidad->titulo_pt !!}</td>

							</tr>


							<tr>

								<td><b>Descripción ES</b></td>

								<td>{!! $calidad->texto_es !!}</td>

							</tr>

							<tr>

								<td><b>Descripción PT</b></td>

								<td>{!! $calidad->texto_pt !!}</td>

							</tr>

							<tr>

								<td>
								    <b>Imagen</b>
								</td>

								<td>
								    @if($calidad->file_image != null)
								    <img src="{{ asset('images/calidad/'.$calidad->file_image) }}">
								    @endif
								    <a href=" {{ action('CalidadController@show', $calidad->id)}} " class="btn-floating btn-large waves-effect waves-light red left"><i class="fas fa-trash-alt"></i></a>
								</td>

							</tr>

							<tr>

								<td colspan="2">

									<a href=" {{ action('CalidadController@edit', $calidad->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>

								</td>

							</tr>

						@else

							<tr>

								<td colspan="2">No existen registros</td>

							</tr>

						@endif

					</tbody>

				</table>



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