<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hiza</title>
     <link rel="icon" type="image/png" href="../img/icono.png" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="bg-gradient">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">INICIO DE SESION</h1>
                                    </div>
                                    <form class="user"  method="post">
                                        <div class="form-group">
                                            <input name="nombre" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" 
                                                placeholder="Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input name="contra" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">
                                        </div>
                                        <button type="submit" class="btn btn-user btn-block styleadd" data-toggle="button" aria-pressed="false" autocomplete="off" name="boton" value="Entrar">
                                          Ingresar
                                        </button>                                       
                                    </form>
                                    <?php

                                    
                                            session_start();

                                            if(isset($_GET['cerrar_sesion'])){
                                                
                                                    session_unset();
                                                    session_destroy();
                                            }

                                            if(isset($_SESSION['rol'])){
                                                switch($_SESSION['rol']){
                                                    case 1:
                                                        header('location: admin.php');
                                                    break;
                                            
                                                    case 2:
                                                        header('location: inicioBuscar.php');
                                                    break;
                                                    default:
                                            
                                                }
                                            }

                                        include "classHiza.php";
                                        if(isset($_REQUEST['boton'])){
                                            if($_REQUEST['boton']=="Entrar"){
                                                $name=$_REQUEST['nombre'];
                                                $pass=$_REQUEST['contra'];
                                                    
                                                $conec= new hiza();
                                                $conec->conexion();
                                                $conec->login($name,$pass);
                                            }
                                                }
                                            ?>
                                    <hr>
                                    <div class="text-center">
                                        <img src="../img/logo.png" id="logo" class="logoS">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>