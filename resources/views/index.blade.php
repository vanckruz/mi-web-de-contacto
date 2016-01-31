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
<div id="section_presentacion" class="section" style="background: url({{URL::asset('/assets/img/fblue.jpg')}});background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 hidden-sm hidden-xs" style="position:relative;">
        <img src="{{URL::asset('/assets/img/lapto.png')}}" class="img img-responsive">
        <div style="width:65%;border-radius:10px;padding:1em;margin:auto;position:absolute;top:4em;left:14em;background: url({{URL::asset('/assets/img/blue_b.jpg')}});background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
          <div>
            <img src="{{URL::asset('/assets/img/yo.jpg')}}" class="img left" style="display:block;width:35%;margin-right:2em;border-radius:5px;">
            <div style="padding:2em;text-align:justify;background:rgba(255,255,255,0.3);">
              <h3 class="text_center" style="font-size:2em;">! Hola y Bienvenido a mi página !</h3>
              <p style="font-size:1.4em;">
                Tengo 26 años, soy Tecnico Superior en Infórmatica y desarrollador web, soy ambicioso y muy apasionado 
                con mi trabajo siempre estoy en busca de nuevos conocimientos y nuevos proyectos.						 	
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-xs-12">
      </div>
    </div>
  </div>
</div>
<div id="section_habilidades" class="section" style="background: url({{URL::asset('/assets/img/02_banner.jpg')}});background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"  >
        <div class="items_titulos" id="item_title_portafolio">
          Conocimientos y habilidades
        </div>
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
            php/codeigniter
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
          <div class="item_habilidades" style="width:67%;">
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
<div id="section_contacto" class="section" style="background: url({{URL::asset('/assets/img/01_banner.jpg')}});background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12" style="text-align:center;">
        <div class="items_titulos" id="item_title_contacto">
          Contáctame
        </div>
      </div>
    </div>
    <form action="{{url('/send_message') }}" id="form_contacto" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <span for="" class="titulo_form">Nombre:</span>
          <input type="text" name="nombre" id="nombre" class="form-control input_contacto" placeholder="Nombres" required>
        </div>
        <div class="col-md-6 col-xs-12">
          <span for="" class="titulo_form">Apellido:</span>
          <input type="text" name="apellido" id="apellido" class="form-control input_contacto" placeholder="Apellidos" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <span for="" class="titulo_form">Email:</span>
          <input type="email" name="email" id="email" class="form-control input_contacto" placeholder="Email" required>
        </div>
        <div class="col-md-6 col-xs-12">
          <span for="" class="titulo_form">País:</span>
          <select name="pais" id="pais" class="form-control" style="cursor:pointer;border-radius: 0;background:transparent;color:#fff;" required>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 white_c">
          <span for="" class="titulo_form" style="display:inline-block !important;margin-right:1em;">Tipo de contacto:</span>
	        <div  style="font-size:1.3em;display:inline-block;">
	          <label class="radio-inline">
	          <input type="radio" name="tipo_contacto" id="inlineRadio1" value="trabajo"> Trabajo
	          </label>
	          <label class="radio-inline">
	          <input type="radio" name="tipo_contacto" id="inlineRadio2" value="sugerencia"> Sugerencia
	          </label>
	          <label class="radio-inline">
	          <input type="radio" name="tipo_contacto" id="inlineRadio2" value="otro"> Otro
	          </label>		        	
	        </div>			
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <span for="" class="titulo_form">Mensaje:</span>
          <textarea name="mensaje" id="mensaje" class="form-control input_contacto" cols="30" rows="5" style="resize:none;" required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <span for="" class="titulo_form">Adjuntar Imagen:</span>
          <input type="file" name="imagen" id="imagen" class="form-control input_contacto" style="height:auto;cursor:pointer;padding:.5em !important;" accept="image/*">
        </div>
      </div>      
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" id="button_send_message" class="btn ">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="ventana_loader">
	
</div>	
@stop