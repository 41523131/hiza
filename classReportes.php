<?php

class hiza{
	private $conn;


	function conexion(){
		$con=mysqli_connect("localhost","root","","hiza") or
		die("Problemas con la conexion");
		$this->conn=$con;		
	}

	function generarExcel() {

			echo "OK";
		
    	
	}


	function tablaMetasPrioridades($municipio, $distrito_f, $distrito_l){

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

		$registro=mysqli_query($this->conn,$personas)  or 
	  	die (mysqli_error($this->conn));

	  	$tablaDatos = '<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="m-0 font-weight-bold text-dark"></h6>

                                        </div>
                                        <div class="col">
                                            
                                        </div>
                                        <div class="col floatStyle" >
                                        <a class="btn btn btn-success btn-icon-split" type="submit" href="reporte.php?municipio='.$municipio.'&distrito_f='.$distrito_f.'&distrito_l='.$distrito_l.'">
			        						<span class="icon text-white-50">
			                                	<i class="fas fa-check"></i>
			                                </span>
			                                <span class="text">Generar Reporte</span>
			                            </a>
                                    </div>
                                    </div> 
                                </div>
							<div class="card-body">
							<div class="table-responsive">
        					<table class="table table-bordered bordered table-striped table-condensed datatable no-seleccionable " ui-jq="dataTable" ui-options="dataTableOpt" id="dataTable" width="100%" cellspacing="0" >
                                            <thead>
                                                <tr>
                                                   <th>Entidad</th>
							                        <th>Distrito Federal</th>
							                        <th>Distrito Local</th>
							                        <th>Cabecera </th>
							                        <th>Municipio</th>
							                        <th>Seccion</th>
							                        <th>LN</th>
							                        <th>Ambito</th>
							                        <th>Meta</th>
							                        <th>PRIO</th>
							                        <th>Esperada PRI</th>
							                        <th>Esperada PRD</th>
							                        <th>Esperada PT</th>
							                        <th>Esperada PVEM</th>
							                        <th>Esperada MC</th>
							                        <th>Esperada MORENA</th>
							                        <th>Esperada OTROS</th>
							                        <th>Esperada MORENA en Coalicion</th>
													<th>Esperada PAN en Coalicion</th>
                                                </tr>
                                            </thead>
                            				<tfoot>
                                                <tr>
                                                   <th>Entidad</th>
							                        <th>Distrito Federal</th>
							                        <th>Distrito Local</th>
							                        <th>Cabecera </th>
							                        <th>Municipio</th>
							                        <th>Seccion</th>
							                        <th>LN</th>
							                        <th>Ambito</th>
							                        <th>Meta</th>
							                        <th>PRIO</th>
							                        <th>Esperada PRI</th>
							                        <th>Esperada PRD</th>
							                        <th>Esperada PT</th>
							                        <th>Esperada PVEM</th>
							                        <th>Esperada MC</th>
							                        <th>Esperada MORENA</th>
							                        <th>Esperada OTROS</th>
							                        <th>Esperada MORENA en Coalicion</th>
													<th>Esperada PAN en Coalicion</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>';                                          
	  	while ($row=mysqli_fetch_array($registro)){
	  		$tablaDatos .='<tr>';
	  		$tablaDatos .='<td>'.$row['entidad'].'</td>';
			$tablaDatos .='<td>'.$row['distrito_f'].'</td>';
			$tablaDatos .='<td>'.$row['distrito_l'].'</td>';
			$tablaDatos .='<td>'.$row['cabecera'].'</td>';
			$tablaDatos .='<td>'.$row['municipio'].'</td>';
			$tablaDatos .= '<td>'.$row['seccion'].'</td>';
			$tablaDatos .= '<td>'.$row['ln'].'</td>';
			$tablaDatos .= '<td>'.$row['ambito'].'</td>';
			$tablaDatos .= '<td>'.$row['meta'].'</td>';
			$tablaDatos .= '<td>'.$row['prio'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_pri'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_prd'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_pt'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_pvem'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_mc'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_morena'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_otros'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_morena_coalicion'].'</td>';
			$tablaDatos .= '<td>'.$row['esp_pan_coalicion'].'</td>';
	  		$tablaDatos .= '</tr>';

	  	}
	  	$tablaDatos.= '</tbody>
	  	</table>
        </div>
        </div>
        </div>';


        echo $tablaDatos;

	}
	
