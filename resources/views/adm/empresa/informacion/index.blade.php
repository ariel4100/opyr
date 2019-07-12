@include('adm.empresa.informacion.partials.header')

				</div>

				<h5>Información EMPRESA</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>
								Idioma
							</th>
							<th>
								Descripción
							</th>
							<th>
								Slogan
							</th>
							<th>
								Misión
							</th>
							<th>
								Opciones
							</th>
						</tr>
					</thead>
					<tbody>
						@if($empresa)
							<tr>
								<td>
									<strong>ES</strong>
								</td>
								<td>
									{!! $empresa->descripcion_es !!}
								</td>
								<td>
									{{ $empresa->slogan_es }}
								</td>
								<td>
									{!! $empresa->mision_es !!}
								</td>								
								<td>
									<a href=" {{ action('EmpresaController@edit', $empresa->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<strong>PT</strong>
								</td>
								<td>
									{!! $empresa->descripcion_pt !!}
								</td>
								<td>
									{{ $empresa->slogan_pt }}
								</td>
								<td>
									{!! $empresa->mision_pt !!}
								</td>								
								<td>
									<a href=" {{ action('EmpresaController@edit', $empresa->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<strong>IMAGEN</strong>
								</td>
								<td colspan="3" class="center">
									<img src="{{ asset('images/empresa/'.$empresa->file_image) }}">
								</td>
								<td>
									<a href=" {{ action('EmpresaController@edit', $empresa->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>							

						@else 

							<tr>
								<td colspan="5">No existen registros</td>
							</tr>

						@endif
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