<?php
    session_start();
    $nombre = $_GET['nom'];
    $tipo_empleado = $_GET['tipo'];
    $foto = $_GET['imagen'];
    require("conexion.php");

    $query = "SELECT * FROM empleado where imagen = '$foto'";
    $resultado = mysqli_query($conexion,$query);

    while($fila = mysqli_fetch_array($resultado))
    {
      $nombre_profile = $fila['nombre'];
      $apellido_profile = $fila[2];
      $direccion_profile = $fila['direccion'];
      $correo_profile = $fila["correo"];
      $telefono_profile = $fila['telefono'];
      $password_profile = $fila['password'];
      $notas_profile = $fila['notas'];

    }
?>
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

        <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />


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

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo">
                            <img src="assets/images/logoM.png" alt="logo" class="logo-lg" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                                <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                           </div>
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/<?php echo $foto;?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="edit_profile.php?nom=<?php echo $nombre;?>&tipo=<?php echo$tipo_empleado;?>&imagen=<?php echo $foto;?>"><i class="ti-user m-r-10"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="index.php"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

               <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/<?php echo $foto;?>" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#"><?php echo $nombre_profile;?></a>
                                    <p class="text-muted m-0"><?php echo $tipo_empleado; ?></p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="dashboard_Administrador.php?nom=<?php echo $nombre_profile;?>&tipo=<?php echo$tipo_empleado;?>&imagen=<?php echo $foto;?>"><i class="ti-home"></i> Dashboard </a></li>

                                <li><a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-account"></i>Empleados<span class="fa arrow"></span></a>
                                </span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><?php echo "<a href='registrar_empleado.php?nom=$nombre_profile&tipo=$tipo_empleado&imagen=$foto'>Registrar Empleado</a>";?></li>
                                        <li><a href="modificar_empleado.php?nom=<?php echo $nombre_profile;?>&tipo=<?php echo $tipo_empleado;?> &imagen=<?php echo $foto;?>">Modificar/Eliminar Empleado</a></li>
                                    </ul>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-food-variant"></i> Menu<span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="registrar_productos_menu.php?nom=<?php echo $nombre_profile;?>&tipo=<?php echo $tipo_empleado;?> &imagen=<?php echo $foto;?>">Insertar Producto</a></li>
                                        <li><a href="modificar_productos_menu.php?nom=<?php echo $nombre_profile;?>&tipo=<?php echo $tipo_empleado;?> &imagen=<?php echo $foto;?>">Modificar/Eliminar Producto</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-food-variant"></i> Ingredientes<span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="components-range-slider.html">Insertar Producto</a></li>
                                        <li><a href="components-alerts.html">Modificar/Eliminar Producto</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="assets/images/users/<?php echo $foto?>" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5"><?php echo $nombre_profile?></h4>
                                            <p class="text-muted">@<?php echo $tipo_empleado?></p>
                                        </div>

                                        <p class="text-muted m-t-10">
                                            ¡Hola!, soy <?php echo $nombre_profile?>, soy <?php echo $tipo_empleado?> del café María Bonita y su sistema
                                        </p>
                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="active">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="true">
                                        Perfil
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile-b1" data-toggle="tab" aria-expanded="false">
                                        Configuración
                                    </a>
                                </li>
                            </ul>
                            <?php

                                	if(isset($_POST['registro']))
                                	{
                                		$nombre_profile = $_POST['nombre'];
                                		$apellido_profile = $_POST['apellido'];
                                		$direccion_profile = $_POST['direccion'];
                                		$telefono_profile = $_POST['telefono'];
                                		$correo_profile = $_POST['correo'];
                                		$password_profile = $_POST['contraseña1'];
                                    $notas_profile = $_POST['content'];

                                		$query = "UPDATE empleado SET nombre = '$nombre_profile',apellidos = '$apellido_profile', direccion = '$direccion_profile', telefono = '$telefono_profile', correo = '$correo_profile', password = '$password_profile', notas = '$notas_profile'  where imagen= '$foto'";
                                		if($conexion->query($query) == true)
                                                {
                                                	echo "<script>location.href='edit_profile.php?nom=$nombre_profile&tipo=$tipo_empleado&imagen=$foto'</script>";
                                                    echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                                                <button type='button' class='close' data-dismiss='alert'
                                                                    aria-label='Close'>
                                                                    <span aria-hidden='true'>&times;</span>
                                                                </button>
                                                                 Cambios realizados <strong>Satisfactoriamente</strong>.
                                                            </div>";
                                                }
                                                else
                                                {
                                                    echo "<div class='alert alert-icon alert-danger alert-dismissible fade in' role='alert'>
                                                            <button type='button' class='close' data-dismiss='alert'
                                                            aria-label='Close'>
                                                                <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                            <i class='mdi mdi-block-helper'></i>
                                                            <strong>Algo salió mal</strong> Favor de llamar al Administrador";
                                                }
                                	}
                                ?>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Información Personal</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="m-b-20">
                                                        <strong>Nombre Completo</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $nombre_profile?> <?php echo $apellido_profile;?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Teléfono</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $telefono_profile; ?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Correo Electrónico</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $correo_profile ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                            <!-- Social -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Social</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="social-links list-inline m-b-0">
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Social -->
                                        </div>


                                        <div class="col-md-8">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Biography</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <h5 class="header-title text-uppercase">About</h5>
                                                    <p><?php echo $notas_profile ?></p>

                                                    <div class="">

                                                        <h5 class="header-title text-uppercase m-t-30 m-b-20">Skills</h5>

                                                        <div class="m-b-15">
                                                            <h5>Angular Js <span
                                                                    class="pull-right">60%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="60"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 60%">
                                                                    <span class="sr-only">60% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-15">
                                                            <h5>Javascript <span
                                                                    class="pull-right">90%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="90"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 90%">
                                                                    <span class="sr-only">90% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-15">
                                                            <h5>Wordpress <span
                                                                    class="pull-right">80%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="80"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 80%">
                                                                    <span class="sr-only">80% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-0">
                                                            <h5>HTML5 &amp; CSS3 <span class="pull-right">95%</span>
                                                            </h5>
                                                            <div class="progress m-b-0">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="95"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 95%">
                                                                    <span class="sr-only">95% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="profile-b1">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Editar Perfil</h3>
                                        </div>
                                        <div class="panel-body">
                                            <?php echo "<form action='edit_profile.php?nom=$nombre_profile&tipo=$tipo_empleado&imagen=$foto' method='post' class='form-validation'>";?>
                                                <div class="form-group">
                                                    <label for="Nombre">Nombre</label>
                                                    <input type="text" value="<?php echo $nombre_profile ?>" id="nombre" name = "nombre" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Apellidos">Apellidos</label>
                                                    <input type="text" value="<?php echo $apellido_profile ?>" id="apellido" name="apellido" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Direccion">Dirección</label>
                                                    <input type="text" value="<?php echo $direccion_profile ?>" id="direccion" name="direccion" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Telefono">Teléfono</label>
                                                    <input type="text" value="<?php echo $telefono_profile ?>" id="telefono" name="telefono" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Correo Electrónico</label>
                                                    <input type="email" value="<?php echo $correo_profile ?>" id="correo" name="correo" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Contraseña</label>
                                                    <input type="password" id="contraseña1" name ="contraseña1" class="form-control" required value="<?php echo $password_profile ?>">
                                                </div>
                                                <div class="form-group">
                                                	<label for="contraseña2">Confirmar Contraseña</label>
                                                	<input data-parsley-equalto="#contraseña1" type="password" required class="form-control" id="contraseña2" name = "contraseña2" value="<?php echo $password_profile ?>">
                                            	   </div>
                                                <div class="form-group" id="sum">
                                                  <label for ="summernote">Biografia<span class="text-danger">*</span></label>
                                                  <fieldset>
                                                    <p class="container">
                                                      <textarea class = "input-block-level" id="summernote" name ="content" rows="2"><?php echo $notas_profile ?></textarea>
                                                    </p>
                                                  </fieldset>
                                                </div>
                                                <input value ="Modificar" name="registro" class="btn btn-primary waves-effect waves-light" type="submit">
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <!-- form advanced init js -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-validation').parsley();
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
            $(document).ready(function(){
                $('#summernote').summernote({
                    height:"170px"
                });
            });

            var postform = function(){
                var content = $('textarea[name="content"]').html($('#summernote').code());
            }
        </script>

    </body>
</html>