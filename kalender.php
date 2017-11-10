<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
		$("#tgl_fiat").datepicker("option", "dateFormat", "dd-M-yy");
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
		$("#tgl_ambil").datepicker("option", "dateFormat", "dd-M-yy");
	});
});
</script>
</head>
<body>
<form>
<div>
<label for="tgl_fiat"> Tanggal Fiat </label>
<input type="text" id="tgl_fiat" name="tgl_fiat"/>
&nbsp;&nbsp;
<label for="tgl_bayar"> Tanggal Bayar </label>
<input type="text" id="tgl_ambil" name="tgl_ambil"/>
</div>
<br />
<input type="submit" value="Cari" />

</form>
</body>
</html>