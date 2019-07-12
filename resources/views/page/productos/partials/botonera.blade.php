<style>
    .collapsible {
        border: none;
        box-shadow: none;
    }
    .collapsible-header {

    }
    .collapsible-body {
        padding: 8px;
    }
</style>

<ul class="collapsible hide-on-med-only">
        @foreach($familias as $f)
        @if($f->id != 5 && $lang == 'pt')
            <li  class=" @if($f->id == $familia->id) active @endif @if($f->id == 1) hide @endif" style="color:#128C44">
                <div class="collapsible-header"
                     style="display:flex; justify-content:space-between; align-items:center; padding:8px">
                    <a href="{{route('productos.subfamilias', $f->id)}}" class="graysillo @if($f->id == $familia->id) active @endif">
                        {{ $f->{'nombre_'.$lang} }}
                    </a>
                    <i class="material-icons">keyboard_arrow_right</i>
                </div>
                <div class="collapsible-body" style="padding:0">
                    @foreach($f->subfamilias as $subf)
                        {{---@foreach($subf->productos as $p)
                            @if($p->subfamilia_id == 5)
                                @dd($subf->productos)
                            @endif
                        @endforeach--}}
                        <ul class="collapsible">
                            <li @isset($subfamilia) @if($subf->id == $subfamilia->id) class="active" @endif @endisset>
                                <div class="collapsible-header">
                                    <a href="{{route('productos.prod', ['familia' => $f->id, 'subfamilia' => $subf->id])}}"
                                       class="graysillo" style="padding-left: 0;"
                                       @isset($subfamilia) @if($subf->id == $subfamilia->id) style="color: #128C44;" @endif @endisset
                                    >{{$subf->{'nombre_'.$lang} }}</a>
                                </div>
                                <div class="collapsible-body" style="border:none">
                                    @foreach($subf->productos as $ppp)
                                        <ul class="collapsible" style="margin:0">
                                            <div class="collapsible-header" style="border:none">
                                                <a href="{{ route('producto', $ppp->id) }}" class="gra ysillo"  style="padding-left: 0;"
                                                   @isset($producto) @if($ppp->id == $producto->id) style="color: #128C44;" @endif @endisset
                                                >{{$ppp->{'nombre_'.$lang} }}</a>
                                            </div>
                                        </ul>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </li>
        @elseif($f->id  && $lang == 'es')
            <li  class=" @if($f->id == $familia->id) active @endif @if($f->id == 1) hide @endif" style="color:#128C44">
                <div class="collapsible-header"
                     style="display:flex; justify-content:space-between; align-items:center; padding:8px">
                    <a href="{{route('productos.subfamilias', $f->id)}}" class="graysillo @if($f->id == $familia->id) active @endif">
                        {{ $f->{'nombre_'.$lang} }}
                    </a>
                    <i class="material-icons">keyboard_arrow_right</i>
                </div>
                <div class="collapsible-body" style="padding:0">
                    @foreach($f->subfamilias as $subf)
                        {{---@foreach($subf->productos as $p)
                            @if($p->subfamilia_id == 5)
                                @dd($subf->productos)
                            @endif
                        @endforeach--}}
                        <ul class="collapsible">
                            <li @isset($subfamilia) @if($subf->id == $subfamilia->id) class="active" @endif @endisset>
                                <div class="collapsible-header">
                                    <a href="{{route('productos.prod', ['familia' => $f->id, 'subfamilia' => $subf->id])}}"
                                       class="graysillo" style="padding-left: 0;"
                                       @isset($subfamilia) @if($subf->id == $subfamilia->id) style="color: #128C44;" @endif @endisset
                                    >{{$subf->{'nombre_'.$lang} }}</a>
                                </div>
                                <div class="collapsible-body" style="border:none">
                                    @foreach($subf->productos as $ppp)
                                        <ul class="collapsible" style="margin:0">
                                            <div class="collapsible-header" style="border:none">
                                                <a href="{{ route('producto', $ppp->id) }}" class="gra ysillo"  style="padding-left: 0;"
                                                   @isset($producto) @if($ppp->id == $producto->id) style="color: #128C44;" @endif @endisset
                                                >{{$ppp->{'nombre_'.$lang} }}</a>
                                            </div>
                                        </ul>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </li>
        @endif

        @endforeach
    </ul>

