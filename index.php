<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TASPEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300'>

<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  </head>
  <body>
<div class="container-fluid color-5">
				<nav class="nav-2">
					<a href="index.php">Home</a>
					<a href="input.php">Tambah Data</a>
					<a href="cetak.php">Cetak</a>
				</nav>
</div>
  <div class="container">
  <br>
  <br>
  <h1><center>Data Taspen</center></h1>
  <?php
error_reporting(0);
include"config.php";
$limit = 15;
       
        if(!isset($_GET['page']))
        {
                $position=0;
                $page=1;
        }
        else
        {
                $page = $_GET['page'];
                $position = ($page-1) * $limit;
        }
$result =mysql_query("SELECT * FROM inputtaspen LIMIT $position,$limit");
?>
<!--$per_page = 5;
$page_query = mysql_query("SELECT COUNT(*) FROM inputtaspen");
$pages = ceil(mysql_result($page_query, 0) / $per_page);

$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_page;

?>-->
<br>
<table class="table table-bordered">
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
            <td><center><b>Keterangan</b></center></td>
            <td></td>
</tr>
<?php
$i=$position +1;
$row='no_cek';
while($row = mysql_fetch_array($result))
{
echo "<tr>
<td> $i </td>
<td>$row[no_cek]</td>
<td>$row[no_rek]</td>
<td>$row[nama]</td>
<td>$row[alamat]</td>
<td>$row[kantor_bayar]</td>
<td>Rp. $row[nominal]</td>
<td>$row[tgl_fiat]</td>
<td>$row[tgl_ambil]</td>
<td></td>            
<td><a href=update.php?no_cek=$row[no_cek]&&no_rek=$row[no_rek]><span class='glyphicon glyphicon-floppy-open' style='color:00CED1'></span></a>&nbsp;&nbsp;
<a href=delete.php?no_cek=$row[no_cek]&&no_rek=$row[no_rek]><span class='glyphicon glyphicon-remove' style='color:Red'></span></a></td>
</tr>";
$i++;
}
echo "</table>";
?>
	
</td>
</tr>
</table>
<?php
$query_total = mysql_query("SELECT * FROM inputtaspen");
$total = mysql_num_rows($query_total);
echo "Total Data = " . $total;
        echo "<br /><br />";
		$all_page = ceil($total/$limit);
 
        for($a=1;$a<=$all_page;$a++)
        if ($a != $page)
        {
                echo " <a href=index.php?page=".$a.">".$a."</a> | ";
        }
        else
        {
                echo " <b>" .$a."</b> | ";
        }
?>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>