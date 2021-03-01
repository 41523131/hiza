<?php

class hiza{
	private $conn;


	function conexion(){
		$con=mysqli_connect("localhost","root","","hiza") or
		die("Problemas con la conexion");
		$this->conn=$con;		
	}


	function login($name,$pass){
		session_start();
		if(isset($name) && isset($pass)){
				$query ="SELECT * FROM login WHERE email='$name' and password='$pass'";
				$res= mysqli_query ($this->conn,$query);

				$row=mysqli_fetch_array($res);
				if($row==true){
					$rol=$row[3];
					$_SESSION['rol']=$rol;
					switch($_SESSION['rol']){
						case 1:
							header('location: admin.php');
						break;
				
						case 2:
							header('location: inicioBuscar.php');
						break;
						default:
					 }
				}else{
					echo "
					<div class='alert alert-warning alert-dismissible fade show' role='alert'>
						  <strong>Usuario o contraseña erroneos</strong> <br>Favor de verificar su usuario o contraseña
						  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						    <span aria-hidden='true'>&times;</span>
						  </button>
						</div>";
				}
			echo '</select>';
				
		}
	}

	function insAgregar($inputCve, $inputFolio, $inputNom, $inputPat, $inputMat, $sexo, $inputCorreo, $inputSeccion, $inputCalle, $inputManzana, $inputLote, $tpoMnza, $inputColonia, $dtol2, $inputTelefono, $inputOcupacion, $cargo, $zona, $secc1, $dtol1, $mupio1, $mza1, $inputFace, $inputWhats, $inputTwit, $inpuIns, $inputCelular, $inputRecado, $dtof1){



			

	          	
		$reg_cve=mysqli_query($this->conn,"SELECT COUNT(1) reg_cve FROM personasmasiva WHERE clave = '$inputCve'  ")  or 
	  	die (mysqli_error($this->conn));

	  	 if ($reg_clave = mysqli_fetch_array($reg_cve)){

            $cveVal = $reg_clave['reg_cve'];
         }

	  	$reg_folio=mysqli_query($this->conn,"SELECT COUNT(1) reg_folio FROM personasmasiva WHERE folio = '$inputFolio'")  or 
	  	die (mysqli_error($this->conn));

	  	if ($reg_fol= mysqli_fetch_array($reg_folio)){

            $folioVal = $reg_fol['reg_folio'];
         }


         if($cveVal==0 && $folioVal==0){
         	mysqli_query($this->conn,"INSERT INTO personasmasiva(clave, nombre, paterno, materno, sexo, calle, v_int, ext, colonia, dtto, mpio, seccion, folio, tpoMnza, correo, distrito_local, ocupacion, seccion_trabajo, cargo, zona, manzana_asignada, redsocial_f, redsocial_w, redsocial_t, redsocial_i, telefono, t_celular, t_recados, distrito_federal) VALUES ('$inputCve','$inputNom', '$inputPat', '$inputMat','$sexo','$inputCalle', '$inputLote','$inputManzana', '$inputColonia', '$dtol2','$mpio1', '$inputSeccion', '$inputFolio',$tpoMnza , '$inputCorreo', '$dtol1','$inputOcupacion','$secc1', '$cargo','$zona','$mza1', '$inputFace', '$inputWhats', '$inputTwit','$inpuIns', $inputTelefono, '$inputCelular', '$inputRecado', '$dtof1')")
				or die("Problemas en el insert ".mysqli_error($this->conn));

				echo"<script type='text/javascript'>
	          	alert('Registro Agregado');
	          	window.location='simpatizante.php'
	          	</script>";

         }
         else{
         	if($cveVal>0 && $folioVal==0){
				echo"<script type='text/javascript'>
	          	alert('Clave de Elector ya registrada');
	          	window.location='simpatizante.php'
	          	</script>";
         	}
         	elseif ($cveVal==0 && $folioVal>0) {
         		echo"<script type='text/javascript'>
	          	alert('Folio ya registrada');
	          	window.location='simpatizante.php'
	          	</script>";
         	}
         	else{
         		echo"<script type='text/javascript'>
	          	alert('Clave de Elector y Folio ya registrado');
	          	window.location='simpatizante.php'
	          	</script>";
         	}
         }
	  	
	
	}

