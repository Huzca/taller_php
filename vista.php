<?php
require_once 'demoColector.php';
require_once 'demo.php';

// Logica
$alm = new demo();
$model = new demoColector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejemplo grupo de la muerte</title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">id demo</th>
                            <th style="text-align:left;">nombre</th>
			    <th style="text-align:left;">imagen</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarDEMO() as $r): ?>
                        <tr>
                          <td><?php echo $r->getid_demo(); ?></td>
                          <td><?php echo $r->getNombre(); ?></td>
                          <td><?php echo'<img src="fotos/'.$r->getImagen().'"';?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
