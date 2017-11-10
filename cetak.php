<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="development-bundle/themes/base/ui.all.css" />
    <script type="text/javascript" src="development-bundle/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="development-bundle/ui/ui.core.js"></script>
<script type="text/javascript" src="development-bundle/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#tgl_awal").datepicker({
		altFormat : "dd MM yyyy",
		changeMonth : true,
		changeYear : true 
		});
	$("#tgl_awal").change(function() {
		$("#tgl_awal").datepicker("option", "dateFormat", "yy-mm-dd");
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("#tgl_akhir").datepicker({
		altFormat : "dd MM yyyy",
		changeMonth : true,
		changeYear : true 
		});
	$("#tgl_akhir").change(function() {
		$("#tgl_akhir").datepicker("option", "dateFormat", "yy-mm-dd");
	});
});
</script>
  </head>
  <body>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
    <ul class="nav nav-pills navbar-nav">
    <a class="navbar-brand" href="#" style="font-family:'Lobster 1.4'; color:#FFF">Taspen</a>
  <li role="presentation"><a href="index.php">Home</a></li>
  <li role="presentation"><a href="input.php">Tambah Data</a></li>
  <li role="presentation"  class="active"><a href="#">Cetak</a></li>
  </ul>
  </div>
  </nav>
  <div class="container-fluid">
  <br>
  <br>
  <br>
  <form class="form-inline" role="form" method="post" action="cari.php" >
   <div class="form-group">
    <label class="col-md-1 control-label" for="tgl_awal">Dari</label>
    <div class="col-md-3"> 
     <input type="text" class="form-control" id="tgl_awal" placeholder="Tanggal Awal" name="tgl_awal"></div>
     <div class="col-md-2"></div>
     <label class="col-md-2 control-label" for="tgl_akhir">Sampai</label>
    <div class="col-md-3"> 
     <input type="text" class="form-control" id="tgl_akhir" placeholder="Tanggal Akhir" name="tgl_akhir"></div>
     </div>
     <div class="col-md-5"><div class="col-md-12"></div>
     
     <button type="submit" class="btn btn-default">Cari</button></div>
     
  </form>
  </div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>