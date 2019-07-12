@include('adm.privada.cliente.partials.header')



				</div>



				<h5>Cliente</h5>

				<div class="divider"></div>

				<table class="index-table-logos responsive-table ">

					<thead>

						<tr>

							<th>Nombre</th>
							<th>Nombre de usuario</th>
							<th>Email</th>
							<th>Social</th>
							<th>Telefono</th>
							<th>Opciones</th>

						</tr>

					</thead>

					<tbody>

						@forelse($clientes as $d)

							<tr>

								<td>{{ $d->name }}</td>
								<td>{{ $d->username }}</td>
								<td>{{ $d->email}}</td>
								<td>{{ $d->social }}</td>
								<td>{{ $d->telefono }}</td>
								<td>

									<a href=" {{ action('ClienteController@edit', $d->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>

									<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('ClienteController@eliminar', $d->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="fas fa-trash-alt"></i></a>



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