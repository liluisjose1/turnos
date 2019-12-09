<?php
ob_start();
session_start();
if (!$_COOKIE["sesion"]) {
    header("Location: ./logica/salir.php");
}
include_once("config/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>RRHH | ACOGUADALUPANA RL</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/assets/img/icon2.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['assets/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/assets/css/atlantis.min.css">
    <link rel="stylesheet" href="assets/assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/assets/css/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="assets/fullcalendar/css/fullcalendar.css">


    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="green">

                <a href="#" class="logo">
                    <img src="assets/assets/img/logo.png" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="green2">

                <div class="container-fluid">

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="assets/#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="assets/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="assets/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?php echo $_SESSION["nombre"]; ?></h4>
                                                <p class="text-muted"><?php echo $_SESSION["usuario"]; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./logica/salir.php">Cerrar Sesión</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="assets/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <?php echo $_SESSION["nombre"]; ?>
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a class="dropdown-item" href="./logica/salir.php">
                                            <span class="link-collapse">Cerrar Sesión</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-success">
                        <li class="nav-item active">
                            <a href="./dashboard.php">
                                <i class="fas fa-home"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Módulos</h4>
                        </li>
                        <li class="nav-item">
                            <a href="./usuarios.php">
                                <i class="fas fa-user-alt"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#reporte">
                                <i class="fas fa-print"></i>
                                <p>Reportes</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="reporte">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="./r_tickets.php">
                                            <span class="sub-item">Reporte de Tickets</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="./mantenimiento.php">
                                <i class="fas fa-cog"></i>
                                <p>Mantenimiento</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->