<?php 
	require 'koneksi.php';
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jurusan = $_POST['jurusan'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];

	$result = mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password','$jurusan','$nim','$email')");





	if ($result) {
		echo "<h5>Selamat registrasi selesai.";
		echo("<br>");
		echo "Login ";
		echo "<a href='login.php'>disini</a>";
		echo " bray</h5>";
	}
	else {
		echo "<h5>Registrasi Gagal";
		echo "<a href='formregister.php'>Coba lagi</a></h5>";
	}


?>
<title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</title>
<body style="background-color: whitesmoke;">
</body>