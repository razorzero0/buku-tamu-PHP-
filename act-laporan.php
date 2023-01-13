<title>Form Print <?= $_GET["tanggal"] ?></title>
<?php
	include 'koneksi.php';
?>
	<style type="text/css">
		body {
			font-size: 12px!important;
			color: #212121;
		}
		.header {
			text-align: center;
			margin: -.5rem 0;
		}
		.text {
			font-size: 15px!important;
			font-weight: bold;
			text-transform: uppercase;
		}
		#table tr th {
			font-size: 11px;
	    }
		#table tr td {
			font-size: 10px;
		}
		#lead {
			width: auto;
			position: fixed;
			bottom: 0;
			right: 0 ;
			margin: 15px 0 0 75%;
			margin-right: auto;
		 }
		 .lead {

		 	font-weight: bold;
		 	text-decoration: underline;
		 	margin-bottom: -10px;
		 }
		hr {
			height: 5px;
			border: 0;
			border-top: 3px double #8c8c8c;
			box-shadow: 0 5px 5px -5px #8c8c8c inset;
		}
		#box{
			width: 150px;
			height: 150px;
			border : solid 1px;
			margin-bottom: 30px;
		}

		img{
			width: 80px;
			height: 80px;
			margin-top: -10px;
		}
	</style>

	


			<center> 
				<div id="box">
					<h4><strong>Laporan Data Pengunjung
							Universitas Islam Kadiri 
							<?= $_GET["tanggal"] ?>
						</strong></h4>
							<img src="assets/img/logo1.png">
				</div>
			</center>
			<center>
			<table id="table" border="1" cellspacing="0" cellpadding="5" width="80%">
				<thead>
					<tr>
						<th width="1">No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Waktu Masuk</th>
						<th>Waktu Keluar</th>
						<th>Alamat</th>
						<th>Komentar</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$no = 1 ;
						if (isset($_GET['tanggal'])) {
							$tgl = $_GET['tanggal'];
							$sql = mysqli_query($host,"SELECT * FROM pengunjung WHERE DATE(jam_masuk)='$tgl'");
							
						}else{
							$sql = mysqli_query($host,"SELECT * FROM pengunjung ");
						}
							while($data = mysqli_fetch_array($sql)){?>
					<tr>

						<td width="1"><?php echo $no++; ?></td>
						<td><?php echo $data['nama']?></td>
						<td><?php echo $data['email']?></td>
						<td><?php echo substr($data['jam_masuk'],0,16);?></td>
						<td><?php echo substr($data['jam_keluar'],0,16);?></td>
						<td><?php echo $data['alamat']?></td>
						<td><?php echo $data['komentar']?></td>

					</tr>

				<?php } ?>
				</tbody>

			</table>
			</center>
			</div>	
	</div>
	<script type="text/javascript">
		window.print();
	</script>
