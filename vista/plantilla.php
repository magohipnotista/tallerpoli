<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="vista/dist/img/Poligramlogo.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vista/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="vista/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="vista/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="vista/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vista/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="vista/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="vista/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="vista/plugins/summernote/summernote-bs4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vista/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="vista/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vista/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="vista/dist/css/styles.css">
    <link href="vista/dist/simple-lightbox.min.css" rel="stylesheet" />
    <!-- As A Vanilla JavaScript Plugin -->
    <title>Document</title>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        $registros = controladordatos::traerregistros();
        $facturas = controladordatos::ctrtraerfacturas();
        $url = rutas::ctrrutas();
        ?>
        <?php
        if (isset($_GET["pagina"])) {
            $rutas = explode('/', $_GET["pagina"]);
            for ($i=0;$i<count($registros) ;$i++) {
                if ($_GET["pagina"] == $registros[$i]["llave"]) {
                    include "vista/modulos/navbar.php";
                    include "vista/modulos/aside.php";
                    include "vista/paginas/detallesorden.php";
                    
                }
            }

            foreach($facturas as $key => $value){
                if($_GET["pagina"] == $value["numeroorden"]){
                    include "vista/paginas/pdf.php";
                }
            }
            foreach($facturas as $key => $value){
                if($_GET["pagina"] == $value["numerodeordendown"]){
                    include "vista/paginas/pdfdown.php";
                }
            }
           
            if ($_GET["pagina"] == "inicio2") {
                include "vista/paginas/inicio2.php";
            } elseif ($_GET["pagina"] == "basededatos") {
                include "vista/modulos/navbar.php";
                include "vista/modulos/aside.php";
                include "vista/paginas/basededatos.php";
            }elseif ($_GET["pagina"] == "entidadrelacion") {
                include "vista/modulos/navbar.php";
                include "vista/modulos/aside.php";
                include "vista/paginas/diagrama.php";
            } elseif ($_GET["pagina"] == "facturas") {
                include "vista/modulos/navbar.php";
                include "vista/modulos/aside.php";
                include "vista/paginas/facturas.php";
            }elseif ($_GET["pagina"] == "inicio") {
                include "vista/modulos/navbar.php";
                include "vista/modulos/aside.php";
                include "vista/paginas/inicio.php";
            } elseif ($_GET["pagina"] == "pdf") {
                include "vista/paginas/pdf.php";
            }else {
                
            }
        } else {
            include "vista/modulos/navbar.php";
            include "vista/modulos/aside.php";
            include "vista/paginas/portada.php";
        }
        ?>

        <!-- jQuery -->
        <script src="vista/plugins/jquery/jquery.min.js"></script>


        <!-- jQuery UI 1.11.4 -->
        <script src="vista/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>

        <!-- Bootstrap 4 -->
        <script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>



        <!-- JQVMap -->
        <script src="vista/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="vista/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- daterangepicker -->
        <script src="vista/plugins/moment/moment.min.js"></script>
        <script src="vista/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="vista/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="vista/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="vista/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="vista/dist/js/adminlte.js"></script>
        <script src="https://kit.fontawesome.com/cdda3a2000.js" crossorigin="anonymous"></script>
        <script src="vista/dist/simple-lightbox.min.js"></script>
        <!-- For legacy browsers -->
        <script src="vista/dist/simple-lightbox.legacy.min.js"></script>
        <!-- As A jQuery Plugin -->
        <script src="vista/dist/simple-lightbox.jquery.min.js"></script>
        <script src="vista/dist/js/styles.js"></script>
</body>

</html>
