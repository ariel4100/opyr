@extends('app')

@section('content')

<div class="row" style="margin-bottom:40px;">
    <div class="container">

        <div class="col l3 s12">
            <h5 class="center" style="color:#00873E;">Ya soy cliente</h5>
            <p>Ingrese los datos</p>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="row" style="margin-bottom:0">
                    <div class="input-field col s12">
                        <input id="username" type="text" required name="username" class="validate">
                        <label for="username">Usuario</label>
                    </div>
                </div>
                <div class="row mt0">
                    <div class="input-field col s12">
                        <input id="contra" type="password" required name="password" class="validate">
                        <label for="contra">Contraseña</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" style="background-color:#1A4F93">Ingresar
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
        <div class="col l9 s12"  style="padding-left:30px">
            <h5 style="color:#00873E;">Registrar nuevo cliente</h5>
            <p>Complete el siguiente formulario para registrarse en nuestro sitio web.</p>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="row" style="margin-bottom:0">
                    <div class="input-field col s12">
                        <input id="name" type="text" required name="name" class="validate">
                        <label for="name">Nombre Completo (*)</label>
                    </div>
                </div>
                <div class="row" style="margin-bottom:0">
                    <div class="input-field col s12">
                        <input id="email" type="email" required name="email" class="validate">
                        <label for="email">Correo electronico (*)</label>
                    </div>
                </div>
                <div class="row" style="margin-bottom:0">
                    <div class="input-field col s12">
                        <input id="username" type="text" required name="username" class="validate">
                        <label for="username">Nombre de usuario (*)</label>
                    </div>
                </div>
                <div class="row" style="margin-bottom:0">
                    <div class="input-field col s12">
                        <input id="password" type="password" required name="password" class="validate">
                        <label for="password">Contraseña (*)</label>
                    </div>
                </div>
                <div class="row" style="margin-bottom:0">
                    <div class="input-field col s12">
                        <input id="telefono" type="text" required name="telefono" class="validate">
                        <label for="telefono">Telefono (*)</label>
                    </div>
                </div>
                <div class="row" style="margin-bottom:0">
                    <div class="input-field col s12">
                        <input id="social" type="text" required name="social" class="validate">
                        <label for="social">Razon Social (*)</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" style="background-color:#1A4F93">Registrar
                    <i class="material-icons right">send</i>
                </button>
                <p style="color:#1A4F93">(*) Campos obligatorios</p>
            </form>
        </div>




    </div>
</div>
@endsection

@include('layouts.script')

</body>
</html>


