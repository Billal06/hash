<?php
include ("../../api/req.php");

$url = "https://hashid.blackcodercrush.com";
$type = $_POST["type"];
$text = $_POST["text"];
if (isset($text) and isset($type)){
	$get = get($url."/api/encrypt.php?type=sha1&text=".$text);
	$j = json_decode($get, TRUE);
	if ($j["error"] == false){
		if ($j["result"]["hash"]){
			$text = $j["result"]["hash"];
			$result = "
<input type='text' placeholder='$text' class='is-valid form-control' id='hasil' value='$text' readonly>";
		}else{
			$result = "
<input type='text/ placeholder='Failed to encrypt' class='is-invalid form-control' id='hasil' value='Failed to crack' readonly";
		}
	}else{
		$result = "";
	}
}
?>
<html>
	<head>
		<title>HashID | Hash Cracker</title>
		<meta name="author" content="Billal Fauzan">
		<meta name="keyword" content="Hash, Hasher, HashID, Hash Cracker, MD5, SHA1, SHA512, Hash Decrypt, Decrypter, Hashing">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS BootStrap 4 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="../../assets/css/custom.css">

	</head>
	<body>
		<nav class="navbar navbar-expand-lg bg-dark navbar-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars text-primary"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="../../" class="nav-link text-white">Home</a>
					</li>
					<div class="nav-item dropdown">
						<a href="#" class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Decrypter
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="../../decrypt/md5" class="dropdown-item">MD5</a>
							<a href="../../decrypt/sha1" class="dropdown-item">SHA1</a>
							<a href="../../decrypt/sha512" class="dropdown-item">SHA512</a>
							<a href="../../decrypt/whirlpool" class="dropdown-item">WHIRLPOOL</a>
						</div>
					</div>
					<div class="nav-item dropdown">
						<a href="#" class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Encrypter
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="../../encrypt/md5" class="dropdown-item">MD5</a>
							<a href="../../encrypt/sha1" class="dropdown-item">SHA1</a>
							<a href="../../encrypt/sha512" class="dropdown-item">SHA512</a>                                                                                                                                                 
							<a href="../..//encrypt/whirlpool" class="dropdown-item">WHIRLPOOL</a>
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
						<i class="fa fa-lock" aria-hidden="true"></i>
					</div>	
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<input type="hidden" name="type" value="md5">
						<div class="form-group">
						<input type="text" id="hash" name="text" class="form-control" placeholder="XXXX" value="<?php echo $text; ?>" required>
						</div>
						<div class="mb-4 p-3 text-center">
							<button class="btn btn-primary">Encrypt</button>
						</div>
					</form>
					<div id="result">
						<?php
						if ($result){
							echo $result;
						}
						?>
					</div>
				</div>
			</div>
			<br />
			<div class="card">
				<div class="card-header">
					<p>Author: </p>
					<img src="../../assets/images/profile.jpg" class="profile">
					<p class="text-center"><b>Billal Fauzan</b></p>
				</div>
				<div class="card-body">
Lakukanlah semua hal yang kamu bisa
				</div>
			</div>

			<br />
			<p style="color: black;"><b>This tool is sponsored by: </b></p>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="image d-block" src="../../assets/images/cgi.jpg" alt="Cyber Ghost Indonesian">
					</div>
					<div class="carousel-item">
						<img class="image d-block" src="../../assets/images/bcc.png" alt="Black Coder Crush">
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

		<!-- Custom JS -->
		<script src="../../assets/js/custom.js" crossorigin="anonymous"></script>
	</body>
</html>
