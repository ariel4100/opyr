@extends('app')

@section('content')
<link rel="stylesheet" href="{{asset('css/page/productos.css')}}">

<body>
        <div class="container">
                <div class="row" id="seccion-nombre">
                    <span>@lang('home.productos')</span>
                    <div class="divider" style="width:7%; background: #00883E; height: 2px;"></div>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    @foreach($familias as $f)

                            @if($f->id != 5 && $lang == 'pt')
                                <div class="col l4 m6 s12" style="height:350px; margin-bottom: 50px">
                                    <div class="paddingsillo">
                                        <div class="img-productsillo center">
                                            <a href="{{route('productos.subfamilias', $f->id)}}" class="center">
                                                <img class="responsive-img" style="height: 278.69px;" src="{{asset('/images/familias/'.$f->file_image)}}" alt="{{ $f->{'nombre_'.$lang} }}">
                                            </a>
                                        </div>
                                        <p class="texterino center">
                                            <a class="graysillo" href="{{route('productos.subfamilias', $f->id)}}">
                                                {{ $f->{'nombre_'.$lang} }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            @elseif($f->id  && $lang == 'es')
                                <div class="col l4 m6 s12" style="height:350px; margin-bottom: 50px">
                                    <div class="paddingsillo">
                                        <div class="img-productsillo center">
                                            <a href="{{route('productos.subfamilias', $f->id)}}" class="center">
                                                <img class="responsive-img" style="height: 278.69px;" src="{{asset('/images/familias/'.$f->file_image)}}" alt="{{ $f->{'nombre_'.$lang} }}">
                                            </a>
                                        </div>
                                        <p class="texterino center">
                                            <a class="graysillo" href="{{route('productos.subfamilias', $f->id)}}">
                                                {{ $f->{'nombre_'.$lang} }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            @endif

                    @endforeach
                </div>
            </div>

	@endsection

	@include('layouts.script')
</body>
</html>


