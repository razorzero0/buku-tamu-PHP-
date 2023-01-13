<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style type="text/css">
	img{
		width: 300px;
	}
</style>

	<title>Home</title>
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ">
        <?php if(!isset($_SESSION["username"])) {?>
				<a class="nav-item navbar-brand" href="formbukutamu.php">Form Pengunjung</a>
        <?php }else{ ?>
          <a class="nav-item  navbar-brand" href="adminpage.php">Dashboard</a>
          <?php } ?>
       </div>
       </div>
  </nav>	 

  <div class="container text-center mt-5">
  	<img src="assets/img/logo1.png">

  	<h3><strong>SELAMAT DATANG</strong></h3>
  	<h3><strong>	APLIKASI BUKU TAMU</strong></h3>
  	<h3><strong>	UNIVERSITAS ISLAM KADIRI 2023</strong></h3>
  	
  </div>




   <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>