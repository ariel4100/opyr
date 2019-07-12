@extends('app')

@section('content')


<body>

<div class="row">
    <div class="container center">

    <img src="{{asset('/images/mapa.png')}}" class="responsive-img" alt="">

        <h5 class="center" style="margin-top:20px; color: #154C94;">
                Argentina · Uruguay · Brasil <br>
                + Varios puntos de venta en nuestro país
        </h5>

        <p class="center">
                Gracias a nuestro desarrollo y crecimiento continuo por más de 10 años en el mercado,
                hemos alcanzado hoy a tener presencia en los países de la región.
                Tenemos como objetivo apuntar y trabajar pensando más allá del Mercado Argentino,
                proyectándo nuestra compañía hacia el Comercio Internacional.
        </p>

    </div>
</div>

	@endsection
	@include('layouts.script')
</body>
</html>


