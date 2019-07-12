@include('adm.productos.familias.partials.header')



				</div>



				<h5>Familias</h5>					

				<div class="divider"></div>

				<table class="index-table-logos responsive-table ">

					<thead>

						<tr>

							<th>Imagen</th>

							<th>Nombre ES</th>
							<th>Nombre PT</th>

							<th>Orden</th>

							<th>Opciones</th>

						</tr>

					</thead>

					<tbody>

						@forelse($familias as $f)

							<tr>

								<td style="width: 350px;"><img src="{{ asset('images/familias/'.$f->file_image) }}"></td>

								<td >{{ $f->nombre_es }}</td>
								<td >{{ $f->nombre_pt }}</td>

								<td>{{ $f->orden }}</td>

								<td>

									<a href=" {{ action('FamiliaController@edit', $f->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>

									<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('FamiliaController@eliminar', $f->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="fas fa-trash-alt"></i></a>



								</td>

							</tr>

						@empty

							<tr>

								<td colspan="4">No existen registros</td>

							</tr>

						@endforelse

					</tbody>

				</table>



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