@include('adm.layouts.app')
@include('adm.layouts.navbar')
@include('adm.layouts.sidebar')


<main>

	<div class="container" id="container-fluid">

		<div class="row">

			@if ($errors->any())

				<div class="card-panel alert-error">

					<ul>

						<li>ALERTA:

							@foreach ($errors->all() as $error)

							{{ $error }}



							@endforeach

						</li>

					</ul>

				</div>

			@endif



			@if (session('alert'))

				<div class="card-panel alert-success">

					<ul>

						<li>ALERTA:

							{{ session('alert') }}				

						</li>

					</ul>

				</div>

			@endif

			<div class="col s12">

				<div class="col s12" id="breadcrumb-admin">

			<a href="{{ url('adm/home/' )}}" class="breadcrumb">Home</a>

					<a href="{{ route('privada.adm' )}}" class="breadcrumb">Privada</a>

					<a href="" class="breadcrumb">Descargas</a>

					<a class="breadcrumb">Crear</a>

				</div>



				<h5>Descargas </h5>					

				<div class="divider"></div>

				<div class="col s12">



					<form method="POST"  enctype="multipart/form-data" action="{{action('PrivadaController@store') }}" class="col s12 m8 offset-m2 xl10 offset-xl1">

						{{ csrf_field() }}    



						<div class="row">

							<h5>Crear</h5>					

							<div class="divider"></div>





							<div class="file-field input-field s12">

								<div class="btn">

									<span>Archivo</span>

									<input type="file" name="file">            



								</div>

								<div class="file-path-wrapper">

									<input class="file-path validate" type="text">

									<span class="helper-text" data-error="wrong" data-success="right">Formato aceptado: PDF</span>

								</div>

							</div>
                            <div class="input-field col m6 s12">

                                <i class="material-icons prefix">keyboard_arrow_right</i>
                              
                                <select id="icon_prefix" multiple class="select_all" name="cliente[]">
                                 @foreach($clientes as $c)
                                    <option value = "{{ $c->id }}">{{ $c->name}}</option>
                                 @endforeach
                                </select> 
                                <label for="icon_prefix">Seleccionar Cliente</label>
                            </div>
							@php($seccion = array('descargas','general'))
							<div class="input-field col m6 s12">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<select id="icon_prefix" multiple class="select_all" name="seccion[]">
									@foreach($seccion as $k=>$item)
										<option value="{{$item}}"  >{{ $k == 1 ? 'Informacion general' : ucwords($item) }}</option>
									@endforeach
								</select>
								<label for="icon_prefix">Seleccionar Seccion</label>
							</div>

							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_pt" >

								<label for="icon_prefix">Nombre PT</label>

							</div>





							<div class="input-field col s6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="nombre_es" >

								<label for="icon_prefix">Nombre ES</label>

							</div>


							<div class="input-field col m6">

								<i class="material-icons prefix">keyboard_arrow_right</i>

								<input id="icon_prefix" type="text" class="validate" name="orden"  >

								<label for="icon_prefix">Orden</label>

							</div>

							

                            <div class="col s12 ">
                                <div class="right">

                                    <a href="{{ action('PrivadaController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>

                                    <button class="btn waves-effect waves-light btn-color" type="submit" name="action">Submit

                                        <i class="material-icons right">send</i>

                                    </button>

                                </div>
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
$(document).ready(function() {
    M.AutoInit();

    $('.collapsible').collapsible();

    $('select').formSelect();
        // $('select').val([1]);
        $('select').formSelect();
        $('select.select_all').siblings('ul').prepend('<li id=sm_select_all><span>Todos</span></li>');
        $('li#sm_select_all').on('click', function () {
        var jq_elem = $(this), 
            jq_elem_span = jq_elem.find('span'),
            select_all = jq_elem_span.text() == 'Todos',
            set_text = select_all ? 'Ninguno' : 'Todos';
        jq_elem_span.text(set_text);
        jq_elem.siblings('li').filter(function() {
            return $(this).find('input').prop('checked') != select_all;
            }).click();
        });
})
 

</script>





</body>



</html>