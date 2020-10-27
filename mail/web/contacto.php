<?php
use yii\helpers\Html;
?>

<div style="padding: 20px;text-align: justify;">
	<p>Hola Saurio,</p>
	<p>
		Una persona acaba de ponerse en contacto desde www.bisaurios.com
	</p>
	<p>
		A continuación encontrarás los detalles de su información:
	</p>
	<br>
	<p>
		<table class="table" border="1" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td><b>Empresa</b></td>
				<td><?= $model->empresa; ?></td>
			</tr>
			<tr>
				<td><b>Nombre</b></td>
				<td><?= $model->nombre; ?></td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td><?= $model->email; ?></td>
			</tr>
			<tr>
				<td><b>Celular</b></td>
				<td><?= $model->celular; ?></td>
			</tr>
			<tr>
				<td><b>Mensaje</b></td>
				<td><?= $model->body; ?></td>
			</tr>
		</table>
	</p>
</div>