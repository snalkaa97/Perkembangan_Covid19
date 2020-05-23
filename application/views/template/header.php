<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Perkembangan Corona</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <link href="<?php echo base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?php echo base_url() ?>assets/css/main.min.css" rel="stylesheet" />
    <style type="text/css">
        #map {
            height: 180px;
        }
    </style>
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">#
    <!-- START HEADER-->
    <header class="header">
        <div class="flexbox flex-1">
            <!-- START TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">


                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('covid19') ?>"> <i class="fa-fw fa fa-home"></i>Indonesia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('covid19/global') ?>"><i class="fa-fw fa fa-globe"></i>Global</a>
                </li>
            </ul>
            <!-- END TOP-LEFT TOOLBAR-->
            <!-- START TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">

                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        <img src="<?php echo base_url() ?>assets/img/alka.JPG" />
                        <span></span>Syaifudin Alkatiri<i class="fa fa-angle-down m-l-5"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i>Profile</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-cog"></i>Settings</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-support"></i>Support</a>
                        <li class="dropdown-divider"></li>
                        <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>Logout</a>
                    </ul>
                </li>
            </ul>
            <!-- END TOP-RIGHT TOOLBAR-->
        </div>
    </header>
    <!-- END HEADER-->