<?php
    session_start();
    $nombre = $_GET['nom'];
    $tipo_empleado = $_GET['tipo'];
    $foto = $_GET['imagen'];
    require("conexion.php");

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

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
                                <li><a href="contactos.php?nom=<?php echo $nombre;?>&tipo=<?php echo$tipo_empleado;?>&imagen=<?php echo $foto;?>">Contactos</a></li>
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

                <!--left navigation start-->
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
                                        <li><a href="components-alerts.html">Modificar/Eliminar Producto</a></li>
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
                        <div id="map1" style="width:100%;height:400px;"></div>
                        <script>
                            function map()
                            {
                                var location = {lat:23.7619706, lng: -99.140328};
                                var map = new google.maps.Map(document.getElementById("map1"),{
                                    zoom:17,
                                    center:location
                                });
                                var marker = new google.maps.Marker({
                                    position:location,
                                    map: map
                                });

                            }
                        </script>
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20">Contacts</h4>
                            </div>
                        </div> <!-- end row -->
                    <div class='row'>
                        <?php
	                        $query = "SELECT * FROM empleado where activo = 1";
							$resultado = mysqli_query($conexion,$query);
							while($fila = mysqli_fetch_array($resultado))
							{
								$id_contacto = $fila[0];
								$nombre_contacto = $fila[1];
								$apellido_contacto = $fila[2];
								$telefono_contacto = $fila[4];
								$correo_contacto = $fila[5];
								$tipo_contacto = $fila[6];
								$imagen_contacto = $fila['imagen'];

								echo"
                        				<div class='col-md-4'>
                        					<div class='text-center card-box'>
	                                    		<div class='clearfix'></div>
	                                    			<div class='member-card'>
	                                        			<span class='user-badge bg-warning'>$tipo_contacto</span>
	                                        			<div class='thumb-xl member-thumb m-b-10 center-block'>
	                                            			<img src='assets/images/users/$imagen_contacto' class='img-circle img-thumbnail' alt='profile-image'>
	                                            			<i class='mdi mdi-information-outline member-star text-success' title='verified user'></i>
	                                        			</div>

	                                        			<div class=''>
	                                            		<h4 class='m-b-5'>$nombre_contacto $apellido_contacto</h4>
	                                            		<p class='text-muted'>$correo_contacto <span> | </span> <span> <a class='text-pink'>$telefono_contacto</a> </span></p>
	                                        			</div>

	                                        			<p class='text-muted font-13'>
	                                            			¡Hola!, soy $nombre_contacto, soy $tipo_contacto del café María Bonita y su sistema.
	                                        			</p>
	                                        			<button type='button' class='btn btn-default btn-sm m-t-10'>Message</button>
		                                        		<a href='visit_profile.php?nom=$nombre&tipo=$tipo_empleado&imagen=$foto&id_profile=$id_contacto'<button type='button' class='btn btn-default btn-sm m-t-10'>View Profile</button></a>

	                                        			<ul class='social-links list-inline m-t-30'>
	                                            			<li>
	                                                			<a title='' data-placement='top' data-toggle='tooltip' class='tooltips' href='' data-original-title='Facebook'><i class='fa fa-facebook'></i></a>
	                                            			</li>
	                                            			<li>
	                                                			<a title='' data-placement='top' data-toggle='tooltip' class='tooltips' href='' data-original-title='Twitter'><i class='fa fa-twitter'></i></a>
	                                            			</li>
	                                            			<li>
	                                                			<a title='' data-placement='top' data-toggle='tooltip' class='tooltips' href='' data-original-title='Skype'><i class='fa fa-skype'></i></a>
	                                            			</li>
	                                        			</ul>

	                                   				</div>

                                				</div>

                            			</div> <!-- end col -->";




							}
	                    ?>
                        
                    </div><!-- end row -->


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


        <!-- sample modal content -->
        <div id="add-contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-contactLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="add-contactLabel">Add Contact</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" class="form-control" id="position" placeholder="Enter position">
                            </div>
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" placeholder="Enter company">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default " data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary ">Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->





        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>

		<!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>



        <!-- Google Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3AU2NUJyA1Q8ay_UAmcTy3EMjnYofMjI&callback=map"></script>

    </body>
</html>