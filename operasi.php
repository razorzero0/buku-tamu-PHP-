<?php
$host = mysqli_connect("localhost","root","","gb");

function login(){
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);
   $cekuser = mysqli_query($host,"SELECT * FROM user WHERE username = '$username'");
   $hasil = mysqli_fetch_array($cekuser);

     if($pass != $hasil ['password']  || $username != $hasil ['username'] ) {
      header('location:login.php?status=1');
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:pengunjungpage.php');
     }
   }  



function addUser(){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
   global $host;
    mysqli_query($host,"INSERT INTO user VALUES('','$nama','$username','$password')");
    header("location:adminpage.php");
}

function editUser(){
$id_petugas = $_POST['id_petugas'];
$nama = $_POST['nama'];
$username = $_POST['username'];
global $host;
mysqli_query($host,"UPDATE user SET nama_petugas='$nama', username='$username' WHERE id_petugas='$id_petugas'");
header("location:adminpage.php");
}

function hapusUser(){
$id_petugas = $_GET['id_petugas'];
global $host;
mysqli_query($host,"DELETE FROM user WHERE id_petugas='$id_petugas'");
header("location:adminpage.php");
}

function addPengunjung(){
$nama = $_POST['nama'];
$email = $_POST['email'];
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];
$alamat = $_POST['alamat'];
$komentar = $_POST['komentar'];
global $host;
mysqli_query($host,"INSERT INTO pengunjung VALUES('','$nama','$email','$masuk','$keluar','$alamat' ,'$komentar')");
header("location:daftartamu.php?status=1");
}

function editPengunjung(){
    $id_pengunjung = $_POST['id_pengunjung'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $alamat = $_POST['alamat'];
    $komentar = $_POST['komentar'];
    global $host;
    mysqli_query($host,"UPDATE pengunjung SET nama='$nama', email='$email', nama='$nama', 
    jam_masuk='$masuk', jam_keluar='$keluar',alamat='$alamat', komentar='$komentar' WHERE id_pengunjung='$id_pengunjung'");
    header("location:pengunjungpage.php");
}

function hapusPengunjung(){
    $id_pengunjung = $_GET['id_pengunjung'];
    global $host;
    mysqli_query($host,"DELETE FROM pengunjung WHERE id_pengunjung='$id_pengunjung'");
    header("location:pengunjungpage.php");
}
 ?>
