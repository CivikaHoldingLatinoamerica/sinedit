<?= view('plantillas_correo/header'); ?>

<table width="100%">

	<tr>
		<td style="width: 20%"></td>
		<td id="tituloCeldaCorreo">
			<p id="tituloCorreo"><?= lang('Notificacion.correo.tituloPagina') ?></p>
		</td>
		<td style="width: 20%"></td>
	</tr>

	<tr>
		<td style="width: 20%"></td>
		<td id="contenidoCeldaCorreo">
			<?php if(isset($notificacion->mensaje)): ?>
				<?=$notificacion->mensaje?>
			<?php endif; ?>
		</td>
		<td style="width: 20%"></td>
	</tr>


	<tr>
		<td style="width: 20%"></td>
		<td id="pieCeldaCorreo">
			<p>
				<?= lang('Notificacion.correo.piePaginaDescripcion') ?>
			</p>
			<hr>
			<p>
				<?= lang('Notificacion.correo.piePaginaDireccion') ?>
			</p>
		</td>
		<td style="width: 20%"></td>
	</tr>

</table>

<?= view('plantillas_correo/footer'); ?>