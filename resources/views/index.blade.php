@extends('layouts.main')
@section('content')
@include('inc.header')
<section id="index">
<div class="bkground">
	<h1><b>M</b>ovimiento de <b>A</b>cción <b>S</b>ocial</h1>

	<ul class="flex">
		<li>
			<h1>¿QUERÉS <br> COLABORAR?</h1>
		</li>
		<li><a onClick="openFormulario(200)"><h2><span>ARS</span> <br> $200</h2></a></li>
		<li><a onClick="openFormulario(300)"><h2><span>ARS</span> <br> $300</h2></a></li>
		<li><a onClick="openFormulario(500)"><h2><span>ARS</span> <br> $500</h2></a></li>
		<li><a onClick="openFormulario('otro')"><h2><span>OTRO</span> <br> MONTO</h2></a></li>
	</ul>
</div>
<div class="row separator">
	<h1 class="text-center p30 m0"><b>NO NECESITÁS UNA RAZÓN</b><br><span> PARA AYUDAR</span></h1>
</div>

<div class="row img-row-btn mt0">
	<div class="container-fluid">
		<ul class="flex">
			<li><div class="overlay"><a href="/pelota"><h4 class="text-center p5">VER +</h4></a></div><div  class="footer"><h4 class="text-center m0 p5">REVOLUCIÓN PELOTA</h4></div></li>
			<li><div class="overlay"><a href="/nutricion"><h4 class="text-center p5">VER +</h4></a></div><div  class="footer"><h4 class="text-center m0 p5">MÁS NUTRICIÓN</h4></li>
			<li><div class="overlay"><a href="/educacion"><h4 class="text-center p5">VER +</h4></a></div><div  class="footer"><h4 class="text-center m0 p5">MÁS EDUCACIÓN</h4></li>
			<li><div class="overlay"><a href="/arte"><h4 class="text-center p5">VER +</h4></a></div><div  class="footer"><h4 class="text-center m0 p5">MÁS ARTE</h4></li>
		</ul>
	</div>
</div>


<div class="row nosotros mt0 p10 mb18" id="nosotros">
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


@include('inc.formulario')
@include('inc.bkground-bottom')
@include('inc.footer')

@stop
