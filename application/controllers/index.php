<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}

include "+koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="assets/css/uniform.css" />
<link rel="stylesheet" href="assets/css/select2.css" />
<link rel="stylesheet" href="assets/css/matrix-style.css" />
<link rel="stylesheet" href="assets/css/matrix-media.css" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html"><?=$_SESSION['username']?></a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        
        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    
    
  </ul>
</div>

<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    
    <li><a href="home.php"><i class="icon icon-fullscreen"></i> <span>Home</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Data Pelamar</span> </a>
      <ul>
        <li><a href="index.php">Lihat data</a></li>
        <li><a href="form_tambah.php">Tambah Data</a></li>
      </ul>
    </li>
    
    
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Static table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
        <th>No</th>          
        <th>Nama</th>
        <th>Janggal Lahir</th>
        <th>Umur</th>
        <th>jenis kelamin</th>
        <th>alamat</th>
        <th>agama</th>
        <th>no hp</th>
        <th>status</th>
        <th>pendidikan terakhir</th>
        <th>jurusan</th>
        <th>Perguruan tinggi</th>
        <th>opsi</th>
                </tr>
              </thead>
              <tbody>
                
        
			<?php 
			$query = $con->query("SELECT * FROM karyawan"); // tampil menggunakan method query
			$nomor = 1;
			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['tanggal_lahir']; ?></td>
					<td><?php echo $data['umur']; ?></td>
					<td><?php echo $data['jenis_kelamin']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td><?php echo $data['agama']; ?></td>
					<td><?php echo $data['no_hp']; ?></td>
					<td><?php echo $data['status']; ?></td>
					<td><?php echo $data['pendidikan_terakhir']; ?></td>
					<td><?php echo $data['jurusan']; ?></td>
          <td><?php echo $data['perguruan_tinggi']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/jquery.ui.custom.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.uniform.js"></script> 
<script src="assets/js/select2.min.js"></script> 
<script src="assets/js/jquery.dataTables.min.js"></script> 
<script src="assets/js/matrix.js"></script> 
<script src="assets/js/matrix.tables.js"></script>
</body>
</html>
