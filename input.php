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
	$("#tgl_fiat").datepicker({
		altFormat : "dd MM yyyy",
		changeMonth : true,
		changeYear : true 
		});
	$("#tgl_fiat").change(function() {
		$("#tgl_fiat").datepicker("option", "dateFormat", "yy-mm-dd");
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("#tgl_ambil").datepicker({
		altFormat : "dd MM yyyy",
		changeMonth : true,
		changeYear : true 
		});
	$("#tgl_ambil").change(function() {
		$("#tgl_ambil").datepicker("option", "dateFormat", "yy-mm-dd");
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
  <li role="presentation" class="active"><a href="input.php">Tambah Data</a></li>
  <li role="presentation"><a href="#">Cetak</a></li>
  </ul>
  </div>
  </nav>
  <div class="container">
  <br>
  <br>
    <h1><center>Tambah Data</center></h1><br>
    <br>
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
    <form class="form-inline" role="form" action="insert.php" method="post">
  <div class="form-group">
    <label class="col-md-4 control-label" for="no_cek">No. Cek&nbsp;</label>
    <div class="col-md-1">
    </div>
    <div class="col-md-6"> 
    <input type="text" class="form-control" id="no_cek" placeholder="Nomor Cek" name="no_cek" required="required"></div>
  </div>
  <br>
  <br>
  <div class="form-group">
    <label class="col-md-5 control-label" for="no_rek">No. Rekening</label>
    <div class="col-md-4">
    <input type="text" class="form-control" id="no_rek" placeholder="Nomor Rekening" name="no_rek" required="required"></div>
  </div>
  <br>
  <br>
   <div class="form-group">
    <label class="col-md-4 control-label" for="nama">Nama&nbsp;&nbsp;&nbsp;&nbsp;</label> 
    <div class="col-md-1">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"></div>
  </div>
  <br>
  <br>
   <div class="form-group">
    <label class="col-md-4 control-label" for="alamat">Alamat&nbsp;&nbsp;</label>
    <div class="col-md-1">
    </div> 
    <div class="col-md-6">
    <textarea class="form-control" rows="3" name="alamat" cols="22" id="alamat"></textarea></div>
  </div>
  <br>
  <br>
   <div class="form-group">
    <label class="col-md-5 control-label" for="kantor_bayar">Kantor Bayar</label>
    <div class="col-md-6"> 
    <input type="text" class="form-control" id="kantor_bayar" placeholder="Kantor Bayar" name="kantor_bayar"></div>
  </div>
  <br>
  <br>
   <div class="form-group">
    <label class="col-md-4 control-label" for="nominal">Nominal</label>
    <div class="col-md-1">
    </div>
    <div class="col-md-6"> 
    <input type="text" class="form-control" id="nominal" placeholder="Nominal" name="nominal"></div>
  </div>
  <br>
  <br>
   <div class="form-group">
    <label class="col-md-5 control-label" for="tgl_fiat">Tanggal Fiat  </label> 
    <div class="col-md-6">
    <input type="text" class="form-control" id="tgl_fiat" placeholder="Tanggal Fiat" name="tgl_fiat"></div>
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-default">submit</button>
</form>
</div>
</div>
</div>
</div>
    </div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>