<?php

	$conexion=mysqli_connect("localhost","hizarese_root","j0oDa@tYHid8","hizarese_bdhiza");
	$municipio=$_REQUEST['municipio'];
	$distrito_f=$_REQUEST['distrito_f'];
	$distrito_l=$_REQUEST['distrito_l'];

		if (empty($municipio))
			{
				$personas="SELECT * FROM metas_prioridades WHERE distrito_l='$distrito_l' and distrito_f='$distrito_f'";
			}
		
			else if (empty($distrito_l))
			{
				$personas="SELECT * FROM metas_prioridades WHERE municipio='$municipio' and distrito_f='$distrito_f'";
			}
			
			else if(empty($distrito_f))
			{
				$personas="SELECT * FROM metas_prioridades WHERE municipio='$municipio' and distrito_l='$distrito_l'";
			}
			else{
				$personas="SELECT * FROM metas_prioridades WHERE municipio='$municipio' and distrito_l='$distrito_l' or distrito_f='$distrito_f'";

			}

	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=REPORTE METAS Y PRIORIDADES.xls");
	header("Pragma: no-cache");
	header("Expires: 0");



?>
<html lang="es">

	<head>
	<title>Hiza</title>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	</head>

	<body>
		
		<h2>Reporte de Metas y Prioridades</h2>

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
                        <th>META</th>
                        <th>PRIO</th>
                        <th>ESPERADA PRI</th>
                        <th>ESPERADA PRD</th>
                        <th>ESPERADA PT</th>
                        <th>ESPERADA PVEM</th>
                        <th>ESPERADA MC</th>
                        <th>ESPERADA MORENA</th>
                        <th>ESPERADA OTROS</th>
                        <th>ESPERADA MORENA EN COALICION</th>
						<th>ESPERADA PAN EN COALICION</th>
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
                                <td><?php echo $row['meta'];?></td>
                                <td><?php echo $row['prio'];?></td>
                                <td><?php echo $row['esp_pri'];?></td>
                                <td><?php echo $row['esp_prd'];?></td>
                                <td><?php echo $row['esp_pt'];?></td>
                                <td><?php echo $row['esp_pvem'];?></td>
                                <td><?php echo $row['esp_mc'];?></td>
                                <td><?php echo $row['esp_morena'];?></td>
                                <td><?php echo $row['esp_otros'];?></td>
                                <td><?php echo $row['esp_morena_coalicion'];?></td>
                                <td><?php echo $row['esp_pan_coalicion'];?></td>								
							</tr>
						
						<?php  
						}     
						} 
						?>
					</table>
				</div>
			            </form>
	
		</section>
		

	</body>
</html>