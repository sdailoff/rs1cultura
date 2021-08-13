<?php
require_once '../Clases/classConexion.php';

$C = new classConexion();
$C->Conectarse();

session_start();

// Si se recibe el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Si se recibió un usuario y contraseña
    if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {
        $usuario = mysqli_real_escape_string($C->link(), $_POST['usuario']);
        $contrasena = mysqli_real_escape_string($C->link(), $_POST['contrasena']);
        @ $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE_NAME);
        if (!$link) {
            echo "Error";
            die;
        }
        mysqli_set_charset($C->link(), DB_CHARSET);

        // Se "limpian" las variables para evitar inyección SQL
        $usuario = mysqli_real_escape_string($C->link(), $usuario);
        $contrasena = mysqli_real_escape_string($C->link(), $contrasena);

        $sql = "SELECT * FROM Usuarios WHERE user = '" . strtoupper($usuario) . "' AND password = '" .strtoupper($contrasena) . "'";
        $rs = mysqli_query($C->link(), $sql);

        // Si se encontró un registro con el usuario y contraseña recibidos, significa
        // que el usuario existe en la base de datos
        if (mysqli_num_rows($rs) == 1) {

                setcookie('usu_usuario', $usuario, time() + 1);
                setcookie('usu_contrasena', '', time() + 1);
            }

            mysqli_close($C->link());
            $_SESSION['usuario'] = $usuario;
        ?>
        <script>
            window.location = '../list.php';
        </script>
        <?php

        } else {
            $mensaje = 'Usuario y/o contraseña incorrectos.';
        }



    } else {
        $mensaje = 'El ingreso de usuario y contraseña es obligatorio.';

}
?>
    <script>
        window.location = '../list.php';
    </script>
<?php

if (!empty($mensaje)) {
    ?>
    <div class="mensaje negativo">
        <?= $mensaje ?>
    </div>
    <?php
}
?>

<?php
// Se incluye el formulario de login solo si el usuario no está logueado
if (!isset($_SESSION['usuario'])) {
    $usu_usuario = $_COOKIE['usu_usuario'];
    $usu_contrasena = $_COOKIE['usu_contrasena'];
    ?>
    <script>
        window.location = 'index.php';
    </script>
    <?php
} else {
    ?>
    <h2>Usuario actual: <?= $_SESSION['usuario'] ?>.</h2>
    <?php

}
