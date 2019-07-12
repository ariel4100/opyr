<a href="{{route('productos')}}" class="graysillo breadcrumbsillo">Categorías</a>
<a href="#!" class="graysillo breadcrumbsillo">|</a>
<a href="{{route('productos.subfamilias', $familia->id)}}" class="graysillo breadcrumbsillo">{{ $familia->{'nombre_'.$lang} }}</a>
@isset($subfamilia)
    <a href="#!" class="graysillo breadcrumbsillo">|</a>
    <a href="{{route('productos.prod', ['familia' => $subfamilia->familia->id, 'subfamilia' => $subfamilia->id])}}" class="graysillo breadcrumbsillo">
        {{ $subfamilia->{'nombre_'.$lang} }}
    </a>
@endisset
@isset($producto)
    <a href="#!" class="graysillo breadcrumbsillo">|</a>
    <a href="{{ route('producto', $producto->id) }}" class="graysillo breadcrumbsillo">{{ $producto->{'nombre_'.$lang} }}</a>
@endisset