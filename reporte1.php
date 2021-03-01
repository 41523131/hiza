<?php

	$conexion=mysqli_connect("localhost","root","","hiza");
    $municipio=$_REQUEST['municipio'];
	$distrito_f=$_REQUEST['distrito_f'];
	$distrito_l=$_REQUEST['distrito_l'];

		if (empty($municipio))
			{
				$personas="SELECT * FROM clasificacion_comp WHERE distrito_l='$distrito_l' and distrito_f='$distrito_f'";
			}
		
			else if (empty($distrito_l))
			{
				$personas="SELECT * FROM clasificacion_comp WHERE municipio='$municipio' and distrito_f='$distrito_f'";
			}
			
			else if(empty($distrito_f))
			{
				$personas="SELECT * FROM clasificacion_comp WHERE municipio='$municipio' and distrito_l='$distrito_l'";
			}
			else{
				$personas="SELECT * FROM clasificacion_comp WHERE municipio='$municipio' and distrito_l='$distrito_l' or distrito_f='$distrito_f'";

			}

			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=CLASIFICACION.xls');
    header('Cache-Control: max-age=0');
			


?>
<html lang="es">

	<head>
	<title>Hiza</title>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	</head>

	<body>
		
		<h2>Reporte de Clasificacion Competitiva</h2>

		<section>
		
				<div class="datatable-container" >	
					<table class="table" >
						<tr>
                        <th>ENTIDAD</th>
                        <th>DISTRITO FEDERAL</th>
						<th>DISTRITO LOCAL</th>
                        <th>CABECERA </th>
                        <th>MUNICIPIO</th>
                        <th>SECCION</th>
                        <th>LN</th>
                        <th>AMBITO</th>
                        <th>PRI</th>
						<th>MORENA</th>
                        <th>MORENA EN COALICION</th>
						</tr>
				
						<?php

						
						if ($res = mysqli_query($conexion, $personas)) {
						while ($row = mysqli_fetch_array($res)) {
						
						?>
						<form>
					
							<tr>
                            			
								<td><?php echo $row['entidad'];?></td>
                                <td><?php echo $row['distrito_f'];?></td>
								<td><?php echo $row['distrito_l'];?></td>
                                <td><?php echo $row['cabecera'];?></td>
                                <td><?php echo $row['municipio'];?></td>
                                <td><?php echo $row['seccion'];?></td>
                                <td><?php echo $row['ln'];?></td>
                                <td><?php echo $row['ambito'];?></td>
                                <td><?php echo $row['pri'];?></td>
								<td><?php echo $row['morena'];?></td>
                                <td><?php echo $row['morena_coalicion'];?></td>
                                
						
						<?php  
						}     
						} 
						?>
					</table>
				</div>
			            </form>
	
		</section>
		</form>

	</body>
</html>