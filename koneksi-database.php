<?php
$host = "localhost";
$user_name = "root";
$password = "";
$database = "db_tenun";

$koneksi = mysql_connect($host, $user_name, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);

//if ($pilihdatabase) echo"Berhasilkonek";
 //else echo "Gagal Koneksi";
?>