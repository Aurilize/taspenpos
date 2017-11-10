<?php
include("config.php");
include "fungsi/fungsi_indotgl.php";
$tgl_awal=$_POST['tgl_awal'];
$tgl_akhir=$_POST['tgl_akhir'];
$tgl1=tgl_indo($tgl_awal);
$tgl2=tgl_indo($tgl_akhir);
$cari= mysql_query ("select * from inputtaspen where tgl_fiat between '$tgl_awal' and '$tgl_akhir'");
$hitung= mysql_num_rows ($cari);

if ($hitung==0){
	echo "Silahkan masukkan tanggal";
}
else {
	?>
    <h4> Data taspen tanggal <?php echo "$tgl1"; ?> sampai <?php echo "$tgl2"; ?>
    <table border="1">
    <tr>
    <td><center><b>No</b></center></td>
        	<td><center><b>No. Cek</b></center></td>
            <td><center><b>No. Rek</b></center></td>
            <td><center><b>Nama</b></center></td>
            <td><center><b>Alamat</b></center></td>
            <td><center><b>Kantor Bayar</b></center></td>
            <td><center><b>Nominal</b></center></td>
            <td><center><b>Tgl. Fiat</b></center></td>
            <td><center><b>Tgl. Ambil</b></center></td>
            </tr>
            <?php 
			$i = 1;
			while ($data=mysql_fetch_array($cari)){
				$tgl_fiat= tgl_indo($data['tgl_fiat']);
				$tgl_ambil= tgl_indo($data['tgl_ambil']);
				echo "
				<tr>
<td> $i </td>
<td>$data[no_cek]</td>
<td>$data[no_rek]</td>
<td>$data[nama]</td>
<td>$data[alamat]</td>
<td>$data[kantor_bayar]</td>
<td>Rp. $data[nominal]</td>
<td>$tgl_fiat</td>
<td>$tgl_ambil</td>
</tr>";
$i++;
			}
			echo "</table>";
}


 ?>