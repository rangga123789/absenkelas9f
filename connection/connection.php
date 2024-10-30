<?php

$hostname = "23pwe.h.filess.io";
$username = "ABSENSI_discovery";
$password = "25995ce1a9136d135a50ca2bf2660a27a6c28df5";
$database_name = "ABSENSI_discovery";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
echo "koneksi gagal";
die('error!!');
}

?>