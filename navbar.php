
<nav class="navbar navbar-expand-md navbar-dark  bg-primary mb-6">
  <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        <?php
         if(!isset($_SESSION['username'])) {          
           ?> 
          <li class="nav-item active">
            <a class="nav-link" href="daftartamu.php">Daftar Tamu</a>
          </li>
        
          </ul>
        <form class="form-inline mt-2 mt-md-0">
        <a class="nav-item text-light text-bold btn btn-success " href="login.php" onClick="()=>{alert1()}" >login</a>
        </form>
          <?php }else{ ?>
          <li class="nav-item active">
            <a class="nav-link" href="pengunjungpage.php">Data Pengunjung</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="adminpage.php">Data User</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="printbukutamu.php">Laporan</a>
          </li>
          </ul>
        <form class="form-inline mt-2 mt-md-0">
        <a class="nav-item  btn btn-danger " href="logout.php" onClick=alert1()>logout</a>
        </form>
          <?php } ?>
       
      </div>
      </div>
    </nav>

    
 