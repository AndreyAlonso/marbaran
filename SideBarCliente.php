<?php
echo '
<div class="col-md-3  col-sm-12">
			<div class="col-12 bg-light border border-success text-center">
				<div class="container align-items-start"> <img class="card-title " src="imagenes/user.png" width="30%"></div>

				<h2 style="font-family:arial; size: 12px;">Hola <?php echo $nombre; ?>!</h2> 
			</div>
			<div class="col-12 bg-light border border-success text-center">

				<ul class="list-group">
					<li class="list-group-item"><a href="#" class="text-info">Configuración perfil</a></li>
					<li class="list-group-item"><a href="modificaPassword.php" class="text-info">Modificar contraseña</a></li>
					<li class="list-group-item"><a href="#" class="text-info">Ver historial de compras</a></li>
					<li class="list-group-item"><a href="#" class="text-info">Ver pedidos</a></li>
					<li class="list-group-item"><a href="#" onclick="eliminaPerfil()" class="text-danger">Eliminar cuenta</a></li>
				</ul>
			</div>

		</div>

'
?>