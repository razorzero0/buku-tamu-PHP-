
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">

 <title>Form Print</title>
</head>
   <body>
<?php include 'navbar.php'?>
<form action="act-laporan.php" method="GET">

   <div class="container mt-3">
      <div class="col-md-6 offset-md-3">
         <div class="card ">
           <div class="card-header">
             Print Buku Tamu
           </div>
           <div class="card-body">
         

         <form action="act-laporan.php" method="get">
            <div class="form-group">
              <label for="instansi">Print Berdasrkan Tanggal</label>
              <input type="DATE" class="form-control" id="tanggal" name="tanggal">
            </div>
      <div class="d-flex justify-content-end">
         <button type="submit" class="btn btn-primary mt-3 ">Print</button>
      </div>
         </form>

        </div>

           </div>
         </div>
      </div>
   </div>


</form>

   <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>

   </body>
   </html>
