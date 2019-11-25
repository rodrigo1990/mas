	<?php 
	$fb = "https://www.facebook.com/119955871504104/";
	$ig = "https://instagram.com/revolucionpelota?igshid=139dahradwvz3";
	$email = "info@movimientomas.org"



 ?>
	<header id="menu-center" >
			<div  class="row">
				<div class="container-fluid">
					<div class="col-lg-2 hidden-md hidden-sm hidden-xs ">
						<a href="index" id="logo-btn" style="cursor:pointer">
							<img class="logo" src="<?php echo asset("img/logo-white.svg")?>"></img> 

						</a>
					</div>

					<div class="col-lg-10 hidden-md hidden-sm hidden-xs btn-cont">
						<ul id="nav" class="menu">
							<li><a href="proyectos"  class="after-btn">PROYECTOS</a></li>
							<li><a  id=""  class="after-btn quienes-somos-btn"  >QUIENES SOMOS</a></
						<li><a href="https://donaronline.org/movimiento-de-accion-social/colaborador-mas" target="_blank" class="after-btn">COLABORÁ</a></li>

							<li class="">

								<a href="mailTo:{{$email}}" target="_blank" class="float-left rr-ss"><i class="far fa-envelope"></i></a>
								
								<a href="{{$fb}}" target="_blank" class="float-left rr-ss"><i class="fab fa-facebook-f"></i></a>


								<a href="{{$ig}}" target="_blank" class="float-left rr-ss"><i class="fab fa-instagram"></i></a>
							</li>
							
						</ul>
					</div>

				</div>
				<div class="hidden-lg col-md-12 col-sm-12 col-xs-12 text-center xs-row " style="">
					<a href="index.php">
						<img class="logo" id="logo-btn-xs" src="<?php echo asset("img/logo-white.svg")?>"></img> 
					</a>
						<a id="abrirMenu">
							<i class="fa fa-bars"  id="abrirMenu"></i>
						</a>
					</div>
			</div>
		</header>
		<ul id="xsMenu" class="overlay-xs-menu menu">
			<div class="row">
				<a id="cerrarMenu"  class="close-menu-xs">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<li><a href="proyectos" class="xs-btn spa-btn">PROYECTOS</a></li>
				<li><a  id=""  class="xs-btn spa-btn quienes-somos-btn"  >QUIENES SOMOS</a></li>

			<li><a onClick="openFormulario()"  class="xs-btn spa-btn">COLABORÁ</a></li>
			<li style="    margin: auto;width: fit-content;margin-top: 41px;">
				
				<a href="mailTo:{{$email}}" target="_blank" class="float-left rr-ss"><i class="far fa-envelope"></i></a>

				<a href="{{$fb}}" target="_blank" class="float-left rr-ss ml2" style="margin-left: 15px;margin-right: 9px;"><i class="fab fa-facebook-f"></i></a>


				<a href="{{$ig}}" target="_blank" class="float-left rr-ss ml2"><i class="fab fa-instagram"></i></a>
			</li>
		</ul>