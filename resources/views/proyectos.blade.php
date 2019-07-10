@extends('layouts.main')

@include('inc.header')

@section('content')
<section id="proyectos">
	<div id="proyectos" class="bkground">
		<h1><b>PROYECTOS</b></h1>

		<ul class="flex">
			<li>
				<h1>¿QUERÉS <br> COLABORAR?</h1>
			</li>
			<li><h2><span>ARS</span> <br> $200</h2></li>
			<li><h2><span>ARS</span> <br> $300</h2></li>
			<li><h2><span>ARS</span> <br> $500</h2></li>
			<li><h2><span>OTRO</span> <br> MONTO</h2></li>
		</ul>
	</div>
	<div class="row">
		<div class="col-lg-6 bkground-img" id="uno">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		<div class="col-lg-6 descrip">
			<h2>REVOLUCIÓN PELOTA</h2>
			<p>Buscamos generar un impacto social a <br> traves del deporte.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 descrip">
			<h2>MÁS NUTRICIÓN</h2>
			<p>Merendero Revolucionar: Somos parte de un <br> colectivo que busca que los chicos y chicas <br> 
			del Barrio La Cava tengan su merienda.

			</p>
		</div>
		<div class="col-lg-6 bkground-img" id="dos">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		
	</div>

	<div class="row">
		<div class="col-lg-6 bkground-img" id="tres">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		<div class="col-lg-6 descrip">
			<h2>MÁS EDUCACIÓN</h2>
			<p>Revolucion Tilcara: Generamos proyectos <br> hace mas de 10 años en comunidades y <br> escuelas de la Quebrada de Humahuaca <br> buscando que nunca falten útiles para que <br> los niños puedan estudiar.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 descrip">
			<h2>MÁS NUTRICIÓN</h2>
			<p>A traves del arte y de la cultura tratamos de <br> recaudar fondos para costear parte de los <br> proyectos de Revolucionar.

			</p>
		</div>
		<div class="col-lg-6 bkground-img" id="cuatro">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		
	</div>
</section>


@include('inc.bkground-bottom')
@include('inc.footer')

@stop