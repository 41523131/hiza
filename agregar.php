<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hiza</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styleGeneral.css">
     <link rel="icon" type="image/png" href="../img/icono.png" />

     <script src="//code.jquery.com/jquery-1.10.2.js"></script>



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                <div class="sidebar-brand-icon">
                    <img src="../img/image.png" id="logoimg" />
                </div>
                <div class="sidebar-brand-text mx-3">Hiza <sup>Admin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            

             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Información Básica</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="metasyprioridades.php">Metas y Prioridades</a>
                        <a class="collapse-item" href="clasificacion.php">Clasificación Competitiva</a>
                        <a class="collapse-item" href="manzanasprioritarias.php">Manzas Prioritarias</a>
                    </div>
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

    

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                     <i class="fas fa-fw fa-table"></i>
                    <span>Captura</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="simpatizante.php">Estructura</a>
                        <a class="collapse-item" href="agregarvtofamiliar.php">Voto Familiar</a>
                        
                        
                        <a class="collapse-item" href="reportes.php">RGs</a>
                        <a class="collapse-item" href="reportes.php">RCs</a>
                        
                    </div>
                </div>
            </li>


            

            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->
        

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                     <i class="fas fa-fw fa-table"></i>
                    <span>Reportes</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="reporteestructura.php">Estructura</a>
                        <a class="collapse-item" href="votored.php">Voto Familiar</a>
                        
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseParent"
                    aria-expanded="true" aria-controls="collapseParent">
                     <i class="fas fa-fw fa-table"></i>
                    <span>Toque de Puerta</span>
                </a>
                <div id="collapseParent" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="punteo.php">Punteo</a>
                        <a class="collapse-item" href="reportepuertas.php">Reporte</a>
                        
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->

            <li class="nav-item">
                <a class="nav-link" href="reportes.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>SIJE</span></a>
            </li>
            
            


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Esteban</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!--a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a-->
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Actividad
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Agregar Registro</h1>
                    </div>

                   <div class="row">

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-dark">Favor de verificar bien la informacionm registrada</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <form method="post" onsubmit="return validarAddReg()">
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label for="inputCve">Clave de elector</label>
                                              <input name="inputCve" type="text" class="form-control" id="inputCve" placeholder="Apoyese de la INE" required="required">
                                              <div class="invalidInput" id="msg"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="inputFolio">Folio</label>
                                              <input name="inputFolio" type="text" class="form-control" id="inputFolio" placeholder="" required="required">
                                              <div class="invalidInput" id="msg1"></div>
                                            </div>
                                          </div>
                                           <hr class="sidebar-divider">
                                          <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="inputNom">Nombre</label>
                                                <input name="inputNom"  type="text" class="form-control UpperCase" id="inputNom" placeholder="">
                                                <div class="invalidInput" id="msg2"></div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputPat">Apellido Paterno</label>
                                                <input name="inputPat"  type="text" class="form-control UpperCase" id="inputPat" placeholder="">
                                                <div class="invalidInput" id="msg3"></div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputMat">Apellido Materno</label>
                                                <input name="inputMat"  type="text" class="form-control UpperCase" id="inputMat" placeholder="">
                                                <div class="invalidInput" id="msg4"></div>
                                            </div>

                                            <div class="form-group col-md-3 text-center" >
                                                <label>Sexo</label>
                                                <br/>
                                                <input type="radio" name="sexo" value="H" id="sexo_h" >
                                                    Hombre
                                                <input type="radio" name="sexo" value="M" id="sexo_m">
                                                    Mujer
                                            </div>
                                          </div>

                                          <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label  for="inputSeccion">Seccion</label>
                                                    <select name="inputSeccion" id="inputSeccion" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                                                        <option selected></option>
                                                        <?php 
                                                            $conexion=mysqli_connect("localhost","root","","hiza");

                                                             $listaSecc=mysqli_query($conexion,"SELECT id inputSeccion, secc1 FROM seccion ")  or die (mysqli_error($listaSecc));
                                                               while ($listSe=mysqli_fetch_array($listaSecc)){
                                                                  echo '<option value="'.$listSe['inputSeccion'].'">'.$listSe[1].'</option>';
                                                              }

                                                        ?>                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputCalle">Calle</label>
                                                <input  name="inputCalle" type="text" class="form-control UpperCase" id="inputCalle">
                                                <div class="invalidInput" id="msg6"></div>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputManzana" id="autoUpdate">N. Exterior</label>
                                                <input name="inputManzana" type="text" class="form-control" id="inputManzana">
                                                <div class="invalidInput" id="msg7"></div>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputLote" id="autoUpdate2">N. Interior</label>
                                                <input name="inputLote" type="text" class="form-control" id="inputLote">
                                                <div class="invalidInput" id="msg8"></div>
                                            </div>
                                            <div class="form-group col-md-2 text-center">
                                                <label for="inputMaterno">Tipo</label>
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox"  name="tpoMnza" class="custom-control-input" id="customSwitch1">
                                                  <label  class="custom-control-label" for="customSwitch1">N. Int y Ext. o Mz.y Lt. </label>
                                                </div>
                                            </div>                        
                                               <div class="form-group col-md-3">
                                                    <label  for="inputColonia">Colonia</label>
                                                       <select id="inputColonia" name="inputColonia" class="form-control selectpicker">
                                                         <option selected></option>
                                                         
                                                      
                                                        </select>
                                                </div>

                                            </div>

                                             <div class="form-row">
                                                <div class="form-group col-md-2" >
                                                <label for="dtol2">Distrito local</label>
                                                        <select id="dtol2" name="dtol2" class="form-control selectpicker">
                                                         <option selected></option>
                                                         <?php


                                                            $lista=mysqli_query($conexion,"
                                                                SELECT id, distrito FROM distritos WHERE nombre ='DISTRITO LOCALES'")  or 
                                                            die (mysqli_error($conexion));

                                                            while ($list=mysqli_fetch_array($lista)){
                                                            echo '<option value="'.$list[0].'">'.$list[1].'</option>';
                                                          }
                                                        ?>
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label for="inputTelefono">Telefono</label>
                                              <input name="inputTelefono" type="text" class="form-control" id="inputTelefono">
                                              <div class="invalidInput" id="msg9"></div>
                                              
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label for="inputCelular">Celular</label>
                                              <input name="inputCelular" type="text" class="form-control" id="inputCelular">
                                              <div class="invalidInput" id="msg11"></div>
                                              
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label for="inputRecado">Telefono Recados</label>
                                              <input name="inputRecado" type="text" class="form-control" id="inputRecado">
                                              <div class="invalidInput" id="msg12"></div>
                                              
                                            </div>

                                             <div class="form-group col-md-4">
                                                    <label for="inputOcupacion">Ocupacion del integrante</label>
                                                    <br>
                                                    <select name="inputOcupacion" id="inputOcupacion"  class="custom-select" id="example-single-selected">
                                                    <option selected ></option>
                                                    <option value="1">Ama de Casa</option>
                                                    <option value="2">Campesino/Agricultor</option>
                                                    <option value="3">Ejidatario</option>
                                                    <option value="4">Empleado</option>
                                                    <option value="5">Empleado de Gobierno</option>
                                                    <option value="6">Empresario</option>
                                                    <option value="7">Estudiante</option>
                                                    <option value="8">Jubilado/Pensionado</option>
                                                    <option value="9">Obrero</option>
                                                    <option value="10">Profesionista libre/Freelance</option>                                
                                                    <option value="11">Trabajador por su cuenta</option>
                                                    <option value="12">Otro</option>
                                                </select>
                                                  
                                            </div>
                                          </div>


                                          <hr class="sidebar-divider">

                                          <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label  for="cargo">Cargo</label>
                                                <br>
                                                <select name="cargo" class="custom-select " id="cargo" onchange="oculta()">
                                                    <option value="0" selected></option>
                                                  
                                                    <?php 

                                                        $lista=mysqli_query($conexion,"
                                                                SELECT id, cargo FROM cargo ")  or 
                                                            die (mysqli_error($conexion));

                                                            while ($list=mysqli_fetch_array($lista)){
                                                            echo '<option value="'.$list[0].'">'.$list[1].'</option>';
                                                        }
                                                    ?> 
                                                </select>
                                            </div>


                                            <!--- Se oculta la zona ---->
                                                 <div class="form-group col-md-1" id="divzona" name="divzona">
                                                  <label for="zona">Zona</label>
                                                  <input name="zona" type="number" size="20" class="form-control" id="zona">
                                                </div>

                                            <!--- Se oculta seccion de trabajo ---->
                                            <!--div id="divsecc1" name="divsecc1"-->

                                            <div class="form-group col-md-2" id="divsecc1" name="divsecc1">
                                              <label for="secc1">Sección de Trabajo</label>
                                            
                                                <select name="secc1" id="secc1" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" onchange="showHint(this.value)">
                                                    <option selected></option>
                                                    <?php 
                                                        include 'classHiza.php';
                                                           $listaSecc=mysqli_query($conexion,"SELECT id, secc1 FROM seccion ")  or die (mysqli_error($listaSecc));
                                                               while ($listSe=mysqli_fetch_array($listaSecc)){
                                                                  echo '<option value="'.$listSe['id'].'">'.$listSe['secc1'].'</option>';
                                                              }

                                                        ?>   

                                                    ?>                                    
                                                </select>
                                            </div>

                                            <div class="form-group col-md-2" id="divsecc11">
                                              <label for="dtol1">Distrito Local</label>
                                               <select id="dtol1" name="dtol1" class="form-control selectpicker">

                                                <option selected></option>
                                                         <?php

                                                            $lista=mysqli_query($conexion,"
                                                                SELECT id, distrito FROM distritos WHERE nombre ='DISTRITO LOCALES' ")  or 
                                                            die (mysqli_error($conexion));

                                                            while ($list=mysqli_fetch_array($lista)){
                                                            echo '<option value="'.$list[0].'">'.$list[1].'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                            </div>

                                            <div class="form-group col-md-2" id="divsecc112">
                                              <label for="dtof1">Distrito Federal</label>
                                               <select id="dtof1" name="dtof1" class="form-control selectpicker">

                                                <option selected></option>
                                                         <?php

                                                            $lista=mysqli_query($conexion,"
                                                                SELECT id, distrito FROM distritos WHERE nombre ='DISTRITO FEDERALES' ")  or 
                                                            die (mysqli_error($conexion));

                                                            while ($list=mysqli_fetch_array($lista)){
                                                            echo '<option value="'.$list[0].'">'.$list[1].'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                            </div>

                                            <div class="form-group col-md-2" id="divsecc12">
                                              <label for="mpio1">Municipio</label>
                                               <input value="58" class="form-control"  type="text" id="mpio1" title="Municipio" disabled="disabled" / >
                                            </div>

                                          </div>

                                             <!--- Se oculta manzan de trabajo ---->
                                             <div class="form-row">
                                                <div class="form-group col-md-2" id="divmza1">
                                                    <label for="mza1" >Manzana asignada</label>
                                                    <input name="mza1" type="number" size="20" class="form-control" id="mza1" >
                                                </div>
                                            </div>

                                          <hr class="sidebar-divider">




                                          <div class="form-row">

                                            <div class="form-group col-md-3">
                                                <label for="inputCorreo">Correo Electronico</label>
                                                <input name="inputCorreo"  type="text" class="form-control custom-control-label validate toLowerCase" id="inputCorreo" aria-describedby="emailHelp" placeholder="example@gmail.com">
                                                <div class="invalidInput" id="msgd5"></div>
                                            </div>

                                            <div class="form-group col-md-9">
                                                <label>Seleccione las redes sociales con las que cuenta el integrante</label>

                                            <div class="form-row">        
                                                <div class="form-check col-md-3" style="padding-left: 3%; box-sizing: border-box;">  
                                                    <input class="form-check-input id-check" type="checkbox"  name="face" >
                                                  <input type="newquantity[]" class="myinput form-control" name="inputFace" disabled  placeholder="Facebook"
                                                  name="inputFace">
                                              </div>
                                                  <div class="form-check col-md-3" style="padding-left: 3%; box-sizing: border-box;">
                                                    <input class="form-check-input id-check" type="checkbox" name="whats" >
                                                    <input type="newquantity[]" class="myinput form-control" name="inputWhats" disabled  placeholder="Whatsapp" name="inputWhats">
                                                </div>

                                                <div class="form-check col-md-3" style="padding-left: 2%; box-sizing: border-box;">
                                                  <input class="form-check-input id-check" type="checkbox" name="twit">
                                                  <input type="newquantity[]" class="myinput form-control" name="inputTwit" disabled  placeholder="Twitter" name="inputTwit">
                                                </div>

                                                <div class="form-check col-md-3" style="padding-left: 2%; box-sizing: border-box;">
                                                    <input class="form-check-input id-check" type="checkbox"  name="ins"  >
                                                   <input type="newquantity[]" class="myinput form-control" name="inpuIns"disabled  placeholder="Instagram"
                                                   name="inputIns">
                                                </div>
                                            </div>
                                            </div>
                                            </div>


                                          <button type="submit" class="btn btn-primary" name="boton" value="Aceptar">Aceptar</button>
                                        </form>


                                        <?php
                                        if(isset($_REQUEST['boton'])){
                                                if ($_REQUEST['boton']=="Aceptar") {

                                                    $inputCve = $_REQUEST['inputCve'];

                                                    $inputFolio = $_REQUEST['inputFolio'];

                                                    $inputNom = $_REQUEST['inputNom'];

                                                    $inputPat = $_REQUEST['inputPat'];

                                                    $inputMat = $_REQUEST['inputMat'];

                                                    

                                                    if (isset($_REQUEST['sexo'])) {
                                                        $sexo = $_REQUEST['sexo'];
                                                    }
                                                    else{
                                                        $sexo = '';
                                                        
                                                    }

                                                    $inputCorreo = $_REQUEST['inputCorreo'];

                                                    $inputSeccion = $_REQUEST['inputSeccion'];

                                                    $inputCalle = $_REQUEST['inputCalle'];

                                                    $inputManzana = $_REQUEST['inputManzana'];

                                                    $inputLote = $_REQUEST['inputLote'];

                                                    


                                                    if (isset($_REQUEST['tpoMnza'])) {
                                                        $tpoMnza = 1;
                                                    }
                                                    else{
                                                        $tpoMnza =0;
                                                        
                                                    }
                                                    
                                                    $inputColonia = $_REQUEST['inputColonia'];

                                                    $dtol2 = $_REQUEST['dtol2'];

                                                    $inputTelefono = $_REQUEST['inputTelefono'];

                                                    $inputCelular  = $_REQUEST['inputCelular'];

                                                    $inputRecado  = $_REQUEST['inputRecado'];

                                                    $inputOcupacion = $_REQUEST['inputOcupacion'];

                                                    $cargo = $_REQUEST['cargo'];

                                                    $zona = $_REQUEST['zona'];

                                                    $secc1 = $_REQUEST['secc1'];

                                                    $dtol1 = $_REQUEST['dtol1'];

                                                    $dtof1 = $_REQUEST['dtof1'];

                                                    $mupio1 = 58;

                                                    $mza1= $_REQUEST['mza1'];


                                                    if(isset($_REQUEST['inputFace'])){
                                                        
                                                        $inputFace= $_REQUEST['inputFace'];

                                                    }
                                                    else{
                                                        $inputFace='';
                                                    }

                                                    if(isset($_REQUEST['inputWhats'])){
                                                        
                                                        $inputWhats= $_REQUEST['inputWhats'];

                                                    }
                                                    else{
                                                        $inputWhats='';
                                                    }

                                                    if(isset($_REQUEST['inputTwit'])){
                                                        
                                                        $inputTwit= $_REQUEST['inputTwit'];

                                                    }
                                                    else{
                                                        $inputTwit='';
                                                    }
                                                    if(isset($_REQUEST['inpuIns'])){
                                                        
                                                        $inpuIns= $_REQUEST['inpuIns'];

                                                    }
                                                    else{
                                                        $inpuIns='';
                                                    }

                                                    $mostrar=new hiza();
                                                    $mostrar->conexion();
                                                    $mostrar->insAgregar($inputCve, $inputFolio, $inputNom, $inputPat, $inputMat, $sexo, $inputCorreo, $inputSeccion, $inputCalle, $inputManzana, $inputLote, $tpoMnza, $inputColonia, $dtol2, $inputTelefono, $inputOcupacion, $cargo, $zona, $secc1, $dtol1, $mupio1, $mza1, $inputFace, $inputWhats, $inputTwit, $inpuIns, $inputCelular, $inputRecado, $dtof1);


                                                }
                                            }
                                        ?>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!--script src="../vendor/jquery/jquery.min.js"></script-->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
       <script type="text/javascript">
        $(document).ready(function(){
            $('#customSwitch1').change(function(){
            if(this.checked){
                document.getElementById("autoUpdate").innerHTML = "Manzana";

                document.getElementById("autoUpdate2").innerHTML = "Lote";
            }
            else{

                document.getElementById("autoUpdate").innerHTML = "N. Exterior";

                document.getElementById("autoUpdate2").innerHTML = "N. Interior";
            }
            });
            });
    </script>

    <script type="text/javascript">



        function oculta(){

          var cargo = document.getElementById("cargo").value;
          var zona = document.getElementById("divzona");
          var seccion1 = document.getElementById("divsecc1");
          var seccion11 = document.getElementById("divsecc11");
          var seccion13 = document.getElementById("divsecc112");
          var seccion12 = document.getElementById("divsecc12");
          var manzana = document.getElementById("divmza1");



          switch (cargo) {
              case '1':
                    zona.style.display = "inline";
                    seccion1.style.display = "none";
                    seccion11.style.display = "none";
                    seccion13.style.display = "none";
                    seccion12.style.display = "none";
                    manzana.style.display = "none";
                break;
              case '2':
                    zona.style.display = "none";
                    seccion1.style.display = "inline";
                    seccion11.style.display = "inline";
                    seccion13.style.display = "inline";
                    seccion12.style.display = "inline";
                    manzana.style.display = "none";
                break;
              case '3':
                    zona.style.display = "none";
                    seccion1.style.display = "inline";
                    seccion11.style.display = "inline";
                    seccion13.style.display = "inline";
                    seccion12.style.display = "inline";
                    manzana.style.display = "inline";
                break;
              case '4':
                    zona.style.display = "none";
                    seccion1.style.display = "inline";
                    seccion11.style.display = "inline";
                    seccion13.style.display = "inline";
                    seccion12.style.display = "inline";
                    manzana.style.display = "inline";
                break;
                case '5':
                    zona.style.display = "none";
                    seccion1.style.display = "none";
                    seccion11.style.display = "none";
                    seccion13.style.display = "none";
                    seccion12.style.display = "none";
                    manzana.style.display = "none";
                break;
              default:
                    zona.style.display = "inline";
                    seccion1.style.display = "inline";
                    seccion11.style.display = "inline";
                    seccion13.style.display = "inline";
                    seccion12.style.display = "inline";
                    manzana.style.display = "none";
            }



        }

    </script>

    <script type="text/javascript">
        $('.id-check').change(function() {
          if ($(this).is(':checked') == false) {
            $(this).closest('div').find('.myinput').val('').prop('disabled', true);
          } else {
            $(this).closest('div').find('.myinput').val('').prop('disabled', false);
          }
        });
    </script>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script type="text/javascript">
        
         


         //se utilizan expresiones regulares para cada campo del formulario del docente 

        var validaNombred=function(nombred){
            var patron=/^(?!\s)+^([A-ZÁÉÍÓÚÑ]+[\s]*)+$/;
            if (patron.test(nombred)) {
                return true;
            } else{
                return false;
            }
        }

        /*var validaCalle=function(calle){
            var patron=/^(?!\s)+^([A-ZÁÉÍÓÚÑ]+[0-9]+[\s]*)+$/;
            if (patron.test(calle)) {
                return true;
            } else{
                return false;
            }
        }*/

        var validaMnza=function(mnza){
            var patron=/^(?!\s)+([0-9]){0,8}$/;
            if (patron.test(mnza)) {
                return true;
            } else{
                return false;
            }
        }

        var validaTelefono=function(telef){
            var patron=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            if (patron.test(telef)) {
                return true;
            } else{
                return false;
            }
        }

        ///^[9|6]{1}([\d]{2}[-]*){3}[\d]{2}$/

        var validaFolio=function(foliod){
            var patron=/^(?!\s)+([0-9]){9,18}$/;
            if (patron.test(foliod)) {
                return true;
            } else{
                return false;
            }
        }

        var validaCve = function(cveelector){
            var patron = /[A-Z]{6}\d{8}[HM]\d{3}/;
            if (patron.test(cveelector)) {
                return true;
            } else{
                return false;
            }
        }

        var validaCorreod=function(correod){
            var patron=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i ;
            if (patron.test(correod)) {
                return true;
            } else{
                return false;
            }
        }

        function validarAddReg(){

            //utilizamos la funcion para que no se puedan dejar espacios en blanco 

            var inputNom = document.getElementById("inputNom").value.trim();
            var inputPat = document.getElementById("inputPat").value.trim();
            var inputMat = document.getElementById("inputMat").value.trim();
            //var inputCalle = document.getElementById("inputCalle").value.trim();
            var inputManzana = document.getElementById("inputManzana").value.trim();
            var inputLote = document.getElementById("inputLote").value.trim();
            var inputTelefono = document.getElementById("inputTelefono").value.trim();
            var inputFolio = document.getElementById("inputFolio").value.trim();
            var inputCve = document.getElementById("inputCve").value.trim();
            var inputCorreo = document.getElementById("inputCorreo").value.trim();
            var divzona = document.getElementById("divzona").value.trim();

            
            var inputCelular = document.getElementById("inputCelular").value.trim();
            var inputRecado = document.getElementById("inputRecado}").value.trim();

            

            //var indice = document.getElementById("grupod").selectedIndex;
            var texto="";


            if (inputNom == ""){
                texto = "Debe ingresar su nombre";
                document.getElementById("msg2").innerHTML=texto;
                return false;
            }
            if(!validaNombred(inputNom)){
                document.getElementById("msg2").innerHTML="Ingrese su nombre";
                return false;
            }
            
            /********/

            if (inputPat == ""){
                texto = "Debe ingresar un apelldio paterno";
                document.getElementById("msg3").innerHTML=texto;
                return false;
            }
            if(!validaNombred(inputPat)){
                document.getElementById("msg3").innerHTML="Debe ingresar un apelldio paterno";
                return false;
            }
            if(!validaNombred(inputMat)){
                document.getElementById("msg4").innerHTML="Debe ingresar un apelldio materno";
                return false;
            }


            /******/


           
            /*if(!validaCalle(inputCalle) && !isset(inputCalle)){
                document.getElementById("msg6").innerHTML="Verifique la calle";
                return false;
            }*/

            /*********/


            /**********/
            if(!validaMnza(inputManzana)){
                document.getElementById("msg7").innerHTML="Debe ingresar num ext o mnza correcto";
                return false;
            }
            if(!validaMnza(inputLote)){
                document.getElementById("msg8").innerHTML="Debe ingresar num int o lote correcto";
                return false;
            }

            if (inputTelefono == ""){
                texto = "Debe ingrese su telefono";
                document.getElementById("msg9").innerHTML=texto;
                return false;
            }
            if(!validaTelefono(inputTelefono)){
                document.getElementById("msg9").innerHTML="Ingrese su telefono";
                return false;
            }

             /****************/

             if(!validaTelefono(inputCelular) && !isset(inputCelular)){
                document.getElementById("msg11").innerHTML="Verifique su celular";
                return false;
            }
            if(!validaTelefono(inputRecado) && !isset(inputRecado)){
                document.getElementById("msg12").innerHTML="Verifique telefono recados";
                return false;
            }

            if (inputCve == ""){
                texto = "Debe de escribir una clave de elector";
                document.getElementById("msg").innerHTML=texto;
                return false;
            }
            if(!validaCve(inputCve)){
                document.getElementById("msg").innerHTML="La clave debe contener 18 caracteres (AAAAAA00000000A000)";
                return false;
            }

            /*************/

            if (inputCorreo == ""){
                texto = "Debe de escribir un correo";
                document.getElementById("msgd5").innerHTML=texto;
                return false;
            }
            if(!validaCorreod(inputCorreo)){
                document.getElementById("msgd5").innerHTML="Verifique el correo";
                return false;
            }


            return true;
            }


            //////////////////////////////////////////////////////////////////////////////////////////
            //se utiliza para que al momento de seleccionar un campo se borre su contenido


            document.getElementById("inputNom").addEventListener("focus",function(){
                document.getElementById("msg2").innerHTML="";
                document.getElementById("inputNom").value="";
            },true);

            document.getElementById("inputPat").addEventListener("focus",function(){
                document.getElementById("msg3").innerHTML="";
                document.getElementById("inputPat").value="";
            },true);

            document.getElementById("inputMat").addEventListener("focus",function(){
                document.getElementById("msg4").innerHTML="";
                document.getElementById("inputMat").value="";
            },true);

            /*document.getElementById("inputCalle").addEventListener("focus",function(){
                document.getElementById("msg6").innerHTML="";
                document.getElementById("inputCalle").value="";
            },true);*/

            document.getElementById("inputTelefono").addEventListener("focus",function(){
                document.getElementById("msg9").innerHTML="";
                document.getElementById("inputTelefono").value="";
            },true);

            document.getElementById("inputManzana").addEventListener("focus",function(){
                document.getElementById("msg7").innerHTML="";
                document.getElementById("inputManzana").value="";
            },true);
            document.getElementById("inputLote").addEventListener("focus",function(){
                document.getElementById("msg8").innerHTML="";
                document.getElementById("inputLote").value="";
            },true);



            document.getElementById("inputCelular").addEventListener("focus",function(){
                document.getElementById("msg11").innerHTML="";
                document.getElementById("inputCelular").value="";
            },true);



            document.getElementById("inputRecado").addEventListener("focus",function(){
                document.getElementById("msg12").innerHTML="";
                document.getElementById("inputRecado").value="";
            },true);






            /***************/



            document.getElementById("inputFolio").addEventListener("focus",function(){
                document.getElementById("msg1").innerHTML="";
                document.getElementById("inputFolio").value="";
            },true);

            document.getElementById("inputCve").addEventListener("focus",function(){
                document.getElementById("msg").innerHTML="";
                document.getElementById("inputCve").value="";
            },true);

            /***********/

            document.getElementById("inputCorreo").addEventListener("focus",function(){
                document.getElementById("msgd5").innerHTML="";
                document.getElementById("inputCorreo").value="";
            },true);

            /////////////////////////////////////////////////////////////////////////////////////////
            //se utiliza para verificar que la expresion regular sea correcta 




            document.getElementById("inputNom").addEventListener("blur",function(){
            txtinputNom = document.getElementById("inputNom").value.trim();
            if (!validaNombred(txtinputNom)) {
                document.getElementById("msg2").innerHTML="Ingrese nombre valido";
                return false;
                }},false);

            document.getElementById("inputPat").addEventListener("blur",function(){
            txtinputPat = document.getElementById("inputPat").value.trim();
            if (!validaNombred(txtinputPat)) {
                document.getElementById("msg3").innerHTML="Ingrese apellido valido";
                return false;
                }},false);

            document.getElementById("inputMat").addEventListener("blur",function(){
            txtinputMat = document.getElementById("inputMat").value.trim();
            if (!validaNombred(txtinputMat)) {
                if(txtinputMat!="" || isset(txtinputMat)){
                    document.getElementById("msg4").innerHTML="Ingrese materno valido";
                    return false;
                }
                }},false);

            /*document.getElementById("inputCalle").addEventListener("blur",function(){
                        txtinputCalle = document.getElementById("inputCalle").value.trim();
                        if (!validaCalle(txtinputCalle)) {
                            if(txtinputCalle!="" || isset(txtinputCalle)){
                                document.getElementById("msg6").innerHTML="Ingrese calle correcta";
                                return false;
                            }
                        }},false);*/

            document.getElementById("inputManzana").addEventListener("blur",function(){
                        txtinputManzana = document.getElementById("inputManzana").value.trim();
                        if (!validaMnza(txtinputManzana)) {
                            if(txtinputManzana!="" || isset(txtinputManzana)){
                                document.getElementById("msg7").innerHTML="Num ext o mnza incorrecto";
                                return false;
                            }
                        }},false);


            document.getElementById("inputLote").addEventListener("blur",function(){
                        txtinputLote = document.getElementById("inputLote").value.trim();
                        if (!validaMnza(txtinputLote)) {
                            if(txtinputLote!="" || isset(txtinputLote)){
                                document.getElementById("msg8").innerHTML="Num int o lte incorrecto";
                                return false;
                            }
                        }},false);

            document.getElementById("inputPat").addEventListener("blur",function(){
            txtinputPat = document.getElementById("inputPat").value.trim();
            if (!validaNombred(txtinputPat)) {
                document.getElementById("msg3").innerHTML="Ingrese apellido valido";
                return false;
                }},false);


            document.getElementById("inputTelefono").addEventListener("blur",function(){
            txtinputTelefono = document.getElementById("inputTelefono").value.trim();
            if (!validaTelefono(txtinputTelefono)) {

                    document.getElementById("msg9").innerHTML="Telefono con formato incorrecto";
                    return false;

                }},false);

                 document.getElementById("inputCelular").addEventListener("blur",function(){
            txtinputCelular = document.getElementById("inputCelular").value.trim();
            if (!validaTelefono(txtinputCelular)) {
                if(txtinputCelular!="" || isset(txtinputCelular)){
                    document.getElementById("msg11").innerHTML="Celular con formato incorrecto";
                    return false;
                }
                }},false);

                document.getElementById("inputRecado").addEventListener("blur",function(){
            txtinputRecado = document.getElementById("inputRecado").value.trim();
            if (!validaTelefono(txtinputRecado)) {
                if(txtinputRecado!="" || isset(txtinputRecado)){
                    document.getElementById("msg12").innerHTML="Telefono Recado con formato incorrecto";
                    return false;
                }
                }},false);




 document.getElementById("inputFolio").addEventListener("blur",function(){
            txtinputFolio = document.getElementById("inputFolio").value.trim();
            if (!validaFolio(txtinputFolio)) {
                if(txtinputFolio!="" || isset(txtinputFolio)){

                    document.getElementById("msg1").innerHTML="El folio debe contener entre 9 a 18 dígitos";
                    return false;

                }
                }},false);
            /*********/

            document.getElementById("inputCve").addEventListener("blur",function(){
            txtcinputCve = document.getElementById("inputCve").value.trim();
            if (!validaCve(txtcinputCve)) {
                document.getElementById("msg").innerHTML="La clave debe contener 18 caracteres (AAAAAA00000000A000)";
                return false;
                }},false);

            /*********/                

            document.getElementById("inputCorreo").addEventListener("blur",function(){
            txtcorreod= document.getElementById("inputCorreo").value.trim();
            if (!validaCorreod(txtcorreod)) {
                document.getElementById("msgd5").innerHTML="Verifique el correo";
                return false;
                }},false);

    </script>

    <script type="text/javascript">
        $(document).ready( function () {
         $(".UpperCase").on("keypress", function () {
          $input=$(this);
          setTimeout(function () {
           $input.val($input.val().toUpperCase());
          },50);
         })
        })
    </script>

    <script type="text/javascript">
        $(document).ready( function () {
         $(".toLowerCase").on("keypress", function () {
          $input=$(this);
          setTimeout(function () {
           $input.val($input.val().toLowerCase());
          },50);
         })
        })
    </script>

    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>

    <script>
        
       $(document).ready(function(){
    
        var colonia = $('#inputColonia');
       
        $('#inputSeccion').change(function(){
          var inputSeccion = $(this).val();        

            $.ajax({
              data: {inputSeccion:inputSeccion}, 
              dataType: 'html', 
              type: 'POST', 
              url: 'getColonias.php', 

              }).done(function(data){   
                colonia.html(data);       
              });      
            
        });

    });
    </script>

</body>

</html>