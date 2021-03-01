<?php

	$conexion=mysqli_connect("localhost","root","","hiza");

$municipio=$_REQUEST['municipio'];
	$distrito_f=$_REQUEST['distrito_f'];
	$seccion=$_REQUEST['seccion'];
	$prior=$_REQUEST['prior'];

	if (empty($municipio))
			{
				$personas="SELECT * FROM manzanas_prioritarias WHERE distrito_f='$distrito_f' and seccion='$seccion' or prior='$prior' ";
			}
		
			else if (empty($distrito_f))
			{
				$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and seccion='$seccion' or prior='$prior'";
			}
			
			else if(empty($seccion))
			{
				$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and distrito_f='$distrito_f' or prior='$prior'";
			}

			else if(empty($prior))
			{
				$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and distrito_f='$distrito_f' or seccion='$seccion'";
			}

			else{
				$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and distrito_l='$distrito_l' or distrito_f='$distrito_f' or prior='$prior'";

			}


	//$personas = "SELECT * FROM manzanas_prioritarias WHERE 1 ".$query_muni.$query_df.$query_sec.$query_pr;

	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=REPORTE MANZANAS.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	

?>
<html lang="es">

	<head>
	<title>Hiza</title>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	</head>

	<body>
		
		<h2>Reporte Manzanas Prioritarias</h2>

		<section>
		
				<div class="datatable-container" >	
					<table class="table" >
						<tr>
                        <th>ENTIDAD</th>
                        <th>DISTRITO</th>
                        <th>DISTRITO_LOCAL </th>
                        <th>MUNICIPIO</th>
                        <th>LOCALIDAD</th>
                        <th>SECCION</th>
                        <th>MANZANA</th>
                        <th>LISTA_HOMBRES</th>
                        <th>LISTA_MUJERES</th>
                        <th>LISTA</th>
                        <th>ACUM</th>
                        <th>PRIORIDAD</th>
						</tr>
				
						<?php

						if ($res = mysqli_query($conexion, $personas)) {
							

						while ($row = mysqli_fetch_array($res)) {
						
						?>
						<form>
					
							<tr>
                            			
								<td><?php echo $row['ENTIDAD'];?></td>
                                <td><?php echo $row['distrito_f'];?></td>
                                <td><?php echo $row['DISTRITO_LOCAL'];?></td>
                                <td><?php echo $row['municipio'];?></td>
                                <td><?php echo $row['LOCALIDAD'];?></td>
                                <td><?php echo $row['seccion'];?></td>
                                <td><?php echo $row['manzana'];?></td>
                                <td><?php echo $row['LISTA_HOMBRES'];?></td>
                                <td><?php echo $row['LISTA_MUJERES'];?></td>
                                <td><?php echo $row['LISTA'];?></td>
                                <td><?php echo $row['ACUM'];?></td>
                                <td><?php echo $row['prior'];?></td>
                                
						
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