	function actRegistro($idPersona,$inputCve, $inputFolio, $inputNom, $inputPat, $inputMat, $sexo, $inputCorreo, $inputSeccion, $inputCalle, $inputManzana, $inputLote, $tpoMnza, $inputColonia, $dtol2, $inputTelefono, $inputOcupacion, $cargo, $zona, $secc1, $dtol1, $mupio1, $mza1, $inputFace, $inputWhats, $inputTwit, $inpuIns,$inputCelular, $inputRecado, $dtof1){



			



         	mysqli_query($this->conn,"UPDATE personasmasiva
										SET nombre	=	'$inputNom',
										paterno	=	 '$inputPat',
										materno	=	 '$inputMat',
										sexo	=	 '$sexo',
										calle	=	'$inputCalle',
										v_int	=	 '$inputLote',
										ext	=	 '$inputManzana',
										colonia	=	 '$inputColonia',
										dtto	=	 '$dtol2',
										mpio	=	 '$mupio1',
										seccion	=	 '$inputSeccion',
										tpoMnza	=	 $tpoMnza ,
										correo	=	 '$inputCorreo',
										distrito_local	=	 '$dtol1',
										ocupacion	=	 '$inputOcupacion',
										seccion_trabajo	=	'$secc1',
										cargo	=	 '$cargo',
										zona	=	 '$zona',
										manzana_asignada	=	'$mza1',
										redsocial_f	=	 '$inputFace',
										redsocial_w	=	 '$inputWhats',
										redsocial_t	=	 '$inputTwit',
										redsocial_i	=	 '$inpuIns',
										telefono	=	 $inputTelefono,
										folio 		=    '$inputFolio',
										t_celular	= '$inputCelular',
										t_recados   = '$inputRecado',
										distrito_federal = '$dtof1'
										WHERE id = $idPersona")
				or die("Problemas en el insert ".mysqli_error($this->conn));

				echo"<script type='text/javascript'>
	          	alert('Registro actualizado');
	          	window.location='simpatizante.php'
	          	</script>";

         
	  	
	
	}



	function listaCargo(){
		$lista=mysqli_query($this->conn,"
			SELECT id, cargo FROM cargo ")  or 
	  	die (mysqli_error($this->conn));

	  	//echo '<select class="custom-select " id="inlineFormCustomSelectPref"> <option selected></option>';
	  	while ($list=mysqli_fetch_array($lista)){
	  		echo '<option data-tokens="'.$list[0].'">'.$list[1].'</option>';
	  	}
	  	//echo '</select>';

	}
	function listaSecciones(){
		$lista=mysqli_query($this->conn,"
			SELECT id, secc1 FROM seccion ")  or 
	  	die (mysqli_error($this->conn));

	  	//echo '<select class="custom-select " id="inlineFormCustomSelectPref"> <option selected></option>';
	  	while ($list=mysqli_fetch_array($lista)){
	  		echo '<option value="'.$list[0].'">'.$list[1].'</option>';
	  	}
	  	//echo '</select>';

	}
	function listaColonia(){
		$lista=mysqli_query($this->conn,"
			SELECT idColonia, nombreColonia FROM seccion s, colonia c WHERE idSeccion = s.id")  or 
	  	die (mysqli_error($this->conn));

	  	//echo '<select class="custom-select " id="inlineFormCustomSelectPref"> <option selected></option>';
	  	while ($list=mysqli_fetch_array($lista)){
	  		echo '<option value="'.$list[0].'">'.$list[1].'</option>';
	  	}
	  	//echo '</select>';

	}
	function tablaPrincipal($aKeyword){





		$registro=mysqli_query($this->conn,"
			SELECT  id, clave, folio, paterno, materno, nombre, colonia, calle, v_int, ext, seccion FROM personasmasiva  ")  or 
	  	die (mysqli_error($this->conn));
	  
	  	//echo '<table class="table table-bordered no-seleccionable" id="dataTable" width="100%" cellspacing="0"  >';
	  	echo '<table class="table table-bordered bordered table-striped table-condensed datatable no-seleccionable" ui-jq="dataTable" ui-options="dataTableOpt" id="dataTable" width="100%" cellspacing="0" >';
	  	echo '<thead>
	  			<tr>
	  			<th style="text-align: center; "><em class="fa fa-cog"></em></th>
                	<th>CLAVE DE ELECTOR</th>
                    <th>FOLIO</th>
                    <th>NOMBRE COMPLETO</th>
                    <th>DIRECCION</th>
                    <th>SECCION</th>
                </tr>
            </thead>
            <tfoot>
            	<tr>
	  			<th style="text-align: center; "><em class="fa fa-cog"></em></th>
                	<th>CLAVE DE ELECTOR</th>
                    <th>FOLIO</th>
                    <th>NOMBRE COMPLETO</th>
                    <th>DIRECCION</th>
                    <th>SECCION</th>
                </tr>
            </tfoot>
            <tbody>';
	  	while ($reg=mysqli_fetch_array($registro))
	  		{
			echo '<tr>';
			/*echo '<a href="#" class="btn btn-warning btn-icon-split">
					<span class="icon text-white-30">
                    	<i class="fas fa-exclamation-triangle"></i>
                    </span>
                    <span class="text">Modificar</span>
                 </a>';*/
            echo '<td align="center">
                              <a href="actualiza.php?id_registro='.$reg['0'].'"  data-placement="top" data-toggle="tooltip" title="Modificar" class="btn persA btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
								</svg>
                              </a>
                              <!--a class="btn persM" data-placement="top" data-toggle="tooltip" title="Desactivar"><em class="fa fa-trash"></em></a--!>
                            </td>';     
			echo '<td>';
			echo $reg['clave'];
			echo '</td>';
			echo '<td>';
			echo $reg['folio'];
			echo '</td>';
			echo '<td>';
			echo $reg['paterno'].' '.$reg['materno'].' '.$reg['nombre'];
			echo '</td>';
			echo '<td>';
			if($reg['colonia']==null || $reg['colonia']==''){
				$colonia = '';
			}
			else{
				$colonia =', '.$reg['colonia'];	
			}
			echo $reg['calle'].' '.$reg['ext'].' '.$reg['v_int'].$colonia;
			echo '</td>';
			echo '<td>';
			echo $reg['seccion'];
			echo '</td>';
			echo "</tr>";
		}
	  	echo '</tbody>
	  	</table>';
	}
}

?>