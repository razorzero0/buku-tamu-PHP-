<?php session_start(); 
include 'koneksi.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/datatabel.min.css" />
 <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.min.css">
 <title>Daftar Tamu</title>
</head>
   <body>
<?php include 'navbar.php' ?>

<div class="row col-lg-12 mt-4">
<!-- tabel -->
<div class="container mt-4 ">
   <div class="col-md-12 ">
      <div class="card ">
        <div class="card-header">
         Daftar Data Tamu
        </div>
    
        <div class="card-body">
        
     <table id="tamu" class="table table-striped table-bordered table-hover" >
        <thead >
           <tr>
             <th>No</th>
             <th>Nama </th>
             <th>Email</th>
             <th>Waktu Masuk</th>
             <th>Waktu Keluar</th>
             <th>Alamat</th>
             <th>Komentar</th>
           </tr>
        </thead>
        <tbody>
           <?php
           $nomor = 1;
           $query_mysql = mysqli_query($host,"SELECT * FROM pengunjung ORDER BY id_pengunjung DESC");
           while($data = mysqli_fetch_array($query_mysql)){
           ?>
           <tr>
           <td><?= $nomor++; ?></td>
           <td><?= $data['nama']; ?></td>
           <td><?= $data['email']; ?></td>
           <td><?= substr($data['jam_masuk'],0,16); ?></td>
           <td><?= substr($data['jam_keluar'],0,16); ?></td>
           <td><?= $data['alamat']; ?></td>
           <td><?= $data['komentar']; ?></td>
          
          </tr>
      <?php } ?>
        </tbody>
     </table>

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
<script src="assets/sweetalert2/dist/sweetalert2.js"></script>
<?php if(isset($_GET["status"])){ ?>
<script>
      Swal.fire({
  icon: 'success',
  title: 'Terima kasih',  
  text: 'sudah mengisi form tamu',
})
</script>
<?php } ?>
   </body>
   </html>
