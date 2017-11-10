<?php
ob_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center"><h4>PEMERINTAH KABUPATEN PURBALINGGA</h4>
  <h4>BADAN PERENCANAAN PEMBANGUNAN DAERAH</h4>
  <p> Jalan Jambu Karang No. 8 Telepon (0281) 891450 Fax (0281) 895194</p>
</div>
<p>&nbsp;</p>
<p>Nomor	: 071 / 1063 / 2014</p>
<p>Lampiran : </p>
<p>Perihal : Izin Survey / Pra Survey / Uji Validitas</p>
<p>&nbsp;</p>
<p>	Menampilkan data dalam jumlah banyak dalam satu halaman bukanlah   pilihan yang baik. Selain membuat load database menjadi besar, dari sisi   user juga tentu tidak nyaman untuk selalu men-<em>scroll</em> halaman   hingga ratusan bahkan ribuan baris data. Untuk itu diperlukan pemecahan   data menjadi beberapa halaman dengan jumlah data yang terbatas setiap   halamannya (misalkan 20 – 50 data per halaman). Menurut surat dari Kantor Kesbangpol yang bernomor : </p>
<p>&nbsp;</p>
<div align="center">
  <table width="450" border="0">
    <tr>
      <td width="220">Nama : </td>
      <td width="220">NIM :</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Pekerjaan</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Tujuan</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td >Waktu</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Lokasi</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p align="left">Menampilkan data dalam jumlah banyak dalam satu halaman bukanlah   pilihan yang baik. Selain membuat load database menjadi besar, dari sisi   user juga tentu tidak nyaman untuk selalu men-<em>scroll</em> halaman   hingga ratusan bahkan ribuan baris data. Untuk itu diperlukan pemecahan   data menjadi beberapa halaman dengan jumlah data yang terbatas setiap   halamannya (misalkan 20 – 50 data per halaman). </p>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;</p>
  <p align="justify">Kepala Bappeda</p>
  <p align="justify">Kabupaten Purbalingga</p>
  <p align="justify">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <p align="justify">Ir. Setiyadi</p>
  <p align="justify">NIP. 1345678967890</p>
  <p align="justify">TEMBUSAN : disampaikan kepada Yth :</p>
  <p align="justify">1.</p>
  <p align="justify">2. </p>
  <p align="justify">3. </p>
</div>
<p>&nbsp;</p>
</body>
</html>

<?php
$konten = ob_get_clean();

include_once "./html2pdf/html2pdf.class.php";
try {
	$html2pdf = new HTML2PDF('P', 'A4');
	$html2pdf->writeHTML($konten);
	$html2pdf->Output();
}
catch (HTML2PDF_exception $e){
	echo $e;
	exit;
}
?>