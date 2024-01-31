<?php

// if($ShowPhpErrorCode){
//   ini_set('display_errors', 1);
//   error_reporting(E_ALL ^ E_NOTICE);
// }

//Config MYSQL Database
$dbhost = 'localhost'; 
$dbuser = 'root';       
$dbpass = '';

$restloc_signup        = "../INCNews_Back_End/backend_incnews/";
setcookie("restloc_signup", htmlentities($restloc_signup));

$connect  = new mysqli($dbhost,$dbuser,$dbpass,'incnews');
if ($connect->connect_error)  { die('Maaf koneksi gagal: '. $connect->connect_error); }
?>