<ul class="collapsible hide-on-large-only">
    <li>
        <div class="collapsible-header" style="padding: 0"><button type="button" class="btn">Categorias</button></div>
        <div class="collapsible-body">
            <ul class="collapsible ">
                @foreach($familias as $f)
                    @if($f->id != 5 && $lang == 'pt')
                        <li  class=" @if($f->id == $familia->id) active @endif @if($f->id == 1) hide @endif" style="color:#128C44">
                            <div class="collapsible-header"
                                 style="display:flex; justify-content:space-between; align-items:center; padding:8px">
                                <a href="{{route('productos.subfamilias', $f->id)}}" style="padding-left: 0;" class="graysillo @if($f->id == $familia->id) active @endif">
                                    {{ $f->{'nombre_'.$lang} }}
                                </a>
                                <i class="material-icons">keyboard_arrow_right</i>
                            </div>
                            <div class="collapsible-body" style="padding:0">
                                @foreach($f->subfamilias as $subf)
                                    {{---@foreach($subf->productos as $p)
                                        @if($p->subfamilia_id == 5)
                                            @dd($subf->productos)
                                        @endif
                                    @endforeach--}}
                                    <ul class="collapsible">
                                        <li @isset($subfamilia) @if($subf->id == $subfamilia->id) class="active" @endif @endisset>
                                            <div class="collapsible-header">
                                                <a href="{{route('productos.prod', ['familia' => $f->id, 'subfamilia' => $subf->id])}}"
                                                   class="graysillo" style="padding-left: 0;"
                                                   @isset($subfamilia) @if($subf->id == $subfamilia->id) style="color: #128C44;" @endif @endisset
                                                >{{$subf->{'nombre_'.$lang} }}</a>
                                            </div>
                                            <div class="collapsible-body" style="border:none">
                                                @foreach($subf->productos as $ppp)
                                                    <ul class="collapsible" style="margin:0">
                                                        <div class="collapsible-header" style="border:none">
                                                            <a href="{{ route('producto', $ppp->id) }}" class="gra ysillo"  style="padding-left: 0;"
                                                               @isset($producto) @if($ppp->id == $producto->id) style="color: #128C44;" @endif @endisset
                                                            >{{$ppp->{'nombre_'.$lang} }}</a>
                                                        </div>
                                                    </ul>
                                                @endforeach
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </li>
                    @elseif($f->id  && $lang == 'es')
                        <li  class=" @if($f->id == $familia->id) active @endif @if($f->id == 1) hide @endif" style="color:#128C44">
                            <div class="collapsible-header"
                                 style="display:flex; justify-content:space-between; align-items:center; padding:8px">
                                <a href="{{route('productos.subfamilias', $f->id)}}" style="padding-left: 0;" class="graysillo @if($f->id == $familia->id) active @endif">
                                    {{ $f->{'nombre_'.$lang} }}
                                </a>
                                <i class="material-icons">keyboard_arrow_right</i>
                            </div>
                            <div class="collapsible-body" style="padding:0">
                                @foreach($f->subfamilias as $subf)
                                    {{---@foreach($subf->productos as $p)
                                        @if($p->subfamilia_id == 5)
                                            @dd($subf->productos)
                                        @endif
                                    @endforeach--}}
                                    <ul class="collapsible">
                                        <li @isset($subfamilia) @if($subf->id == $subfamilia->id) class="active" @endif @endisset>
                                            <div class="collapsible-header">
                                                <a href="{{route('productos.prod', ['familia' => $f->id, 'subfamilia' => $subf->id])}}"
                                                   class="graysillo" style="padding-left: 0;"
                                                   @isset($subfamilia) @if($subf->id == $subfamilia->id) style="color: #128C44;" @endif @endisset
                                                >{{$subf->{'nombre_'.$lang} }}</a>
                                            </div>
                                            <div class="collapsible-body" style="border:none">
                                                @foreach($subf->productos as $ppp)
                                                    <ul class="collapsible" style="margin:0">
                                                        <div class="collapsible-header" style="border:none">
                                                            <a href="{{ route('producto', $ppp->id) }}" class="gra ysillo"  style="padding-left: 0;"
                                                               @isset($producto) @if($ppp->id == $producto->id) style="color: #128C44;" @endif @endisset
                                                            >{{$ppp->{'nombre_'.$lang} }}</a>
                                                        </div>
                                                    </ul>
                                                @endforeach
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </li>
                    @endif

                @endforeach
            </ul>
        </div>
    </li>
</ul>