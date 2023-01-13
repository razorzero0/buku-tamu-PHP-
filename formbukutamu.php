<?php 
include 'operasi.php';
session_start();

if(isset($_POST["submit"])){
  addPengunjung();
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <title>Form Buku Tamu</title>
</head>
   <body>
<?php include 'navbar.php' ?>

<div class="row col-lg-12 mt-4">
<div class="container col-md-5">
   <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          Form Buku Tamu
        </div>
        <div class="card-body">
              <form action="" method="post">
     <div class="form-group">
       <label for="nama">Nama</label>
       <input type="text" class="form-control" id="nama" name="nama" aria- placeholder="Enter Nama " autofocus>
     </div>
     <div class="form-group">
       <label for="email">email</label>
       <input type="text" class="form-control" id="email" name="email" aria- placeholder="Enter Email">
     </div>
     
        <div class="form-group ">
         <label for="masuk">Waktu masuk</label>
         <input type="datetime-local" class="form-control" id="masuk" name="masuk" placeholder="Enter Waktu Masuk">
       </div>
       <div class="form-group">
         <label for="keluar">waktu keluar</label>
         <input type="datetime-local" class="form-control" id="keluar" name="keluar" placeholder="Enter Waktu Keluar">


     </div>
     <div class="form-group">
       <label for="alamat">alamat</label>
       <textarea name="alamat" id="alamat" class="form-control" row="3" placeholder="Masukan Alamat"></textarea>
     </div>
     <div class="form-group">
       <label for="komentar">komentar</label>
       <textarea name="komentar" id="komentar" class="form-control" row="3" placeholder="Masukan komentar"></textarea>
     </div>
     <button type="submit" name="submit" class="btn btn-primary col-12">Send</button>
   </form>
        </div>
      </div>
   </div>
</div>


</div>

</div>


   <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>

   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
   <script>
    $(document).ready(function(){
        $('#tamu').DataTable();
    });
</script>
   </body>
   </html>
