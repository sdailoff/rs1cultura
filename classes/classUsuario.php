<?php
/**
 * Created by PhpStorm.
 * User: ssdai
 * Date: 22/3/2019
 * Time: 19:56
 */

require_once 'classConexion.php';

class classUsuario
{
    public $id=0;
    public $user ="";
    public $name ="";
    public $password ="";


    public function Listar(){

        $con =  new classConexion();
        $con -> Conectarse();
        $sql  = "SELECT id, name FROM users where name not like ('%Usuario%') ORDER BY name";

        $rs  = mysqli_query($con ->link(), $sql);
        $con -> Desconectarse();

        if ($rs){
            while ($row = mysqli_fetch_assoc($rs)):?>
                <option value="<?=$row['id']?>"><?=utf8_encode($row['name'])?></option>
            <?php endwhile;
        }
    }

    public function ListarMod($user){

        $con =  new classConexion();
        $con -> Conectarse();
        $sql  = "SELECT id, name FROM users where name not like ('%Usuario%') ORDER BY name";

        $rs  = mysqli_query($con ->link(), $sql);
        $con -> Desconectarse();

        if ($rs){
            while ($row = mysqli_fetch_assoc($rs)) {
                ?>
                <option <?php if (strtolower($user)== strtolower(utf8_encode($row['name']))) echo "selected"; ?> value="<?=$row['id']?>"><?=utf8_encode($row['name'])?></option>
            <?php }
        }
    }

    public function ListarPred(){

        $con =  new classConexion();
        $con -> Conectarse();
        $sql  = "SELECT id, name FROM users where name like('%Luciano%') ORDER BY name";

        $rs  = mysqli_query($con ->link(), $sql);
        $con -> Desconectarse();

        if ($rs){
            while ($row = mysqli_fetch_assoc($rs)):?>
                <option value="<?=$row['id']?>"><?=utf8_encode($row['name'])?></option>
            <?php endwhile;
        }
    }

    public function ListarSD(){

        $con =  new classConexion();
        $con -> Conectarse();
        $sql  = "SELECT id, nombre FROM Usuarios where nombre like('%Sofia%') ORDER BY nombre";

        $rs  = mysqli_query($con ->link(), $sql);
        $con -> Desconectarse();

        if ($rs){
            while ($row = mysqli_fetch_assoc($rs)):?>
                <option value="<?=$row['id']?>"><?=utf8_encode($row['nombre'])?></option>
            <?php endwhile;
        }
    }

    public function IDsegunNombre($nombre){
        $resu = 0;
        $con =  new classConexion();
        $con -> Conectarse();
        $sql  = "SELECT id FROM users where name='".$nombre."'";

        $rs  = mysqli_query($con ->link(), $sql);
        $con -> Desconectarse();

        if ($rs){
            $row = mysqli_fetch_assoc($rs);
            $resu = $row['id'];
        }
        return $resu;
    }

    public function IDsegunNombreUSER($nombre){
        $resu = 0;
        $con =  new classConexion();
        if ($con -> Conectarse())
        {
            $sql  = "SELECT id FROM users where user='".$nombre."'";

            $rs  = mysqli_query($con ->link(), $sql);
            $con -> Desconectarse();

            if ($rs){
                $row = mysqli_fetch_assoc($rs);
                $resu = $row['id'];
            }
        }

        return $resu;
    }

    public function NombreSegunID($ID){
        $resu = "";
        $con =  new classConexion();
        $con -> Conectarse();
        $sql  = "SELECT name FROM users where id=".$ID;

        $rs  = mysqli_query($con ->link(), $sql);
        $con -> Desconectarse();

        if ($rs){
            $row = mysqli_fetch_assoc($rs);
            $resu = $row['name'];
        }
        return $resu;
    }

    /************************/

    public function altaUsuario($A){
        $con =  new classConexion();
        $con -> Conectarse();
        $sql = "INSERT INTO `users` (`user`, `name`) values ('".utf8_decode(strtoupper($A->user))."', '".utf8_decode(strtoupper($A->name))."')";
        $rs  = mysqli_query($con ->link(), $sql);
        $con -> Desconectarse();
    }

    public function ModificarUsuario($A){
        $con =  new classConexion();
        $con -> Conectarse();
        $sql = "UPDATE `users` set `name`='".utf8_decode(strtoupper($A->name))."' where `id`=" . $A->id;
        $rs = mysqli_query($con ->link(), $sql);
        $con -> Desconectarse();

    }

    public function obtenerUsuario(&$A){
        $con =  new classConexion();
        $con -> Conectarse();
        $sql = "Select `user`, `name` from users where `id` = ".$A->id;
        $rs  = mysqli_query($con ->link(), $sql);

        if($rs){
            $row = mysqli_fetch_assoc($rs);
            $A->usuario = utf8_encode($row['user']);
            $A->descripcion = utf8_encode($row['name']);
        }

        $con -> Desconectarse();
    }

    public function EliminarUsuario($A){
        $con = new classConexion();
        $con->Conectarse();

        $sql = "DELETE FROM `usuario` WHERE `id` = " . $A ->id;
        $rs = mysqli_query($con->link(), $sql);
        $con->Desconectarse();

    }

    public function limpiarVariables(&$A)
    {
        $C = new classConexion();
        $C->Conectarse();
        $A->id = mysqli_real_escape_string($C->link(), $A->id);
        $A->user = mysqli_real_escape_string($C->link(), $A->user);
        $A->name = mysqli_real_escape_string($C->link(), $A->name);
        $C->Desconectarse();
    }

    public function ValidarUsuarioLOGIN(&$id, $usuario, $pass)
    {
        $A = new classUsuario();
        if ($usuario != "EXTERNO"){
            $con = new classConexion();
            $con->Conectarse();

            $sql = "SELECT id, password FROM users where user='" . strtoupper($usuario) . "'";
            echo "<script>console.log( 'Debug Objects: " .  $sql. "' );</script>";
            $rs = mysqli_query($con->link(), $sql);
            if($rs) {
                $row = mysqli_fetch_assoc($rs);
                $id = utf8_encode($row['id']);

                $A->password = utf8_encode($row['password']);
                
            }
            $con->Desconectarse();
            if (password_verify( $pass, $A->password))
                return true;
            else
                return false;
        }
        else
            return false;
    }

    public function CambiarPass($U)
    {
        try{
            $con = new classConexion();
            $con->Conectarse();
            $U->password = password_hash(strtoupper($U->password), PASSWORD_DEFAULT);
            $sql = "Update Usuarios set password='" . $U->password . "' where user='" . strtoupper($U->usuario) . "'";
            $rs = mysqli_query($con->link(), $sql);
            $con->Desconectarse();

            if ($rs){
                return true;
            }
            else
                return false;

        }
        catch(Exception $e){
            echo $e->getMessage();

            return false;
        }

    }

   public function insertarLogin($U)
    {
        try{
            include 'classFunciones.php';
            $F = new classFunciones();
            $con = new classConexion();
            $con->Conectarse();
            $sql = "insert into Logins (idUser, fecha, IP) values (". $U->id. ", '". $F->fechaHoraPed(). "', '".$_SERVER["REMOTE_ADDR"]."')";

            $rs = mysqli_query($con->link(), $sql);

            $con->Desconectarse();
            return true;
        }
        catch(Exception $e){
            echo $e->getMessage();

            return false;
        }
    }
}