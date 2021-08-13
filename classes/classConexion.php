<?php

/** *********************************
 * Definción de zona horaria
 ********************************* */
date_default_timezone_set('America/Argentina/Buenos_Aires');
//header("Content-Type: text/html;charset=utf-8");

/** *********************************
 * Constante para conexión al servidor de Bases de datos
 ********************************* */
/*define('DB_HOST','sql210.eshost.com.ar');
define('DB_USER',  'eshos_21943194');
define('DB_PASSWORD', 'cira9716');//
define('DB_DATABASE_NAME', 'eshos_21943194_informatica');
define('DB_CHARSET', 'utf8');

*/
define('DB_HOST','185.201.11.44');
//define('DB_HOST','localhost');
define('DB_USER',  'u607150143_rs1');
define('DB_PASSWORD', 'ZMXB7vutX3[');
define('DB_DATABASE_NAME', 'u607150143_ctesteo');
define('DB_CHARSET', 'utf8');


class classConexion{

    public $conexion;

    public function DBHost(){
        return DB_HOST;
    }
    public function DBUser(){
        return DB_USER;
    }
    public function DBPassword(){
        return DB_PASSWORD;
    }
    public function DBName(){
        return DB_DATABASE_NAME;
    }
    public function DBCharset(){
        return DB_CHARSET;
    }

    public function Conectarse(){

        @ $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE_NAME);
        if (!$conexion) {
            return false;
        }
        else{
            mysqli_set_charset($conexion, 'utf8');
            return true;
        }

    }

    public function link(){
        return $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE_NAME);
    }
    public function Desconectarse(){
        @ $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE_NAME);
        mysqli_close($conexion);
    }
}
