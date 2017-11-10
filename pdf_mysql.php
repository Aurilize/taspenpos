<?php
//memanggil class ezpdf
include ('class.ezpdf.php');
//menciptakan objek pdf
$pdf	= new Cezpdf();

mysql_connect("localhost", "root", "");
mysql_select_db("anggota");
include "fungsi/fungsi_indotgl.php";

$r	= mysql_query("select*from mahasiswa");

$no	= 1;
while($s = mysql_fetch_array($r)){
	$tgl = tgl_indo($s['tgl_lulus']);
	$data[$no]=array(
				'No' => $no,
				'Nama Mahasiswa' => $s[nama],
				'Hobi' => $s[hobi],
				'Tanggal Lulus' => $tgl,
			);
$no++;
}
$options=array('shaded'=>0, 'width'=>400);
//tampilkan data dalam tabel
$pdf->ezTable($data, '', 'Hobi Mahasiswa USM', $options);
//tampilkan dokumen pdf pada browser
$pdf->ezStream();
?>
