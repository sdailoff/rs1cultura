<?php
/**
 * Created by PhpStorm.
 * User: ssdai
 * Date: 23/3/2019
 * Time: 19:06
 */

class classFunciones
{
   public function getFileName(){
       $fileName = "";

       date_default_timezone_set('America/Argentina/Buenos_Aires');
       $dated = getdate();

       $hoursOfDay = $dated['hours']; // 0 | 23
       $dateOfWeek = $dated['wday'];//Dom: 0 || Sab: 6
       $weekOfMonth = (0 | $dated['mday'] / 7)+1;
       $dias=["0DOM", "1LUN", "2MAR", "3MIE", "4JUE", "5VIE", "6SAB"];

       if ($hoursOfDay*1 != 0) {
           $hoursOfDay = $hoursOfDay*1 < 10 ? "0".$hoursOfDay : $hoursOfDay;
           $fileName = "Hourly_" . $hoursOfDay;
       }
       else{
           if($dateOfWeek*1 != 6){ //Case "AD": BCK daily, else if DD=Saturday (6)
               $fileName = "Daily_" . $dias[$dateOfWeek];
           }
           else {
               if ($weekOfMonth * 1 != 1){ // CASE "ACF": BCK weekly, else if WW == 1
                   $fileName = "Weekly_W" . $weekOfMonth;
               } else { //CASE "ACE": BCK monthly, the first saturday
                   $fileName = "Monthly_" . date("m") . $dated['month'];
               }
           }
       }

    return $fileName;
   }

    public function fechaHora(){

        $Fecha = getdate();

        $dia = $Fecha['mday'];
        $mes = $Fecha['mon'];
        $year = $Fecha['year'];
        if ($mes<10){
            $mes = '0' . $mes;
        }
        if ($dia<10){
            $dia = '0' . $dia;
        }

        $Hora = getdate();

        $h = $Hora['hours'];
        $m = $Hora['minutes'];
        $s = $Hora['seconds'];
        if ($h<10){
            $h = '0' . $h;
        }
        if ($m<10){
            $m = '0' . $m;
        }
        if ($s<10){
            $s = '0' . $s;
        }
        return($dia."/".$mes."/".$year. "T" .$h .":".  $m.":".$s);

    }
    public function fechaHoraPed(){

        $Fecha = getdate();

        $dia = $Fecha['mday'];
        $mes = $Fecha['mon'];
        $year = $Fecha['year'];
        if ($mes<10){
            $mes = '0' . $mes;
        }
        if ($dia<10){
            $dia = '0' . $dia;
        }

        $Hora = getdate();

        $h = $Hora['hours'];
        $m = $Hora['minutes'];
        $s = $Hora['seconds'];
        if ($h<10){
            $h = '0' . $h;
        }
        if ($m<10){
            $m = '0' . $m;
        }
        if ($s<10){
            $s = '0' . $s;
        }
        return($year."-".$mes."-".$dia."T".$h .":".$m.":".$s);

    }

    public function fechaHoraAUD(&$fecha, &$hora){

        $Fecha = getdate();

        $dia = $Fecha['mday'];
        $mes = $Fecha['mon'];
        $year = $Fecha['year'];
        if ($mes<10){
            $mes = '0' . $mes;
        }
        if ($dia<10){
            $dia = '0' . $dia;
        }

        $Hora = getdate();

        $h = $Hora['hours'];
        $m = $Hora['minutes'];
        $s = $Hora['seconds'];
        if ($h<10){
            $h = '0' . $h;
        }
        if ($m<10){
            $m = '0' . $m;
        }
        if ($s<10){
            $s = '0' . $s;
        }
        $fecha = $year."-".$mes."-".$dia;
        $hora = $h .":".$m.":".$s;
    }

    public function fechaHoraBCK(){

        $Fecha = getdate();

        $dia = $Fecha['mday'];
        $mes = $Fecha['mon'];
        $year = $Fecha['year'];
        if ($mes<10){
            $mes = '0' . $mes;
        }
        if ($dia<10){
            $dia = '0' . $dia;
        }

        $Hora = getdate();

        $h = $Hora['hours'];
        $m = $Hora['minutes'];
        $s = $Hora['seconds'];
        if ($h<10){
            $h = '0' . $h;
        }
        if ($m<10){
            $m = '0' . $m;
        }
        if ($s<10){
            $s = '0' . $s;
        }
        return($year."-".$mes."-".$dia."_".$h .".".$m.".".$s);

    }
    public function ColoresUrgencia($cantDias){

        switch ($cantDias){
            case 0:
            {
                $rgb = "90E467";
                break;
            }
            case 1:
            {
                $rgb = "BAE467";
                break;
            }
            case 2:
            {
                $rgb = "E4E467";
                break;
            }
            case 3:
            {
                $rgb = "E4BA67";
                break;
            }
            case 4:
            {
                $rgb = "E49067";
                break;
            }
            case 5:
            {
                $rgb = "E46767";
                break;
            }
            default:{
                $rgb = "E46767";
                break;
            }

        }

        return $rgb;
    }
}