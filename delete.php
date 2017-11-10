<?php
include"config.php";
error_reporting(0);
$no_cek=$_GET['no_cek'];
$no_rek=$_GET["no_rek"];
$hapus=mysql_query("delete from inputtaspen where no_cek='$no_cek' and no_rek='$no_rek'");
require_once('index.php');
?>
