@include('adm.sliders.partials.header')


				</div>
					 @if(request()->is('adm/control/slider'))
				    <div class="row">
				        <form method="POST"  enctype="multipart/form-data" action="{{ route('control.update', $control->id) }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
    					{{ csrf_field() }}    
                        @method('PUT')
    						<div class="row">
    							<div class="col s12">
    							<h5>Contenido</h5>
    							</div>
    							<div class="col s12">							
    								<div class="input-field col s12">
    									<textarea id="titulo_es" name="texto"  >{{ $control->texto }} </textarea>
    								</div>
    							</div>
    						</div>
        					<div class="row">
        						<div class="right">
        							<button class="btn waves-effect waves-light btn-color" type="submit" name="action">Actualizar</button>
        						</div>
        					</div>
    			
			        </form>
				    </div>
				    <div class="divider"></div>
				    @endif
				
				 @if(request()->is('adm/control/slider'))
				    <a href="{{ action('SliderController@create', ['seccion' => 'control']) }}" class="  right btn-small waves-effect waves-light green"><i class="material-icons">add</i></a>
				    @endif
				<h5>Sliders</h5>
				 
				<div class="divider"></div>
		 
	            @if(request()->is('adm/control/slider'))
					<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($sliders as $s)

							<tr>
								<td style="width: 350px"><img src="{{ asset('images/sliders/'.$s->file_image) }}"></td>
								<td>
									<a href=" {{ action('SliderController@edit', ['id' => $s->id, 'seccion' => $seccion])}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
									<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('SliderController@eliminar', ['id' => $s->id])}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="4">No existen registrosss</td>
								
							</tr>
						@endforelse
					</tbody>
				</table>
				@else
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Título</th>
							<th>Descripción</th>
							<th>Orden</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($sliders as $s)

							<tr>
								<td style="width: 350px"><img src="{{ asset('images/sliders/'.$s->file_image) }}"></td>
								<td>{!! $s->titulo_es !!}<br>{!! $s->titulo_pt !!}</td>
								<td>{!! $s->descripcion_es !!}<br>{!! $s->descripcion_pt !!}</td>
								<td>{{ $s->orden }}</td>
								<td>
									<a href=" {{ action('SliderController@edit', ['id' => $s->id, 'seccion' => $seccion])}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
									<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('SliderController@eliminar', ['id' => $s->id])}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="4">No existen registros</td>
							</tr>
						@endforelse
					</tbody>
				</table>
				@endif

			</div>
		</div>
	</div>
</main>

@include('adm.layouts.script')
	<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	$(document).ready(function(){		
		M.AutoInit();
		$('.collapsible').collapsible();
		$('select').formSelect();  

	});



	CKEDITOR.replace('titulo_es');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';



</script>
</body>
</html>