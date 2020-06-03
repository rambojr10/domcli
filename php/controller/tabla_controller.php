<?php 
	require_once '../model/tabla_model.php';
	if (isset($_POST['op']) && $_POST['op'] == 'cargar_tabla') {
		$model = new tabla_model();
		$datos = $model->datos();
		foreach ($datos as $d) {
			echo "
				<tr>
					<td>
						$d->PKId
					</td>
					<td>
						$d->Password
					</td>
				</tr>
			";
		}
	}
?>
	