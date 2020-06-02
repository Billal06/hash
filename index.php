<?php
include ("./lib/util.php");
include ("./databases/connection.php");
$myip = ip();
$ua = user_agent();
mysqli_query($db, "INSERT INTO views VALUES (NULL, '$myip', '$ua')");
$v = mysqli_num_rows(mysqli_query($db, "SELECT * FROM views"));
?>
<html>
	<head>
		<title>HashID | Hash Cracker</title>
		<!-- META -->
		<meta name="author" content="Billal Fauzan">
		<meta name="keyword" content="Hash, Hasher, HashID, Hash Cracker, MD5, SHA1, SHA512, Hash Decrypt, Decrypter, Hashing">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS BootStrap 4 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="./assets/css/custom.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg bg-dark navbar-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars text-primary"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="./" class="nav-link text-white">Home</a>
					</li>
					<div class="nav-item dropdown">
						<a href="#" class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Decrypter
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="./decrypt/md5" class="dropdown-item">MD5</a>
							<a href="./decrypt/sha1" class="dropdown-item">SHA1</a>
							<a href="./decrypt/sha512" class="dropdown-item">SHA512</a>
							<a href="./decrypt/whirlpool" class="dropdown-item">WHIRLPOOL</a>
						</div>
					</div>
					<div class="nav-item dropdown">
						<a href="#" class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Encrypter
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="./encrypt/md5" class="dropdown-item">MD5</a>
							<a href="./encrypt/sha1" class="dropdown-item">SHA1</a>
							<a href="./encrypt/sha512" class="dropdown-item">SHA512</a>
							<a href="./encrypt/whirlpool" class="dropdown-item">WHIRLPOOL</a>
						</div>
					</div>
				</ul>
			</div>
		</nav>

		<div class="container">
			<br />
			<div class="card bg-dark">
				<div class="card-header">
					<div class="key">
						<i class="fas fa-key"></i>
					</div>
				</div>
				<div class="card-body">
					<p class="font-roboto text-white">HASHID is a hash cracker with brute force methods or matching to a database</p>	
				</div>
			</div>
			<br />

			<div class="card bg-primary">
				<div class="card-header text-center text-white">Info</div>
				<div class="card-body">
					<ul class="list-group">
						<li class="list-group-item list-group-item-dark"><i class="fa fa-server"></i>
							IP Address: <span class="float-right"><?php echo $myip; ?></span>
						</li>
						<li class="list-group-item list-group-item-dark"><i class="fa fa-user"></i>
							Browser: <span class="float-right"><?php echo get_browser_name($ua); ?></span>
						</li>
						<li class="list-group-item list-group-item-dark"><i class="fa fa-eye"></i>
							Total views: <span class="float-right"><?php echo $v; ?></span>
						</li>
					</ul>
				</div>
			</div>

			<br />
			<div class="card">
				<div class="card-header">
					<p>Author: </p>
					<img src="./assets/images/profile.jpg" class="profile">
					<p class="text-center"><b>Billal Fauzan</b></p>
				</div>
				<div class="card-body">
Lakukanlah semua hal yang kamu bisa
				</div>
			</div>

			<br />
			<p style="color: black;"><b>This tool is sponsored: </b></p>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="image d-block" src="./assets/images/cgi.jpg" alt="Cyber Ghost Indonesian">
					</div>
					<div class="carousel-item">
						<img class="image d-block" src="./assets/images/bcc.png" alt="Black Coder Crush">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<!-- Fonts Awesome !-->
		<script src="https://kit.fontawesome.com/ce439b38d0.js" crossorigin="anonymous"></script>
	</body>
</html>
