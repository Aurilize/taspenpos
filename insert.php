<?php
error_reporting(0);
include"config.php";
$no_cek=$_POST['no_cek'];
$no_rek=$_POST['no_rek'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kantor_bayar=$_POST['kantor_bayar'];
$nominal=$_POST['nominal'];
$tgl_fiat=$_POST['tgl_fiat'];

$simpan=mysql_query("insert into inputtaspen (no_cek, no_rek, nama, alamat, kantor_bayar, nominal, tgl_fiat) values ('$no_cek', '$no_rek', '$nama', '$alamat', '$kantor_bayar', '$nominal', '$tgl_fiat');");
if(mysql_query($simpan)){
echo "<meta http-equiv=refresh content=0;url=index.php>";
echo "<script type='text/javascript'> alert ('Data berhasil ditambah') </script>";
require_once "index.php";
}
else{
echo "<meta http-equiv=refresh content=0;url=index.php>";
echo "<script type='text/javascript'> alert ('Data gagal ditambah') </script>";
require_once "index.php";
}
?>