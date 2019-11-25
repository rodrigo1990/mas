@extends('layouts.main')
@section('content')
@include('inc.header')
<section id="index">
<div class="bkground flex">
	<h1><b>M</b>ovimiento de <b>A</b>cción <b>S</b>ocial</h1>

	<ul class="">
		<li>
			<a href="https://donaronline.org/movimiento-de-accion-social/colaborador-mas" target="_blank">
				<h1>EMPEZÁ A DONAR AHORA</h1>
			</a>
		</li>
		
	</ul>
</div>
<div class="row separator">
	<h1 class="text-center p30 m0"><b>NO NECESITÁS UNA RAZÓN</b><br><span> PARA AYUDAR</span></h1>
</div>

<div class="row img-row-btn mt0">
	<div class="container-fluid">
		<ul class="flex">
			<li><div class="overlay flex"><a href="/pelota"><h4 class="text-center p5">VER +</h4></a></div><div  class="footer"><h4 class="text-center m0 p5">REVOLUCIÓN PELOTA</h4></div></li>
			<li><div class="overlay flex"><a href="/nutricion"><h4 class="text-center p5">VER +</h4></a></div><div  class="footer"><h4 class="text-center m0 p5">MÁS NUTRICIÓN</h4></li>
			<li><div class="overlay flex"><a href="/educacion"><h4 class="text-center p5">VER +</h4></a></div><div  class="footer"><h4 class="text-center m0 p5">MÁS EDUCACIÓN</h4></li>
			<li><div class="overlay flex"><a href="/arte"><h4 class="text-center p5">VER +</h4></a></div><div  class="footer"><h4 class="text-center m0 p5">MÁS ARTE</h4></li>
		</ul>
	</div>
</div>



<div id="quienes-somos" class="row quienes-somos mt0 p10 mb18" id="nosotros" style="display:block;">
	<div class="container">
		<h1 class="text-center mt17 mb10">QUIENES SOMOS</h1>
		<div class="col-sm-6">
			<p>
				<b>MAS</b> es un movimiento de acción que tiene como
				objetivo la transformación social a través de cuatro
				pilares que impactan de manera fundamental en la etapa de desarrollo de los más chicos:
				<b>la alimentación, la educación, el deporte y la cultura.</b>
				Nuestro trabajo se basa en la constante búsqueda de herramientas que puedan igualar las oportunidades
			</p>
		</div>
		<div class="col-sm-6">
			<p>para todos aquellos que nacieron en situaciones de 
				vulnerabilidad. 
				Como grupo buscamos <b>incidir de forma positiva en la sociedad.</b> Estamos convencidos que generando estos mecanismos solidarios, que igualen las posibilidades de chicas y chicos en etapa de formación, vamos a estar mucho más cerca de nuestros objetivos.</p>
		</div>
		<div class="col-sm-12">
			<h3 class="text-center sub">CUATRO PILARES</h3>
			<ul class="flex">
				<li class="text-center">
					<img src="<?php echo asset('/img/icon-quienes-somos-01.svg') ?>"  alt="">
					<p><b>Alimentación</b></p>
				</li>
				<li class="text-center">
					<img src="<?php echo asset('/img/icon-quienes-somos-02.svg') ?>"  alt="">
					<p><b>Educación</b></p>
				</li>
				<li class="text-center">
					<img src="<?php echo asset('/img/icon-quienes-somos-03.svg') ?>"  alt="">
					<p><b>Deporte</b></p>
				</li>
				<li class="text-center">
					<img src="<?php echo asset('/img/icon-quienes-somos-04.svg') ?>"  alt="">
					<p><b>Arte y Cultura</b></p>
				</li>
			</ul>
		</div>
	</div>
</div>


<div id="nosotros" class="row nosotros mt0 p10 mb18" id="nosotros" style="display:none;">
	<div class="container">
		<h1 class="text-center mt17 mb10">NOSOTROS</h1>
		<ul class="flex mt20 mb20">
			<li class="text-center">
				<div class="circle-img"></div>
				<h4 class="text-center">NOMBRE APELLIDO</h4>
				<p class="text-center">rol en la organización</p>
			</li>
			<li class="text-center" >
				<div class="circle-img"></div>
				<h4 class="text-center">NOMBRE APELLIDO</h4>
				<p class="text-center">rol en la organización</p>
			</li>
			<li class="text-center">
				<div class="circle-img"></div>
				<h4 class="text-center">NOMBRE APELLIDO</h4>
				<p class="text-center">rol en la organización</p>
			</li>
		</ul>
	</div>
</div>

<!-- FOTO COLASH -->
<div class="row photo-colash">
	<img class="center-block" src="{{asset('img/Mas_img_pie.jpg')}}" alt="">
</div>
</section>



@include('inc.bkground-bottom')
@include('inc.footer')

@stop
