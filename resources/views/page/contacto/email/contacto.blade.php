@if(App::getLocale() == 'es')
Has recibido un mensaje de : {{ $nombre }}
@else
    Você recebeu uma mensagem : {{ $nombre }}
@endif

<p>
@lang('home.nombre'): {{ $nombre }}
</p>

<p>
    @lang('home.apellido'): {{ $apellido }}
</p>

<p>
    @lang('home.email'): {{ $email }}
</p>



<p>
    @lang('home.mensaje'): {{ $mensaje }}
</p>