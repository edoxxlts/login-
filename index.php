<?php
$debug= true;
if($debug){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}


include "core/autoload.php";
ob_start();
session_start();

// para ver las consultas en SQL a la bd borrar el indent de estas lineas
// Core::$debug_sql = true;


$lb = new Lb();
$lb->start();

?>