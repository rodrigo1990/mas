@extends('layouts.main')
@section('content')
@include('inc.header')
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
	<div class="row" id="pelota">
		<div class="col-lg-6 col-sm-6  hidden-xs bkground-img col-push uno">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		<div class="col-lg-6 col-sm-6 col-xs-12 descrip">
			<div>
				<h2 class="mt0">REVOLUCIÓN PELOTA</h2>
				<p>Buscamos generar un impacto social a <br> través del deporte.</p>
			</div>
		</div>
		<div class="hidden-lg hidden-md col-sm-12 col-xs-12 hidden-sm bkground-img col-push uno">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
	</div>

	<div class="row" id="nutricion">
		<div class="col-lg-6 col-sm-6 col-xs-12 descrip">
			<div>
				<h2 class="mt0">MÁS NUTRICIÓN</h2>
				<p>Merendero Revolucionar: Somos parte de un <br> colectivo que busca que los chicos y chicas <br> 
				del Barrio La Cava tengan su merienda.
			</div>
			</p>
		</div>
		<div class="col-lg-6 col-sm-6 col-xs-12 bkground-img dos" id="">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		
	</div>

	<div class="row" id="educacion">
		<div class="col-lg-6 col-sm-6 hidden-xs bkground-img tres">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		<div class="col-lg-6 col-sm-6 col-xs-12 descrip descrip-tres">
			<div>
				<h2 class="mt0">MÁS EDUCACIÓN</h2>
				<p>Revolución Tilcara: Generamos proyectos <br> hace mas de 10 años en comunidades y <br> escuelas de la Quebrada de Humahuaca <br> buscando que nunca falten útiles para que <br> los niños puedan estudiar.</p>
			</div>
		</div>
		<div class="hidden-lg hidden-md col-xs-12 hidden-sm bkground-img tres">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
	</div>

	<div class="row" id="arte">
		<div class="col-lg-6 col-sm-6 col-xs-12 descrip">
			<div>
				<h2 class="mt0">MÁS ARTE</h2>
				<p>A través del arte y de la cultura tratamos de <br> recaudar fondos para costear parte de los <br> proyectos de Revolucionar.

				</p>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-xs-12 bkground-img cuatro" id="">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		
	</div>
</section>


@include('inc.bkground-bottom')
@include('inc.footer')

@stop