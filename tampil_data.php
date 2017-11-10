<table border="1">
<tr>
	<th>No</th>
	<th>Nama</th>
	<th>Hobi</th>
	<th>Tanggal Lulus</th>
</tr>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("anggota");
include "fungsi/fungsi_indotgl.php";

$no=1;
$p=mysql_query("select*from mahasiswa");
while($baca=mysql_fetch_array($p)){
	
	$tgl = tgl_indo($baca['tgl_lulus']);
	
	echo "<tr>
			<td>$no</td>
			<td>$baca[nama]</td>
			<td>$baca[hobi]</td>
			<td>$tgl</td>
		  </tr>";
$no++;
}

?>
</table>
<br>
<a href="pdf_mysql.php">Cetak File PDF</a> || 
<a href="index.php">Home</a>

