
<?php
session_start();
include "operasi.php"; 
if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['username'];
}

if(isset($_POST["submit"])){
   editUser();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <title>Form Edit</title>
   </head>
   <body>
      <?php include 'navbar.php' ?>
      <?php
      $id_petugas = $_GET['id_petugas'];
      $query_mysql = mysqli_query($host,"SELECT * FROM user WHERE id_petugas='$id_petugas'");
      while($data = mysqli_fetch_array($query_mysql)){
      ?>


<div class="container mt-3">
   <div class="col-md-6 offset-md-3">
      <div class="card ">
        <div class="card-header">
          Form Buku pengunjung
        </div>
        <div class="card-body">
     <form action="" method="post">
     <div class="form-group">
       <label for="instansi">Nama Admin</label>
       <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama_petugas'] ?>">
     </div>
     <div class="form-group">
       <label for="kepada">Username</label>
       <input type="text" class="form-control" id="username" name="username"  value="<?php echo $data['username'] ?>">
     </div>
     <!-- <div class="row">
        <div class="form-group col-md-6">
         <label for="nama">Password</label>
         <input type="text" class="form-control" id="password" name="password" value="<?php echo $data['password'] ?>">
       </div>
  -->
     <div class="form-group">
     <input type="hidden" class="form-control" name="id_petugas" value="<?php echo $data['id_petugas'] ?>">
     </div>
     <button name="submit" type="submit" class="btn btn-primary col-12">Send</button>
   </form>
        </div>
      </div>
   </div>
</div>
<?php } ?>

   <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   </body>
   </html>

