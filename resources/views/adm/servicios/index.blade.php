@include('adm.servicios.partials.header')


				</div>
				<h5>Marcas</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Orden</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($servicios as $m)

							<tr>
								<td style="width: 350px"><img src="{{ asset('images/servicios/'.$m->file_image) }}"></td>
								<td>{!! $m->titulo_es !!} <br> {!! $m->titulo_pt !!}</td>
								<td>{{ $m->orden }}</td>
								<td>
									<a href=" {{ action('ServicioController@edit', $m->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
									<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('ServicioController@eliminar', ['id' => $m->id])}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="fas fa-trash-alt"></i></a>
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

@include('adm.layouts.script')

<script>
	$(document).ready(function(){		
		M.AutoInit();
		$('.collapsible').collapsible();
		$('select').formSelect();  

	});

</script>
</body>
</html>