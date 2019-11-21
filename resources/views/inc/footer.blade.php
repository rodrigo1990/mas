	<?php 
	$fb = "https://www.facebook.com/119955871504104/";
	$ig = "https://instagram.com/revolucionpelota?igshid=139dahradwvz3";
	$email = "info@movimientomas.org"



 ?>
<footer class="p5">
	<div class="row">
				<div class="container">
					<div class="col-lg-6 col-md-6">
				<h4 class="m0 mt4 text-right">Movimiento de Acción Social - 2019</h4>
			</div>
					<div class="col-lg-6 col-md-6">
				<ul class="flex ml0">
					<li>
						<a href="index">
							<img class="logo" src="{{asset('img/logo-white.svg')}}" alt="">
						</a>
					</li>
					
					<li><a href="mailTo:{{$email}}">
						<i><i class="far fa-envelope"></i></i>
					</a></li>

					<li>
						<a href="{{$fb}}" target="_blank" class="float-left rr-ss"><i class="fab fa-facebook-f"></i></a>
					</li>

					<li><a href="{{$ig}}" target="_blank" class="float-left rr-ss"><i class="fab fa-instagram"></i></a></li></li>
					
				</ul>
			</div>
			
		</div>
	</div>
	
</footer>