@include('adm.calidad.descargas.partials.header')



				</div>



				<h5>Descargas</h5>					

				<div class="divider"></div>

				<table class="index-table-logos responsive-table ">

					<thead>

						<tr>

							<th>Nombre ES</th>
							<th>Nombre PT</th>
							<th>Orden</th>

							<th>Opciones</th>

						</tr>

					</thead>

					<tbody>

						@forelse($descargas as $d)

							<tr>

								<td>{{ $d->nombre_es }}</td>
								<td>{{ $d->nombre_pt }}</td>
								<td>{{ $d->orden }}</td>

								<td>

									<a href=" {{ action('DescargaController@edit', $d->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>

									<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('DescargaController@eliminar', $d->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="fas fa-trash-alt"></i></a>



								</td>

							</tr>

						@empty

							<tr>

								<td colspan="2">No existen registros</td>

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