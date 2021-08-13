
<?php $status = session_status();
$usuario_actual = "";
if($status == PHP_SESSION_NONE) {session_start();}

$login_ok = isset($_SESSION["login_ok"]) ? $_SESSION["login_ok"] : '';

if ($login_ok == "identificado") {
    $usuario_actual = (isset($_SESSION['usu_usuario'])) ? $_SESSION['usu_usuario'] : $_COOKIE['usu_usuario'];
}

?>
<!DOCTYPE html>
<!--[if IEMobile 7 ]> <html lang="es"class="iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html lang="es" class="ie6 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7 ]>    <html lang="es" class="ie7 lt-ie8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="es" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html lang="es">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centros de Testeos RS I</title>
    <meta name="description" content="">
    <meta name="author" content="Sistemas RS I">
    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- Nav and address bar color -->
    <meta name="theme-color" content="#0072b8">
    <meta name="msapplication-navbutton-color" content="#0072b8">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0072b8">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../dist/poncho.min.css">
    <link rel="stylesheet" href="../dist/icono-arg.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/node_modules/html5shiv/html5shiv.js"></script>
      <script src="/node_modules/respond.js/respond.min.js"></script>
  <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
    </script>
    <style>
        @media print {

            section,
            .jumbotron {
                padding: 0;
            }

            main .jumbotron_bar {
                display: none;
            }

            /* ANCHO 90% TODO EL CONTENIDO GENERAL Y CENTRADO */
            main {
                width: 90%;
                margin: 0 auto;
            }

            .jumbotron_body {
                padding: 25px 0 !important;
            }

            .content_for {
                margin: 0;
            }

            .content_format h2 {
                margin-top: 0;
            }

            .icon-item {
                text-align: center;
                margin: 10px 0;
            }

            /* Quitar o No Mostrar Rutas Internas */
            a[href]:after {
                display: none;
            }

            /* Rutas que empiecen con http */
            a[href^=http]:after {
                content: " ("attr(href) ")";
                display: block;
            }

            /* AGREGAR UN ESPACIADO ALGUN FIX QUE ROMPA*/
            .page-break {
                display: block;
                height: 100px;
                width: 100%;
            }

            .panel-default {
                color: #2897D4 !important;
                border: 1px solid #333;
                border-radius: 5px;
                padding: 20px;
            }

            .panel-heading {
                display: none;
            }

            .panel-heading.img:after {
                /*background: #333 url('./img/01.jpg') no-repeat !important;
    background-size: cover;*/
                content: "img";
                position: absolute;
                left: 25%;
                top: 25%;
                transform: translate(-50%, -50%);
            }

            /*.print-after {
    page-break-after: always;
    }
    .print-before {
    page-break-before: always;
    }*/
            section .panels-row .panel {
                width: 50%;
                margin: 10 auto;
            }

            a.btn.btn-primary {
                border: 3px solid #333;
                font-size: 16px;
                font-weight: 500;
                margin-bottom: 10px;
                padding: 10px 25px;
                text-transform: uppercase;

            }
        }

        .icon-item {
            text-align: center;
            margin: 10px 0;
        }

        /* Generar mas contraste con este color al texto*/
        .h3.section-title {
            color: #333;
            /* archivo tipography.scss line 43 le agrega por defecto color: #707070 */
        }

        /* Las listas despegables que se corran a la izquierda */
        .dropdown-menu-right {

            left: 0;
            right: auto;

        }

        /* Reducir padding  */
        .jumbotron .jumbotron_body {

            padding: 60px 0;

        }

        /* hover mas contraste   */
        .nav.nav-icons li a:hover i,
        .nav.nav-icons li a:focus i {

            color: #0072bb !important;
            background: #fff !important;
            box-shadow: 0px 0px 3px 2px #707070;
        }

        /* afecta tambien nav.scss line 369*/
        .nav.nav-icons.nav-icons-selected li:not(.active) a:hover i {
            color: #0072bb !important;
            background: #fff !important;
            box-shadow: 0px 0px 3px 2px #707070;

        }

        .nav.nav-icons li a span {
            color: #333;

        }

        /* que no tengan la clase active ni el hover ni el focus
  .nav.nav-icons.nav-icons-selected li:not(.active):not(:hover) a:not(:focus) i {
    background: #CCC !important;
    color: #707070 !important;
  }*/
        /* Mejorar contraste a etiqueta time en paneles noticias destacadas */
        .panel time {
            opacity: 1;
        }

        /* modificar paneles sacar headings por parrafos o span */
        .panel .h3_title,
        .h3_title {
            /* panel.scss line 34, 16, 142(transicion)*/
            font-size: 1.3em !important;
            font-weight: 500 !important;
            line-height: 1.3 !important;
            margin: .25em 0 !important;
            /*color: red; cambiar color para visualizar mejor que se esta cambiando*/
        }

        /* modificar paneles sacar headings por parrafos o span */
        .icon-item .h3_title {
            font-size: 1.6em !important;
            /* global.scss line 90*/
            margin-top: 0 !important;
            /* global.scss line 85*/
            margin-bottom: 0.2em;
            font-weight: 600;
            /*color: red; cambiar color para visualizar mejor que se esta cambiando*/
        }

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            /*background: 'http://localhost:3000/public/wait.gif' 50% 50% no-repeat rgb(249,249,249);*/
            /*background: './public/wait.gif' 50% 50% no-repeat rgb(249,249,249);*/
            opacity: .8;
        }
    </style>
<!-- -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script>
        function pruebaDivAPdf() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            source = $('#imprimir')[0];
            specialElementHandlers = {
                '#bypassme': function(element, renderer) {
                    return true
                }
            };
            margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
            };
            pdf.fromHTML(
                source,
                margins.left, // x coord
                margins.top, { // y coord
                    'width': margins.width,
                    'elementHandlers': specialElementHandlers
                },
                function(dispose) {
                    pdf.save('Prueba.pdf');
                }, margins
            );
        }
    </script>
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<body>

    <main role="main">
        <!--<section class="jumbotron" style="background-image: url('../img/modernizacion.jpg');">-->
        <section class="jumbotron" style="background-image: url('../img/testeo.jpg');">
            <div class="jumbotron_bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb pull-left">
                                <li><a href="../index.php">Argentina</a></li>
                                <li class="active"><span>Provincia de Buenos Aires</span></li>
                                <li class="active"><span>Región Sanitaria I</span></li>
                                <li class="active"><span>Centros de Testeo Rápido COVID-19</span></li>
                            </ol>
                            <ul class="list-inline pull-right m-r-3">
                                <li>
                                    <div class="dropdown">
                                        <ul class="list-inline pull-right">
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" id="jumbo-menu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Institucional
                                                        <!--<span class="caret"></span>-->
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="jumbo-menu3">
                                                        <?php if ((null !== $usuario_actual) && ("" !== $usuario_actual)) { ?>
                                                            <li><a><?php echo $usuario_actual ?></a></li>
                                                            <li><a href="../sign-in/index.php?Salir=1">Cerrar sesión</a></li>
                                                        <?php } else {
                                                        ?>
                                                            <li><a href="../sign-in/">Iniciar sesión</a></li>
                                                        <?php
                                                        } ?>

                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>



                        </div>
                    </div>
                </div>
            </div>
            <div class="loader"></div>