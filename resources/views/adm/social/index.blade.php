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

                    <a href="" class="breadcrumb">Redes Sociales</a>

                </div>

                <div class="col s12">



                    <form method="POST"  enctype="multipart/form-data" action="{{ route('social.update', $social->id) }}" class="col s12 m8 offset-m2 xl10 offset-xl1">

                        {{ csrf_field() }}
                        @method('PUT')

                        <div class="row">

                           <h5>Redes Sociales </h5>

                            <div class="divider"></div>



                            <div class="input-field col s6">

                                <i class="material-icons prefix">keyboard_arrow_right</i>

                                <input id="icon_prefix" type="text" class="validate" name="facebook"  value="{{ $social->facebook }}">

                                <label for="icon_prefix">Facebook</label>

                            </div>

                            <div class="input-field col s6">

                                <i class="material-icons prefix">keyboard_arrow_right</i>

                                <input id="icon_prefix" type="text" class="validate" name="twitter"  value="{{ $social->twitter }}">

                                <label for="icon_prefix">Twitter</label>

                            </div>
                            <div class="input-field col s6">

                                <i class="material-icons prefix">keyboard_arrow_right</i>

                                <input id="icon_prefix" type="text" class="validate" name="instagram"  value="{{ $social->instagram }}">

                                <label for="icon_prefix">Instagram</label>

                            </div>
 
                            
                            <div class="col s12 ">
                                <div class="right">
                                    <button class="btn waves-effect waves-light btn-color" type="submit" name="action">Actualizar

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
 
    })


</script>





</body>



</html>