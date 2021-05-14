<?php

/*  setcookie(nombre,valor,expira)  */


$fecha=date_create("2013-05-01");
date_time_set($fecha,23,10);
$visita = date_format($fecha,"Y-m-d H:i:s");

setcookie("ultimaVisita",$visita,time()+60*60);

?>



