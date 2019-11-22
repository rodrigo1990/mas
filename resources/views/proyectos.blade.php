@extends('layouts.main')

@include('inc.header')

@section('content')
<section id="proyectos">
	<div id="proyectos" class="bkground flex">
		<h1><b>PROYECTOS</b></h1>

		<ul class="">
			<li>
				<a href="https://donaronline.org/movimiento-de-accion-social/colaborador-mas" target="_blank">
					<h1>EMPEZÁ A DONAR AHORA</h1>
				</a>
			</li>
		</ul>
	</div>
	<div class="row" id="pelota">
		<div class="col-lg-6 col-sm-6  hidden-xs bkground-img col-push uno">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
		<div class="col-lg-6 col-sm-6 col-xs-12 descrip flex">
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
		<div class="col-lg-6 col-sm-6 col-xs-12 descrip flex">
			<div>
				<h2 class="mt0">MÁS NUTRICIÓN</h2>
				<p>Merendero MAS: Somos parte de un <br> colectivo que busca que los chicos y chicas <br> 
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
		<div class="col-lg-6 col-sm-6 col-xs-12 descrip descrip-tres flex">
			<div>
				<h2 class="mt0">MÁS EDUCACIÓN</h2>
				<p>Tamborcito Tilcara: Generamos proyectos <br> hace mas de 10 años en comunidades y <br> escuelas de la Quebrada de Humahuaca <br> buscando que nunca falten útiles para que <br> los niños puedan estudiar.</p>
			</div>
		</div>
		<div class="hidden-lg hidden-md col-xs-12 hidden-sm bkground-img tres">
			<!--  <img src="{{asset('img/proy-1-1.jpg')}}" alt="">-->
		</div>
	</div>

	<div class="row" id="arte">
		<div class="col-lg-6 col-sm-6 col-xs-12 descrip flex">
			<div>
				<h2 class="mt0">MÁS ARTE</h2>
				<p>A través del arte y de la cultura tratamos de <br> recaudar fondos para costear parte de los <br> proyectos.

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