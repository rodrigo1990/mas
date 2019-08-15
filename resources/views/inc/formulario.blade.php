<section id="formulario" style="display:none;">

	<div class="overlay"></div>
		<div id="formulario-cont">
			<a class="close-btn" onClick="closeFormulario()">
				<i class="fas fa-times-circle"></i>
			</a>
			<img src="<?php echo asset('img/logo-blue.svg') ?>" alt="" class="float-left">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="container">
						<form action="">
							<div class="col-lg-6">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-lg-6">
								<label for="apellido">Apellido</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-lg-12">
								<label for="documento">DNI</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-lg-12">
								<label for="monto">Monto</label>
								<select name="monto" id="" class="form-control">
									<option>Seleccione un monto</option>
									<option value="200"> $200</option>
									<option value="300">$300</option>
									<option value="500">$500</option>
									<option value="otro">Otro monto...</option>
								</select>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</section>
