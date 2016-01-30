@extends("layout.layout")

@section("content")

<div id="section_inicio" class="section" style="background: url({{URL::asset('/assets/img/pcbg2.jpg')}});background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div id="f_inicio">
               <img src="{{URL::asset('/assets/img/yo.png')}}" class="img img-circle img-responsive">
               <p id="f_nombre">Jhonny Vasquez</p>
               <p id="f_descripcion">Programador web / Fronted - Backend</p>
            </div>
         </div>
      </div>
   </div>
</div>

<div id="section_portafolio" class="section" style="background: url({{URL::asset('/assets/img/03_banner.jpg')}});background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="items_titulos">
					Portafolio
				</div>
			</div>
		</div>
	</div>
</div>
@stop