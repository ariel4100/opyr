@include('adm.datos.contacto.partials.header')
					<a class="breadcrumb">Editar</a>
				</div>

				<h5>Información de Contacto</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<tbody>

						@if($telefono_fax)
							<tr>
								<td><b>Teléfono y Fax</b></td>
								<td>{{ $telefono_fax->descripcion }}</td>
								<td >
									<a href=" {{ action('DatoController@editContacto', $telefono_fax->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@endif
						@if($telefono_3)
							<tr>
								<td><b>N° de Teléfono 1</b></td>
								<td>{{ $telefono_3->descripcion }}</td>
								<td >
									<a href=" {{ action('DatoController@editContacto', $telefono_3->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@endif
						@if($telefono)
							<tr>
								<td><b>N° de Teléfono 2</b></td>
								<td>{{ $telefono->descripcion }}</td>
								<td >
									<a href=" {{ action('DatoController@editContacto', $telefono->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@endif
						@if($email)
							<tr>
								<td><b>Correo Electrónico ES</b></td>
								<td>{{ $email->descripcion }}</td>
								<td >
									<a href=" {{ action('DatoController@editContacto', $email->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@endif
						@if($email1)
							<tr>
								<td><b>Correo Electrónico PT</b></td>
								<td>{{ $email1->descripcion }}</td>
								<td >
									<a href=" {{ action('DatoController@editContacto', $email1->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@endif
						@if($dir)
							<tr>
								<td><b>Dirreccion ES</b></td>
								<td>{{ $dir->descripcion }}</td>
								<td >
									<a href=" {{ action('DatoController@editContacto', $dir->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@endif
						@if($dir1)
							<tr>
								<td><b>Dirreccion PT</b></td>
								<td>{{ $dir1->descripcion }}</td>
								<td >
									<a href=" {{ action('DatoController@editContacto', $dir1->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@endif
						@if($whatsapp)
							<tr>
								<td><b>Whatsapp</b></td>
								<td>{{ $whatsapp->descripcion }}</td>
								<td >
									<a href=" {{ action('DatoController@editContacto', $whatsapp->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
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