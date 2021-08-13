<?php
$status = session_status();

if($status == PHP_SESSION_NONE) {
    session_start();
}

$login_ok = isset($_SESSION["login_ok"]) ? $_SESSION["login_ok"] : '';

if ($login_ok == "identificado") {

    global $usuario_actual;
    global $msj;
    global $tipo_de_mensaje;
    $usuario_actual = isset($_SESSION['usu_usuario']) ? $_SESSION['usu_usuario'] : '';
    require_once '../Clases/classUsuario.php';
    require_once '../Clases/classConexion.php';

    $C = new classConexion();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ((isset($_POST['usuario'])) && (isset($_POST['contrasena']))) {

            $U = new classUsuario();
            $U->usuario = $usuario_actual;
            $U->password = mysqli_real_escape_string($C->link(), $_POST['contrasena']);

            if ($U->CambiarPass($U)){
                ?>
                <script>
                    window.location='index.php';
                </script>
                <?php
            }
            else
            {
                $msj = "Ocurrió un error";
                $tipo_de_mensaje = "negativo";
            }
        }
    }
?>
    <!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/log.ico">

    <title>Restauración</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../CF/form-validation.css" rel="stylesheet">
    <link href="../CF/estilos.css" rel="stylesheet">

    <?php

    include '../CF/encabezadoINI.php';

    if($msj != ""){
        ?>
        <script type="text/javascript">
            window.location = '#popupSuccess';
        </script>
        <div class="modal-wrapper" id="popup">
            <div class="popup-contenedor" align="center">
                <?php
                if ($tipo_de_mensaje == 'positivo'){
                    echo "<div style=\"background: lightseagreen; color: lightseagreen;\">.</div>";
                }
                else{
                    echo "<div style=\"background: red; color: whitesmoke;\">¡ E R R O R !</div>";
                }
                echo "<br><p align=\"center\"><b>". $msj ."</b></p><br>";

                if ($tipo_de_mensaje == 'negativo'){
                    echo "<button class=\"btn-success btn-lg btn-success\" onclick=\"window.location='#'\"><a style=\"text-decoration: none; color: white;\" href=\"#\">¡OK!</a></button>";
                }
                ?>
                <button class="btn-info btn-lg btn-info" onclick="window.location='index.php'"><a style="text-decoration: none; color: white;" href="#">¡OK!</a></button>
            </div>
        </div>
    <?php }
    ?>

    <div class="col-md-4 mb-3" style="margin:auto;">

        <div class="container" align="center">
            <div class="col-4" align="right">
            <label>Restablecer password a: </label>
        </div>
        <div class="col-6 mt-2" align="center">
            <select class="custom-select d-block w-100" name="tecnico" id="tecnico" required>
                <option value="">Técnico...</option>
                <?php
                $Usu = new classUsuario();
                $Usu->Listar();
                ?>
            </select>
        </div>
        <div class="col-2" align="center">
            <button class="btn btn-outline-primary btn-lg" type="submit">Restablecer</button>
        </div>
        </div>

    </div>
    
    
    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script async >window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script async src="../bootstrap-4.1.1/assets/js/vendor/popper.min.js"></script>
    <script async src="../bootstrap-4.1.1/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script async src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <!-- Graphs -->

    <script async src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <div class="col-md-12 footerPage" align="center">
        <footer class="text-muted text-center text-small">
            &copy; 2019 - Sofía Dailoff
        </footer>
    </div>
    </body>
    </html>
    <?php
}
else{
    ?>
    <script type="text/javascript">
        window.location = '../sign-in/index.php';
    </script>
    <?php
}

?>
