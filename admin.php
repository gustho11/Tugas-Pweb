<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">

</head>
<body>
<div class="blog-masthead">
      <div class="container">
        <a class="blog-nav-item" href="creat.php">Tambah</a>
        <a class="blog-nav-item" href="logout.php" onclick =" return confirm ('Yakin ingin keluar?');">Keluar</a>
      </div>
</div>
<center>
<br><br>
    <h2>HALAMAN ADMIN</h2>
  <br><br>
    <table border="5" cellpadding="5" cellspacing="3">
  <tr>
    <h2>
    <th>No</th>
    <th>Nama Organisasi</th>
    <th>Jabatan</th>
    <th>Tahun Jabatan</th>
    <th>Ket. Tambahan</th>
    <th>update</th>
    <th>opsi</th>
    </h2>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["jabatan"];  ?></td>
    <td><?= $x["tahun"];  ?></td>
    <td><?= $x["keterangan"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">Edit</a></button> <button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('Anda Yakin?');">hapus</a></button></center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
</center>

    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
  </body>
</html>
