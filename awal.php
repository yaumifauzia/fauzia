<?php

	session_start();	

	include_once("function/koneksi.php");
	include_once("function/helper.php");

	$page = isset($_GET['page']) ? $_GET['page'] : false;
	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
	
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
	$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
	$totalBarang = count($keranjang);

	if($user_id){
		header("location: ".BASE_URL);
	}

?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>rumah tenun</title>
		
		<link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
		<link href="<?php echo BASE_URL."css/banner.css"; ?>" type="text/css" rel="stylesheet" />
		
		<script src="<?php echo BASE_URL."js/jquery-3.1.1.min.js"; ?>"></script>
		<script src="<?php echo BASE_URL."js/Slides-SlidesJS-3/source/jquery.slides.min.js"; ?>"></script>
		
		<script>
		$(function() {
			$('#slides').slidesjs({
				height: 350,
				play: { auto : true,
					    interval : 3000
					  },
				navigation : false
			});
		});
		</script>		
		
	</head>

	<body>
	
		<div id="container">
			<div id="header">
				<a href="<?php echo BASE_URL."index.php"; ?>">
					<img src="<?php echo BASE_URL."images/rumah_tenun.png"; ?>" />
				</a>
				
				<div id="menu">
					<div id="user">
						<?php
							if($user_id){
								echo "Hi <b>$nama</b>,
									  <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'>My Profile</a>
									  <a href='".BASE_URL."logout.php'>Logout</a>";
							}else{
								echo "<a href='".BASE_URL."index.php?page=register'>Register</a>
									 ";
									 
							}
						?>
					</div>
					
					<a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button-keranjang">
						<img src="<?php echo BASE_URL."images/cart.png"; ?>" /> 					
						<?php
							if($totalBarang != 0){
								echo "<span class='total-barang'>$totalBarang</span>";
							}
						?>
					</a>
				</div>
			</div>	

			<div id="content">
				
	<div id="container-user-akses">

	<form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">
	
		<?php
		
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			
			if($notif == true){
				echo "<div class='notif'>Maaf, email atau password yang kamu masukan tidak cocok</div>";
			}
		
		?>

		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" /></span>
		</div>
		
		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password" /></span>
		</div>	

		<div class="element-form">
			<span><input type="submit" value="login" /></span>
		</div>	
	
	</form>
	
</div>		
			</div>
			
			<div id="footer">
				<p>balai panjang | payakumbuh</p>
			</div>
			
		</div>
	
	</body>
	
</html>