<?php

	$conexion=mysqli_connect("localhost","hizarese_root","j0oDa@tYHid8","hizarese_bdhiza");

	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=REPORTE TOTAL DE ESTRUCTURA.xls");
	header("Pragma: no-cache");
	header("Expires: 0");

    $municipio=$_POST['mpio']?? '';
    $distrito_f=$_POST['distrito_federal']?? '';
    $distrito_l=$_POST['distrito_local']?? ''; 
    $seccion=$_POST['seccion']?? '';

		//$personas="SELECT * FROM manzanas_prioritarias WHERE 1=1 ";

		//$query="";

		//$query_muni ="";

		$query_df = " ";
		$query_muni = " ";
		$query_dl =" ";
		$query_df = " ";

		if (isset($municipio) && $municipio!="" ){
			$query_muni = " AND  mpio='$mpio' ";
		
		}else{
			$query_muni = " ";
		}	

		if(isset($distrito_l) && $distrito_l!=""){
			$query_dl = " AND distrito_local='$distrito_local'";
		}
		else{
			$query_mza =" ";
		}

		if (isset($distrito_f) && $distrito_f!=""){
			$query_df = " AND distrito_federal='$distrito_federal'";
		}else{
			$query_df = " ";
		}	

		if (isset($seccion) && $seccion!=""){
			$query_sec = " AND seccion='$seccion'";
		}else{
			$query_sec = " ";
		}	

		$personas = "SELECT * FROM personasmasiva WHERE id>=412494 ".$query_muni.$query_dl.$query_df.$query_sec;


		//echo $personas;


		/*if (empty($_POST['municipio']))
		{
			$muni = "SELECT * FROM manzanas_prioritarias AND manzana='$manzana' AND seccion='$seccion' or prior='$prior'";
		}
	
		else if (empty($_POST['distrito_f']))
		{
			$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and manzana='$manzana' and seccion='$seccion' or prior='$prior'";
		}
		
		else if(empty($_POST['manzana']))
		{
			$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and distrito_f='$distrito_f' and seccion='$seccion' or prior='$prior'";
		}
		else if(empty($_POST['seccion']))
		{
			$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and manzana='$manzana' and distrito_f='$distrito_f' or prior='$prior'";
		}
		else if(empty($_POST['prior']))
		{
			$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and manzana='$manzana' and seccion='$seccion' or distrito_f='$distrito_f'";
		}
		else{
			$personas="SELECT * FROM manzanas_prioritarias WHERE municipio='$municipio' and distrito_f='$distrito_f' and manzana='$manzana' and seccion='$seccion' or prior='$prior'";

		}*/
		
	

?>
<html lang="es">

	<head>
	<title>Hiza</title>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	</head>

	<body>
		
		<h2>Reporte Total de Estructura</h2>

		<section>
		
				<div class="datatable-container" >	
					<table class="table" >
						<tr>
                        <th>CLAVE</th>
                        <th>FOLIO</th>
                        <th>NOMBRE </th>
                        <th>PATERNO</th>
                        <th>MATERNO</th>
                        <th>D_L</th>
                        <th>D_F</th>
                        <th>SECCION</th>
                        <th>MUNICIPIO</th>
                        <th>SEXO</th>
                        <th>CALLE</th>
                        <th>NUM INT</th>
                        <th>NUM EXT</th>
                        <th>CARGO</th>
						</tr>
				
						<?php

						if ($res = mysqli_query($conexion, $personas)) {
							

						while ($row = mysqli_fetch_array($res)) {
						
						?>
						<form>
					
							<tr>
                                <td><?php echo $row['clave'];?></td>
								<td><?php echo $row['folio'];?></td>
                            	<td><?php echo $row['nombre'];?></td>
                            	<td><?php echo $row['paterno'];?></td>
                            	<td><?php echo $row['materno'];?></td>                        			
								<td><?php echo $row['distrito_local'];?></td>
								<td><?php echo $row['distrito_federal'];?></td>
								<td><?php echo $row['seccion'];?></td>
								<td><?php echo $row['mpio'];?></td>
								<td><?php echo $row['sexo'];?></td>
								<td><?php echo $row['calle'];?></td>
								<td><?php echo $row['v_int'];?></td>
								<td><?php echo $row['ext'];?></td>
								<td><?php echo $row['cargo'];?></td>
                                
                                
                                
						
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
