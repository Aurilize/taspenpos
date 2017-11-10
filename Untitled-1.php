<?php 
include "config.php";
$tgl_fiat=$_POST['tgl_fiat'];
$tgl_bayar=$_POST['tgl_bayar'];
$cari=mysql_query("select * from inputtaspen where tgl BETWEEN '$tgl_fiat′ AND '$tgl_ambil'");
?>

