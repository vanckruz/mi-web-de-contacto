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

<div id="section_habilidades" class="section" style="background: url({{URL::asset('/assets/img/02_banner.jpg')}});background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<div class="contenedor_habilidad">	
					<div class="item_habilidades" style="width:90%;">
						html5/css3/bootstrap
					</div>
					<div class="item_porcentajes">
						95%
					</div>
				</div>

				<div class="contenedor_habilidad">	
					<div class="item_habilidades" style="width:84%;">
						Javascript/Jquery
					</div>
					<div class="item_porcentajes">
						90%
					</div>
				</div>

				<div class="contenedor_habilidad">	
					<div class="item_habilidades" style="width:84%;">
						php
					</div>
					<div class="item_porcentajes">
						90%
					</div>
				</div>	

				<div class="contenedor_habilidad">	
					<div class="item_habilidades" style="width:84%;">
						Codeigniter
					</div>
					<div class="item_porcentajes">
						90%
					</div>
				</div>	

				<div class="contenedor_habilidad">	
					<div class="item_habilidades" style="width:36%;">
						Laravel
					</div>
					<div class="item_porcentajes">
						40%
					</div>
				</div>											
				<div class="contenedor_habilidad">	
					<div class="item_habilidades" style="width:54%;">
						Nodejs/Express
					</div>
					<div class="item_porcentajes">
						60%
					</div>
				</div>

				<div class="contenedor_habilidad">	
					<div class="item_habilidades" style="width:46%;">
						Java/python
					</div>
					<div class="item_porcentajes">
						50%
					</div>
				</div>	
				<div class="contenedor_habilidad">	
					<div class="item_habilidades" style="width:75%;">
						Mysql/Oracle
					</div>
					<div class="item_porcentajes">
						75%
					</div>
				</div>	


			</div>
		</div>
	</div>
</div>

<div id="section_portafolio" class="section" style="background: url({{URL::asset('/assets/img/03_banner.jpg')}});background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12" style="text-align:center;">
				<div class="items_titulos" id="item_title_portafolio">
					Portafolio
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 col-xs-12">
			   <a href="http://www.starve.esy.es" class="thumbnail">
			      <img src="{{URL::asset('/assets/img/starve.png')}}" class="img img-responsive">
			    </a>				
			</div>
			<div class="col-md-4 col-xs-12">
				 <a href="http://www.doctorjulioreyes.com" class="thumbnail">
			      <img src="{{URL::asset('/assets/img/cirujano.png')}}" class="img img-responsive">
			    </a>				
			</div>
			<div class="col-md-4 col-xs-12">
			   <a href="http://extensions.teamcreed.com/antithief/" class="thumbnail">
			      <img src="{{URL::asset('/assets/img/antithief.png')}}" class="img img-responsive">
			    </a>				
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 col-xs-12">
			   <a href="http://www.catinde.com" class="thumbnail">
			      <img src="{{URL::asset('/assets/img/catinde.png')}}" class="img img-responsive">
			    </a>				
			</div>
			<div class="col-md-4 col-xs-12">
				 <a title="Sistema de intranet privado" class="thumbnail">
			      <img src="{{URL::asset('/assets/img/correspondencia.png')}}" class="img img-responsive">
			    </a>				
			</div>
			<div class="col-md-4 col-xs-12">
			   <a href="#" class="thumbnail">
			      <img src="{{URL::asset('/assets/img/jhonny.png')}}" class="img img-responsive">
			    </a>				
			</div>
		</div>

	</div>
</div>
@stop