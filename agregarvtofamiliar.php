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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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


            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->

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
                                            <div class="form-group col-md-2">
                                              <label for="inputCve">Responsable de red</label>
                                              <input name="inputCve" type="text" class="form-control" id="inputCve" placeholder="" required="required">
                                              
                                            </div>

                                            <div class="form-group col-md-4">
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
                                                <input name="inputNom"  type="text" class="form-control" id="inputNom" placeholder="">
                                                <div class="invalidInput" id="msg2"></div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputPat">Apellido Paterno</label>
                                                <input name="inputPat"  type="text" class="form-control" id="inputPat" placeholder="">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputMat">Apellido Materno</label>
                                                <input name="inputMat"  type="text" class="form-control" id="inputMat" placeholder="">
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>Sexo</label>
                                                <br/>
                                                <input type="radio" name="sexo" value="H" id="sexo_h">
                                                    Hombre 
                                                <input type="radio" name="sexo" value="M" id="sexo_m">
                                                    Mujer
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputCorreo">Correo Electronico</label>
                                                <input name="inputCorreo"  type="text" class="form-control custom-control-label validate" id="inputCorreo" aria-describedby="emailHelp" placeholder="example@gmail.com">
                                                <div class="invalidInput" id="msgd5"></div>
                                            </div>
                                          </div>

                                          <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label  for="inputSeccion">Seccion</label>
                                                    <select name="inputSeccion" id="inputSeccion" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                                                        <option selected></option>
                                                    <?php 
                                                        include "classHiza.php";
                                                        $listadoSecc = new hiza();
                                                        $listadoSecc-> conexion();
                                                        $listadoSecc -> listaSecciones();

                                                    ?>                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputCalle">Calle</label>
                                                <input  name="inputCalle" type="text" class="form-control" id="inputCalle">
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputManzana" id="autoUpdate">Manzana</label>
                                                <input name="inputManzana" type="text" class="form-control" id="inputManzana">
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputLote" id="autoUpdate2">Lote</label>
                                                <input name="inputLote" type="text" class="form-control" id="inputLote">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputMaterno">Tipo</label>
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox"  name="tpoMnza" class="custom-control-input" id="customSwitch1">
                                                  <label  class="custom-control-label" for="customSwitch1">Mz.y Lt. o N. Int y Ext.</label>
                                                </div>
                                            </div>                        
                                               <div class="form-group col-md-2">
                                                    <label  for="inputColonia">Colonia</label>
                                                       <select id="inputColonia" name="inputColonia" class="form-control selectpicker">
                                                         <option selected></option>
                                                         
                                                        <?php
                                                            $idSeccion=$_POST['idSeccion']?? '';    
                                                            $listadoColonia = new hiza();
                                                            $listadoColonia-> conexion();
                                                            //$listadoColonia -> listaColonia($idSeccion);
                                                            $listadoColonia -> listaColonia();
                                                        ?>
                                                </select>
                                                </div>

                                            </div>

                                             <div class="form-row">
                                                <div class="form-group col-md-2" >
                                                <label for="dtol2">Distrito local</label>
                                                        <select id="dtol2" name="dtol2" class="form-control selectpicker">
                                                         <option selected></option>
                                                         <?php

                                                            $conexion=mysqli_connect("localhost","root","","hiza");

                                                            $lista=mysqli_query($conexion,"
                                                                SELECT id, distrito FROM distritos ")  or 
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
                                            <div class="form-group col-md-2">
                                                <label  for="cargo">Cargo</label>
                                                <br>
                                                <select name="cargo" class="custom-select " id="cargo" onchange="oculta()">
                                                    <option selected></option>
                                                  
                                                    <?php 
                                                        $conexion=mysqli_connect("localhost","root","","hiza");

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
                                                 <div class="form-group col-md-2" id="divzona" name="divzona">
                                                  <label for="zona">Zona</label>
                                                  <input name="zona" type="text" class="form-control" id="zona">
                                                </div>

                                            <!--- Se oculta seccion de trabajo ---->
                                            <!--div id="divsecc1" name="divsecc1"-->

                                            <div class="form-group col-md-2" id="divsecc1" name="divsecc1">
                                              <label for="secc1">Sección de Trabajo</label>
                                            
                                                <select name="secc1" id="secc1" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" onchange="showHint(this.value)">
                                                    <option selected></option>
                                                    <?php 
                                                        $listadoSec = new hiza();
                                                        $listadoSec-> conexion();
                                                        $listadoSec -> listaSecciones();

                                                    ?>                                    
                                                </select>
                                            </div>

                                            <div class="form-group col-md-2" id="divsecc11">
                                              <label for="dtol1">Distrito local</label>
                                               <select id="dtol1" name="dtol1" class="form-control selectpicker">

                                                <option selected></option>
                                                         <?php

                                                            $conexion=mysqli_connect("localhost","root","","hiza");

                                                            $lista=mysqli_query($conexion,"
                                                                SELECT id, distrito FROM distritos ")  or 
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

                                             <!--- Se oculta manzan de trabajo ---->

                                            <div class="form-group col-md-2" id="divmza1">
                                                <label for="mza1" >Manzana asignada</label>
                                                <input name="mza1" type="text" class="form-control" id="mza1" >
                                            </div>

                                          </div>

                                          <hr class="sidebar-divider">




                                          <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <label>Seleccione las redes sociales con las que cuenta el integrante</label>


                                                <div class="form-check col-md-5">
                                                  <input class="form-check-input id-check" type="checkbox"  name="face">
                                                  <input type="newquantity[]" class="myinput form-control" name="inputFace" disabled  placeholder="Facebook"
                                                  name="inputFace">
                                              </div>
                                              <br>
                                                  <div class="form-check col-md-5">
                                                  <input class="form-check-input id-check" type="checkbox" name="whats" >
                                                  <input type="newquantity[]" class="myinput form-control" name="inputWhats" disabled  placeholder="Whatsapp" name="inputWhats">
                                                </div>
                                                <br>
                                                <div class="form-check col-md-5">
                                                  <input class="form-check-input id-check" type="checkbox" name="twit">
                                                  <input type="newquantity[]" class="myinput form-control" name="inputTwit" disabled  placeholder="Twitter" name="inputTwit">
                                                </div>
                                                <br>
                                                <div class="form-check col-md-5">
                                                  <input class="form-check-input id-check" type="checkbox"  name="ins">
                                                   <input type="newquantity[]" class="myinput form-control" name="inpuIns"disabled  placeholder="Instagram"
                                                   name="inputIns">
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

                                                    $inputOcupacion = $_REQUEST['inputOcupacion'];

                                                    $cargo = $_REQUEST['cargo'];

                                                    $zona = $_REQUEST['zona'];

                                                    $secc1 = $_REQUEST['secc1'];

                                                    $dtol1 = $_REQUEST['dtol1'];

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

                                                    if(isset($_REQUEST['inputWhats'])){
                                                        
                                                        $inputTwit= $_REQUEST['inputWhats'];

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
                                                    $mostrar->insAgregar($inputCve, $inputFolio, $inputNom, $inputPat, $inputMat, $sexo, $inputCorreo, $inputSeccion, $inputCalle, $inputManzana, $inputLote, $tpoMnza, $inputColonia, $dtol2, $inputTelefono, $inputOcupacion, $cargo, $zona, $secc1, $dtol1, $mupio1, $mza1, $inputFace, $inputWhats, $inputTwit, $inpuIns);


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
                document.getElementById("autoUpdate").innerHTML = "N. Exterior";

                document.getElementById("autoUpdate2").innerHTML = "N. Interior";
            }
            else{
                document.getElementById("autoUpdate").innerHTML = "Manzana";

                document.getElementById("autoUpdate2").innerHTML = "Lote";
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
          var seccion12 = document.getElementById("divsecc12");
          var manzana = document.getElementById("divmza1");

          if (cargo == "" || cargo==null)
          {
              zona.style.display = "inline";
              seccion1.style.display = "inline";
              seccion11.style.display = "inline";
              seccion12.style.display = "inline";
              manzana.style.display = "inline";
              document.getElementById("zona").value = "";
              return true;
          }
          if (cargo == "1")
          {
              zona.style.display = "inline";
              seccion1.style.display = "none";
              seccion11.style.display = "none";
              seccion12.style.display = "none";
              manzana.style.display = "none";      
              return true;
          }
          if (cargo == "2")
          {
              zona.style.display = "none";
              seccion1.style.display = "inline";
              seccion11.style.display = "inline";
              seccion12.style.display = "inline";
              manzana.style.display = "none";
              return true;
          }  
          if (cargo == "3" ||  cargo== "4")
          {
              zona.style.display = "none";
              seccion1.style.display = "inline";
              seccion11.style.display = "inline";
              seccion12.style.display = "inline";
              manzana.style.display = "inline";
              return true;
          }
          if (cargo == "5")
          {
              zona.style.display = "none";
              seccion1.style.display = "none";
              seccion11.style.display = "none";
              seccion12.style.display = "none";
              manzana.style.display = "none";
              return true;
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
            var patron=/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
            if (patron.test(nombred)) {
                return true;
            } else{
                return false;
            }
        }

        /*
        var validaApellidopd=function(apellidopd){
            var patron=/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
            if (patron.test(apellidopd)) {
                return true;
            } else{
                return false;
            }
        }
        */

        var validaFolio=function(foliod){
            var patron=/^[0-9]{18}/;
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
            var inputFolio = document.getElementById("inputFolio").value.trim();
            var inputCve = document.getElementById("inputCve").value.trim();
            var inputCorreo = document.getElementById("inputCorreo").value.trim();
            //var indice = document.getElementById("grupod").selectedIndex;
            var texto="";


             if (inputNom == ""){
                texto = "Debe ingresar un folio";
                document.getElementById("msg2").innerHTML=texto;
                return false;
            }
            if(!validaNombred(inputNom)){
                document.getElementById("msg2").innerHTML="Ingrese su nombre";
                return false;
            }






            /******/


            if (inputFolio == ""){
                texto = "Debe ingresar un folio";
                document.getElementById("msg1").innerHTML=texto;
                return false;
            }
            if(!validaFolio(inputFolio)){
                document.getElementById("msg1").innerHTML="El folio debe contener 18 dígitos";
                return false;
            }

            /*********/
             
            

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



            document.getElementById("inputFolio").addEventListener("blur",function(){
            txtinputFolio = document.getElementById("inputFolio").value.trim();
            if (!validaFolio(txtinputFolio)) {
                document.getElementById("msg1").innerHTML="La clave debe contener 18 diítos";
                return false;
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

</body>

</html>