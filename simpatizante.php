<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hiza</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

     <link rel="icon" type="image/png" href="../img/icono.png" />

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styleGeneral.css ">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css"-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    

    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script-->


 </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" class="nover">

        <!-- Sidebar -->
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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Búsqueda de Personas</h1>
                    <p class="mb-4"></p>

                      <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-5 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <form method="post">
                                                <div class="form-row">
                                                  <div class="form-group col-md-7">
                                                    
                                                    <input name="PalabraClave" type="text" class="form-control" id="PalabraClaveCl" placeholder="Ingrese palabra clave">
                                                   </div>
                                                   <!--div class="form-group col-md-2">
                                                    <label for="PalabraClaveFl">Folio</label>
                                                    <input name="PalabraClaveFl" type="text" class="form-control" id="PalabraClaveFl" placeholder="Ingrese palabra clave">  
                                                   </div>
                                                   <div class="form-group col-md-2">
                                                    <label for="PalabraClaveNm">Nombre</label>
                                                    <input name="PalabraClaveNm" type="text" class="form-control" id="PalabraClaveNm" placeholder="Ingrese palabra clave">  
                                                   </div>
                                                   <div class="form-group col-md-2">
                                                    <label for="PalabraClaveDir">Dirección</label>
                                                    <input name="PalabraClaveDir" type="text" class="form-control" id="PalabraClaveDir" placeholder="Ingrese palabra clave">  
                                                   </div>
                                                   <div class="form-group col-md-2">
                                                    <label for="PalabraClaveSec">Sección</label>
                                                    <input name="PalabraClaveSec" type="text" class="form-control" id="PalabraClaveSec" placeholder="Ingrese palabra clave">  
                                                   </div-->
                                                    <div class="form-group col-md-5">
                                                        
                                                        <button type="submit" class="btn btn-primary" name="nombre" value="BuscarP">Buscar Ahora</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

                                        <div class="col-auto">
                                            <i class="fas fa-search fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" >
                            <div class="row">
                                <div class="col">
                                    <h6 class="m-0 font-weight-bold text-dark"></h6>

                                </div>
                                <div class="col">
                                    
                                </div>
                                <div class="col floatStyle" >
                                    <a  class="btn btn-primary" href="agregar.php">
                                        <span class="icon text-white-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                        </span>
                                        <span class="text">Agregar</span>
                                    </a>
                                </div>
                            </div>                            
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php


                                        if(!empty($_POST))
                                        {
                                              $aKeyword = explode(" ", $_POST['PalabraClave']);
                                              $query ="SELECT  id, clave, folio, paterno, materno, nombre, colonia, calle, v_int, ext, seccion FROM personasmasiva WHERE clave like '%" . $aKeyword[0] . "%' OR paterno like '%" . $aKeyword[0] . "%' OR materno like '%" . $aKeyword[0] . "%' OR nombre like '%" . $aKeyword[0] . "%' OR calle like '%" . $aKeyword[0] . "%'  OR seccion like '%" . $aKeyword[0] . "%' LIMIT 3000" ;
                                              
                                             for($i = 1; $i < count($aKeyword); $i++) {
                                                if(!empty($aKeyword[$i])) {
                                                    $query .= " OR paterno like '%" . $aKeyword[$i] . "%' OR materno like '%" . $aKeyword[$i] . "%' OR nombre like '%" . $aKeyword[$i] . "%' OR calle like '%" . $aKeyword[$i] . "%' OR seccion like '%" . $aKeyword[$i] . "%'";
                                                }
                                              }
                                             
                                             $result = $db->query($query);
                                             echo "<br>Has buscado la palabra clave:<b> ". $_POST['PalabraClave']."</b>";
                                                             
                                             if(mysqli_num_rows($result) > 0) {
                                                $row_count=0;

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


                                                While($row = $result->fetch_assoc()) {   
                                                    $row_count++;  
                                                    echo '<tr>';
                                                    echo '<td align="center">
                                                                              <a href="actualiza.php?id_registro='.$row['id'].'"  data-placement="top" data-toggle="tooltip" title="Modificar" class="btn persA btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">
                                                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                                              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                                                </svg>
                                                                              </a>
                                                                              <!--a class="btn persM" data-placement="top" data-toggle="tooltip" title="Desactivar"><em class="fa fa-trash"></em></a--!>
                                                                            </td>';     
                                                            echo '<td>';
                                                            echo $row['clave'];
                                                            echo '</td>';
                                                            echo '<td>';
                                                            echo $row['folio'];
                                                            echo '</td>';
                                                            echo '<td>';
                                                            echo $row['paterno'].' '.$row['materno'].' '.$row['nombre'];
                                                            echo '</td>';
                                                            echo '<td>';
                                                            if($row['colonia']==null || $row['colonia']==''){
                                                                $colonia = '';
                                                            }
                                                            else{
                                                                $colonia =', '.$row['colonia']; 
                                                            }
                                                            echo $row['calle'].' '.$row['ext'].' '.$row['v_int'].$colonia;
                                                            echo '</td>';
                                                            echo '<td>';
                                                            echo $row['seccion'];
                                                            echo '</td>';
                                                            echo "</tr>";



                                                        }
                                                        echo '</tbody>
                                                        </table>';
                                            
                                            }
                                            else {
                                                echo "<br>Resultados encontrados: Ninguno";
                                                
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
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"> Está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Cerrar</a>
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

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>


    <script type="text/javascript">
     $(document).ready(function(){
      var current = 1,current_step,next_step,steps;
      steps = $("fieldset").length;
      $(".next").click(function(){
      current_step = $(this).parent();
      next_step = $(this).parent().next();
      next_step.show();
      current_step.hide();
      setProgressBar(++current);
      });
      $(".previous").click(function(){
      current_step = $(this).parent();
      next_step = $(this).parent().prev();
      next_step.show();
      current_step.hide();
      setProgressBar(--current);
      });
      setProgressBar(current);
      // Change progress bar action
      function setProgressBar(curStep){
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");
      }
    });
   </script>
    <!-- Initialize the plugin: -->

    <!--script type="text/javascript">
        
        $(function () {
            $('#lstFruits').multiselect({
                includeSelectAllOption: true
            });
            $('#btnSelected').click(function () {
                var selected = $("#lstFruits option:selected");
                var message = "";
                selected.each(function () {
                    message += $(this).text() + " " + $(this).val() + "\n";
                });
            });
        });
    </script-->

<!--script type="text/javascript">
    
    jQuery(document).ready(function($){
    $(document).ready(function() {
        $('.mi-selector').select2();
    });
});
</script-->




    <script type="text/javascript">
        $('#example-single-selected').multiselect();
    </script>
 




    <script type="text/javascript">
         $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
    });
   </script>

    <script type="text/x-javascript">
        //codigo javascript
         
        var isCtrl = false;
        document.onkeyup=function(e){
            if(e.which == 17) isCtrl=false;
            }
            document.onkeydown=function(e){
                if(e.which == 17 ) isCtrl=true;
                if(e.which == 80 && isCtrl == true) {
                    //Combinancion de teclas CTRL+P y bloquear su ejecucion en el navegador
                     console.log("Ha presionado las teclas Ctrl + P");
                    return false;
                }
                if(e.which == 85 && isCtrl == true) {
                    //Combinancion de teclas CTRL+P y bloquear su ejecucion en el navegador
                    console.log("Ha presionado las teclas Ctrl + U");
                    return false;
                }
                if(e.which == 83 && isCtrl == true) {
                    //Combinancion de teclas CTRL+P y bloquear su ejecucion en el navegador
                    console.log("Ha presionado las teclas Ctrl + S");
                    return false;
                }
        }
    </script>
    <!--script type="text/javascript">
            document.oncontextmenu = function(){return false;}
    </script-->
        <script id="rendered-js" type="text/javascript">
          const copyToClipboard = () => {
              var textToCopy = "Print screen disabled";
              navigator.clipboard.writeText(textToCopy);
            }

            $(window).keyup((e) => {
              if (e.keyCode == 44) {
                setTimeout(
                  copyToClipboard(), 
                  1000
                );
              }
            });
                              //# sourceURL=pen.js
        </script>
            
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
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
</script>
<script src="../js/funciones.js"></script>
</body>

</html>