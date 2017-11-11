<?php
    session_start();
    require("conexion.php");
    $nombre = $_GET['nom'];
    $tipo_empleado = $_GET['tipo'];
    $foto = $_GET['imagen'];

  
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Maria Bonita</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                    <a href="#"><?php echo $nombre;?></a>
                                    <p class="text-muted m-0"><?php echo $tipo_empleado; ?></p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="dashboard_Administrador.php?nom=<?php echo $nombre;?>&tipo=<?php echo$tipo_empleado;?>&imagen=<?php echo $foto;?>"><i class="ti-home"></i> Dashboard </a></li>

                                <li><a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-account"></i>Empleados<span class="fa arrow"></span></a>
                                </span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><?php echo "<a href='registrar_empleado.php?nom=$nombre&tipo=$tipo_empleado&imagen=$foto'>Registrar Empleado</a>";?></li>
                                        <li><a href="modificar_empleado.php?nom=<?php echo $nombre;?>&tipo=<?php echo $tipo_empleado;?> &imagen=<?php echo $foto;?>">Modificar/Eliminar Empleado</a></li>
                                    </ul>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-food-variant"></i> Menu<span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="registrar_productos_menu.php?nom=<?php echo $nombre;?>&tipo=<?php echo $tipo_empleado;?> &imagen=<?php echo $foto;?>">Nuevo Producto</a></li>
                                        <li><a href="modificar_productos_menu.php?nom=<?php echo $nombre;?>&tipo=<?php echo $tipo_empleado;?> &imagen=<?php echo $foto;?>">Modificar/Eliminar Producto</a></li>
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

                            <div class="col-sm-12">
                                <div class="p-20 m-b-20">

                                    <h4 class="header-title m-t-0">Registrar Empleado</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Favor de llenar los campos obligatorios
                                    </p>
                                    <?php
                                          if(isset($_POST['registro']))
                                          {
                                            $nombre_nuevo = $_POST["nombre_nuevo"];
                                            $apellido_nuevo = $_POST["apellido_nuevo"];
                                            $direccion_nuevo = $_POST["direccion_nuevo"];
                                            $telefono_nuevo = $_POST["telefono_nuevo"];
                                            $correo_nuevo = $_POST["correo_nuevo"];
                                            $tipo_nuevo = $_POST["tipo_nuevo"];
                                            $fecha_nuevo = $_POST["fecha_nuevo"];
                                            $usuario_nuevo = $_POST["usuario_nuevo"];
                                            $password = $_POST["contraseña1"];
                                            $notas = $_POST["content"];

                                            $date = new DateTime($fecha_nuevo);
                                            $date = date_format($date,"Y-m-d");
                                            $query = "INSERT INTO empleado (nombre,apellidos,direccion,telefono,correo,tipo,fecha_nac, usuario, password, imagen,notas) VALUES ('$nombre_nuevo','$apellido_nuevo','$direccion_nuevo','$telefono_nuevo','$correo_nuevo','$tipo_nuevo','$date','$usuario_nuevo','$password','imagen_$nombre_nuevo.jpg','$notas')";
                                            if($conexion->query($query) == true)
                                            {
                                              echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                                                <button type='button' class='close' data-dismiss='alert'
                                                                    aria-label='Close'>
                                                                    <span aria-hidden='true'>&times;</span>
                                                                </button>
                                                                 Empleado <strong>Registrado</strong> Satisfactoriamente.
                                                            </div>";
                                            }
                                            else
                                            {
                                              echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                                                <button type='button' class='close' data-dismiss='alert'
                                                                    aria-label='Close'>
                                                                    <span aria-hidden='true'>&times;</span>
                                                                </button>
                                                                 Algo ha sucedido <strong>mal</strong>. Favor de llamar al administrador.
                                                            </div>";
                                            }
                                          }
                                        ?>

                                    <div class="p-20 m-b-20">
                                        <?php echo "<form action='registrar_empleado.php?nom=$nombre&tipo=$tipo_empleado&imagen=$foto' method='post' class='form-validation'>" ;?>
                                            <div class="form-group">
                                                <label for="nombre">Nombre(s)<span class="text-danger">*</span></label>
                                                <input type="text" name="nombre_nuevo" parsley-trigger="change" required
                                                       placeholder="Ingresar nombre" class="form-control" id="nombre_nuevo">
                                            </div>
                                            <div class="form-group">
                                                <label for="apellido">Apellido(s)<span class="text-danger">*</span></label>
                                                <input type="text" name="apellido_nuevo" parsley-trigger="change" required
                                                       placeholder="Ingresa Apellido" class="form-control" id="apellido_nuevo">
                                            </div>
                                            <div class="form-group">
                                                <label for="direccion">Dirección<span class="text-danger">*</span></label>
                                                <input type="text" name="direccion_nuevo" parsley-trigger="change" required
                                                       placeholder="Ingresa Dirección" class="form-control" id="direccion_nuevo">
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">Teléfono<span class="text-danger">*</span></label>
                                                <input type="text" name="telefono_nuevo" parsley-trigger="change" required
                                                       placeholder="Ingresa Apellido" class="form-control" id="telefono_nuevo">
                                            </div>
                                            <div class="form-group">
                                                <label for="correo">Correo Electrónico<span class="text-danger">*</span></label>
                                                <input type="email" name="correo_nuevo" parsley-trigger="change" required
                                                       placeholder="Ingrese Correo Electrónico" class="form-control" id="correo_nuevo">
                                            </div>
                                            <div class="form-group">
                                                <label for="empleado">Tipo de Empleado<span class="text-danger">*</span></label>
                                                <select class="select2 form-control" name = "tipo_nuevo">
                                                    <option value="Empleado">Empleado</option>
                                                    <option value="Gerente" disabled="disabled">Gerente</option>
                                                    <option value="Administrador">Administrador</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha de Nacimiento</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name= "fecha_nuevo">
                                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="usuario">Usuario<span class="text-danger">*</span></label>
                                                <input type="text" name="usuario_nuevo" parsley-trigger="change" required
                                                       placeholder="Ingresar Usuario" class="form-control" id="usuario_nuevo">
                                            </div>
                                            <div class="form-group">
                                                <label for="contraseña1">Contraseña <span class="text-danger">*</span></label>
                                                <input id="contraseña1" type="password" placeholder="Ingresar Contraseña" required
                                                       class="form-control" name = "contraseña1">
                                            </div>
                                            <div class="form-group">
                                                <label for="contraseña2">Confirmar Contraseña <span class="text-danger">*</span></label>
                                                <input data-parsley-equalto="#contraseña1" type="password" required
                                                       placeholder="Repetir Contraseña" class="form-control" id="contraseña2">
                                            </div>
                                            <div class="form-group" id="sum">
                                              <label for ="summernote">Biografia<span class="text-danger">*</span></label>
                                              <fieldset>
                                                  <p class="container">
                                                    <textarea class = "input-block-level" id="summernote" name ="content" rows="2"></textarea>
                                                  </p>
                                              </fieldset>
                                            </div>

                                            <div class="form-group text-right m-b-0">
                                                <input value ="Registrar" name="registro" class="btn btn-primary waves-effect waves-light" type="submit">
                                                    
                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                        
                                    </div>

                                </div>
                            </div>

                            
                        </div>
                        <!-- end row -->


                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Powered By: Fher Torres.
                        </div>
                        <div>
                            <strong>María Bonita</strong> - Copyright &copy; 2017
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

