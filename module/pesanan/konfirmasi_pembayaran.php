<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="<?php echo BASE_URL."module/pesanan/upload.php?"; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
<div class="form-group">
<label >Nama</label>
<input type="text" class="form-control" name="nama">
</div>
<div class="form-group">
<label>Jumlah Transfer</label>
<input type="text" class="form-control" name="transfer">
</div>
<div class="form-group">
<label>Bank</label>
<input type="text" class="form-control" name="bank">
</div>
<div class="form-group">
<p>Pilih File Gambar : <br/><input type='file' name='filegbr' id='Filegambar'></p>

</div>
<div class="form-group">
<input type="submit" name="Submit" value="Upload" />
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>

</body>
</html>