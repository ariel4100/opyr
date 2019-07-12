
<div class="slider" id="slider-home">
	<ul class="slides">
		@forelse($sliders as $s)
		<li>
			<img src="{{ asset('images/sliders/'.$s->file_image) }}" class="img-responsive" style="position: absolute;"> 
			<div class="caption " id="caption-sliders" style="padding-top: 7%; left: 5% !important; width: 40%">
				<div id="titulo-caption">
					{!! $s->{'titulo_'.$idioma }!!}
				</div>
				<div id="descripcion-caption">
					{!! $s->{'descripcion_'.$idioma} !!}	
				</div>
			</div>
		</li>
		@empty
		@endforelse
	</ul>
</div>


 