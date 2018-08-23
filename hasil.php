<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bukti Transfer</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="panel panel-default">
<div class=panel-heading>Data</div>
<div class=panel-body>
	<a href="index.php?page=my_profile&module=pesanan&action=list" class="btn btn-primary">kembali</a>
<p>Berikut ini adalah data yang diposting oleh user</p>
</div>
<table class=table>
<thead>
<tr>
<th>Nama</th>
<th>Transfer</th>
<th>Bank</th>
<th>Image</th>
</tr>
</thead>
<tbody>
	
<?php
include "koneksi-database.php";
$data = "SELECT * from pembayaran";
$bacadata = mysql_query($data);
if ($bacadata === FALSE) {
    die(mysql_error());
}
while($select_result = mysql_fetch_array($bacadata))
{
$nama        = $select_result['nama'];
$transfer    = $select_result['transfer'];
$bank        = $select_result['bank'];
$image        = $select_result['image'];

echo"<tr> <td>$nama</td><td>$transfer</td><td>$bank</td><td><img src='$image' height='150'></td></tr> ";
//ganti imagesup dengan nama folder dimana anda menempatkan image hasil upload
}?>
</tbody>
</table>
</div>
</div>
</body>
</html>