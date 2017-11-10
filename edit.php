<?php 
include 'config.php';
error_reporting(0);
//mengambil nilai dari form di bawah  
$no_cek=$_POST['no_cek'];
$no_rek=$_POST['no_rek'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kantor_bayar=$_POST['kantor_bayar'];
$nominal=$_POST['nominal'];
$tgl_fiat=$_POST['tgl_fiat'];
$tgl_ambil=$_POST['tgl_ambil'];
//query untuk update data di database  
$query = "UPDATE inputtaspen SET nama='$nama', alamat='$alamat', kantor_bayar='$kantor_bayar', nominal='$nominal', tgl_fiat='$tgl_fiat', tgl_ambil='$tgl_ambil' WHERE no_cek='$no_cek' and no_rek='$no_rek'" ;  
$hasil = mysql_query($query);      
require_once "index.php";             
?> 