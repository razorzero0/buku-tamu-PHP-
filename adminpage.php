
<?php
session_start();
include "operasi.php";

if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['username'];
}

if(isset($_GET["id_petugas"])){
hapusUser();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/datatabel.min.css" />
 <title>Admin</title>
</head>
   <body>
<?php include 'navbar.php' ?>

<div class="container mt-3">
   <div class="col-md-12 ">
      <div class="card ">
        <div class="card-header">
          Tabel Data User
        </div>
    <a href="adduser.php" class="btn btn-primary w-25 h-50 ml-4 mt-3 ">Tambah User</a>
        <div class="card-body">
     <table id="tamu" class="table table-striped table-bordered table-hover" >
        <thead >
           <tr>
             <th>No</th>
             <th>Id User</th>
             <th>Nama</th>
             <th>Username</th>
             <th>Aksi</th>
           
           </tr>
        </thead>
        <tbody>
           <?php
           $nomor = 1;
           $query_mysql = mysqli_query($host,"SELECT * FROM user");
           while($data = mysqli_fetch_array($query_mysql)){
           ?>
           <tr>
          
           <td><?= $nomor++; ?></td>
           <td><?= $data['id_petugas']; ?></td>
           <td><?= $data['nama_petugas']; ?></td>
           <td><?= $data['username']; ?></td>
          
           <td>
              <a class="edit btn btn-warning" href="editAdmin.php?id_petugas=<?= $data['id_petugas']; ?>">Edit</a>
           
              <a  class="hapus btn btn-danger" href="?id_petugas=<?= $data['id_petugas'];  ?>" onclick="return confirm('Yakin?');">Hapus</a>
           </td>
          </tr>
      <?php } ?>
        </tbody>
     </table>

        </div>
      </div>
   </div>
</div>
<

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
<!-- Modal -->
