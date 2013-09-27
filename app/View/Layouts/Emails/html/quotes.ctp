<?php $datos = $this->Session->read('dato.datos'); ?>
<div>
	<table>
		<tr>
			<td>
				Nombre
			</td>
			<td>
				<?php echo $datos['nombre'];  ?>
			</td>
		</tr>
		<tr>
			<td>
				Direccion
			</td>
			<td>
			<?php echo $datos['direccion']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Telefono
			</td>
			<td>
			<?php echo $datos['telefono']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Correo
			</td>
			<td>
			<?php echo $datos['email']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Mensaje
			</td>
			<td>
			<?php echo $datos['mensaje']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Fecha
			</td>
			<td>
			<?php echo $datos['fecha']; ?>
			</td>
		</tr>
	</table>
</div>