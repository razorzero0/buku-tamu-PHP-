
<?php
 include "operasi.php";
 session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['username'];
}

if(isset($_GET["id_pengunjung"])){
   hapusPengunjung();
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

<div class=" mt-3">
   <div class="container-fluid">
      <div class="card ">
        <div class="card-header">
          Tabel Data Pengunjung
        </div>
        <?php
        $query_mysql = mysqli_query($host,"SELECT * FROM user ");
        while($data = mysqli_fetch_array($query_mysql)){ ?>
        <div class="card-body">
      <!-- <h5>Hallo <?= $data['nama_petugas'];  ?> </h5> -->
         <?php } ?>
     <table id="tamu" class="table table-striped table-bordered table-hover " >
        <thead >
           <tr>
             <th>No</th>
             <th>Nama </th>
             <th>Email</th>
             <th>Waktu Masuk</th>
             <th>Waktu Keluar</th>
             <th>Alamat</th>
             <th>Komentar</th>
             <th>Aksi</th>
           </tr>
        </thead>
        <tbody>
           <?php
           $nomor = 1;
           $query_mysql = mysqli_query($host,"SELECT * FROM pengunjung");
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
           <td>
              <a class="edit btn btn-warning" href="edit.php?id_pengunjung=<?= $data['id_pengunjung']; ?>">Edit</a>
              <a class="hapus btn btn-danger" href="?id_pengunjung=<?= $data['id_pengunjung']; ?>" onclick="return confirm('Yakin?');">Hapus</a>
           </td>
          </tr>
      <?php } ?>
        </tbody>
     </table>

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