	function tablaClasificacion($municipio, $distrito_f, $distrito_l){

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

		$registro=mysqli_query($this->conn,$personas)  or 
	  	die (mysqli_error($this->conn));

	  	$tablaDatos = '<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="m-0 font-weight-bold text-dark"></h6>

                                        </div>
                                        <div class="col">
                                            
                                        </div>
                                        <div class="col floatStyle" >
                                        <a class="btn btn btn-success btn-icon-split" type="submit" href="reporte1.php?municipio='.$municipio.'&distrito_f='.$distrito_f.'&distrito_l='.$distrito_l.'">
			        						<span class="icon text-white-50">
			                                	<i class="fas fa-check"></i>
			                                </span>
			                                <span class="text">Generar Reporte</span>
			                            </a>
                                    </div>
                                    </div> 
                                </div>
							<div class="card-body">
							<div class="table-responsive">
        					<table class="table table-bordered bordered table-striped table-condensed datatable no-seleccionable " ui-jq="dataTable" ui-options="dataTableOpt" id="dataTable" width="100%" cellspacing="0" >
                                            <thead>
                                                <tr>
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
                                                </tr>
                                            </thead>
                            				<tfoot>
                                                <tr>
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
                                                </tr>
                                            </tfoot>
                                            <tbody>';                                          
	  	while ($row=mysqli_fetch_array($registro)){
	  		$tablaDatos .='<tr>';
	  		$tablaDatos .='<td>'.$row['entidad'].'</td>';
			$tablaDatos .='<td>'.$row['distrito_f'].'</td>';
			$tablaDatos .='<td>'.$row['distrito_l'].'</td>';
			$tablaDatos .='<td>'.$row['cabecera'].'</td>';
			$tablaDatos .='<td>'.$row['municipio'].'</td>';
			$tablaDatos .= '<td>'.$row['seccion'].'</td>';
			$tablaDatos .= '<td>'.$row['ln'].'</td>';
			$tablaDatos .= '<td>'.$row['ambito'].'</td>';
			$tablaDatos .= '<td>'.$row['pri'].'</td>';
			$tablaDatos .= '<td>'.$row['morena'].'</td>';
			$tablaDatos .= '<td>'.$row['morena_coalicion'].'</td>';
	  		$tablaDatos .= '</tr>';

	  	}
	  	$tablaDatos.= '</tbody>
	  	</table>
        </div>
        </div>
        </div>';


        echo $tablaDatos;

	}
	
	function tablaManzanas($municipio, $distrito_f, $seccion, $prior){

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

		$registro=mysqli_query($this->conn,$personas)  or 
	  	die (mysqli_error($this->conn));

	  	$tablaDatos = '<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="m-0 font-weight-bold text-dark"></h6>

                                        </div>
                                        <div class="col">
                                            
                                        </div>
                                        <div class="col floatStyle" >
                                        <a class="btn btn btn-success btn-icon-split" type="submit" href="reporte2.php?municipio='.$municipio.'&distrito_f='.$distrito_f.'&seccion='.$seccion.'&prior='.$prior.'">
			        						<span class="icon text-white-50">
			                                	<i class="fas fa-check"></i>
			                                </span>
			                                <span class="text">Generar Reporte</span>
			                            </a>
                                    </div>
                                    </div> 
                                </div>
							<div class="card-body">
							<div class="table-responsive">
        					<table class="table table-bordered bordered table-striped table-condensed datatable no-seleccionable " ui-jq="dataTable" ui-options="dataTableOpt" id="dataTable" width="100%" cellspacing="0" >
                                            <thead>
                                                <tr>
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
                                                </tr>
                                            </thead>
                            				<tfoot>
                                                <tr>
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
                                                </tr>
                                            </tfoot>
                                            <tbody>';                                          
	  	while ($row=mysqli_fetch_array($registro)){
	  		$tablaDatos .='<tr>';
	  		$tablaDatos .='<td>'.$row['ENTIDAD'].'</td>';
			$tablaDatos .='<td>'.$row['distrito_f'].'</td>';
			$tablaDatos .='<td>'.$row['DISTRITO_LOCAL'].'</td>';
			$tablaDatos .='<td>'.$row['municipio'].'</td>';
			$tablaDatos .= '<td>'.$row['LOCALIDAD'].'</td>';
			$tablaDatos .= '<td>'.$row['seccion'].'</td>';
			$tablaDatos .= '<td>'.$row['manzana'].'</td>';
			$tablaDatos .= '<td>'.$row['LISTA_HOMBRES'].'</td>';
			$tablaDatos .= '<td>'.$row['LISTA_MUJERES'].'</td>';
			$tablaDatos .= '<td>'.$row['LISTA'].'</td>';
			$tablaDatos .= '<td>'.$row['ACUM'].'</td>';
			$tablaDatos .= '<td>'.$row['prior'].'</td>';
	  		$tablaDatos .= '</tr>';

	  	}
	  	$tablaDatos.= '</tbody>
	  	</table>
        </div>
        </div>
        </div>';


        echo $tablaDatos;

	}






}

?>