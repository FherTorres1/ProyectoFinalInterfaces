<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <!-- HOME -->
        <section>
        
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="#" class="text-success">
                                            <span><img src="assets/images/logoM.png" alt="" height="100"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>

                                <div class="account-content">
                                <form class="form-horizontal" method = "POST">
                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="emailaddress">Usuario</label>
                                                <input class="form-control" type="text" id="usuario" name="usuario" required="" placeholder="administrador">
                                        </div>
                                    </div>

                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <a href="forget_password.php" class="text-muted pull-right font-14">¿Olvidaste tu contraseña?</a>
                                            <label for="password">Contraseña</label>
                                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="administrador">
                                        </div>
                                    </div>

                                    <div class="form-group m-b-30">
                                        <div class="col-xs-12">
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox5" type="checkbox">
                                                <label for="checkbox5">
                                                    Recordar Usuario
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <input value ="Iniciar Sesión" name="inicio" class="btn btn-primary waves-effect waves-light" type="submit">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST['inicio']))
                                    {
                                        $bandera=0;
                                        $tipo_emp;
                                        $user = $_POST['usuario'];
                                        $pass = $_POST['password'];

                                        require("conexion.php");

                                        $query = "SELECT * FROM empleado where usuario='$user' AND password = '$pass'";
                                        $resultado = mysqli_query($conexion,$query);

                                        while($fila = mysqli_fetch_array($resultado))
                                        {
                                            $bandera=1;
                                            $tipo_emp = "$fila[tipo]";
                                            $nombre = "$fila[nombre]";
                                            $foto = "$fila[imagen]";

                                        }

                                        //vemos si el usuario y contraseña son válidos
                                        if ($bandera==1)
                                        {
                                            echo "<script>location.href='dashboard_$tipo_emp.php?nom=$nombre&tipo=$tipo_emp&imagen=$foto'</script>";
                                        }
                                        else 
                                        {
                                            //si no existe se va a login.php
                                            echo "<div class='alert alert-icon alert-danger alert-dismissible fade in' role='alert'>
                                                        <button type='button' class='close' data-dismiss='alert'aria-label='Close'>
                                                            <span aria-hidden='true'>&times;</span>
                                                        </button>
                                                        <i class='mdi mdi-block-helper'></i>
                                                        <strong>Usuario o contraseña incorrecto.";
                                        }
                                    }
                                ?>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>