<?php
$usuario_actual = "";
$status = session_status();
if ($status == PHP_SESSION_NONE) {
    session_start();
}

include("../layout/header.php");
$login_ok = isset($_SESSION["login_ok"]) ? $_SESSION["login_ok"] : '';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //Primera vez que ingresa
    if (isset($_GET['Salir'])) {
        if ($_GET['Salir'] = '1') {
            //  session_start();
            session_unset();
            session_destroy();
?>
            <script type="text/javascript">
                window.location = 'index.php';
            </script>

            <?php
        }
    }
}

if (!($login_ok == "identificado")) {

    require '../classes/classUsuario.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ((isset($_POST['usuario'])) && (isset($_POST['contrasena']))) {

            $U = new classUsuario();

            $U->usuario = strtoupper($_POST['usuario']);

            if ($U->ValidarUsuarioLOGIN($U->id, $_POST['usuario'], $_POST['contrasena'])) {

                $usuario = $_POST['usuario'];
                $_SESSION["login_ok"] = "identificado";
                $_SESSION["usu_usuario"] = $usuario;

                //$U->insertarLogin($U);

            ?>
                <script type="text/javascript">
                    window.location = '../main/';
                </script>
            <?php
            } else {
            ?>
                <script type="text/javascript">
                    window.location = 'login.php#popup';
                </script>
    <?php
            }
        };
    }

    if ((isset($_SESSION['usu_usuario'])) || (isset($_COOKIE['usu_usuario']))) {
        $usuario_actual = (isset($_SESSION['usu_usuario'])) ? $_SESSION['usu_usuario'] : $_COOKIE['usu_usuario'];
    }


    ?>
    </section>
    <!-- Custom styles for this template -->
    <link href="../CF/form-validation.css" rel="stylesheet">
    <link href="../CF/estilos.css" rel="stylesheet">
    <script language="JavaScript">
        function Salir() {
            window.location = 'index.php?Salir=1';
        }
    </script>

    <!--<img id="estirada" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" src="../img/fondo.jpg"/>-->

    <div class="modal-wrapper" id="popup">
        <div class="popup-contenedor" align="center">
            <div style="background: lightseagreen; color: lightseagreen;">.</div>
            <!--<img src="img/error.jpg" width="150px" height="150px">-->
            <p align="center"><b>¡Usuario o clave incorrectos!</b></p>
            <button class="btn-info btn-lg btn-info" onclick="window.location='#'"><a style="text-decoration: none; color: white;" href="#">¡OK!</a></button>
        </div>
    </div>
    
    <div class="row justify-content-center mt-5 mb-5 " align="center">
        <form class="form-signin col-md-4" method="POST" action="index.php">
            <h1 class="h3 mb-4 font-weight-normal">Iniciar sesión</h1>
            <label for="usuario" class="sr-only">Usuario</label>
            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <label for="contrasena" class="sr-only">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" required>
            <button class="btn-lg btn-primary btn-block mt-4" type="submit">Iniciar sesión</button>
        </form>
    </div>


<?php

} else {

?>
    <script type="text/javascript">
        window.location = '../main/';
    </script>
<?php
}
include("../layout/footer.php");
?>