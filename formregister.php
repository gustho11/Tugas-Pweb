<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="blog-masthead">
      <div class="container"><a class="blog-nav-item" href="ahay.php">CRUD</a>
          <a class="blog-nav-item" href="logo.php">Logo</a>
       
      </div>
    </div>
 <div class="box">
 	<h2>Halaman Registrasi</h2>
 	<form method="POST" action="actionregister.php">
 		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> Username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>Password</label>
		</div>
		<div class="inputBox">
		<input type="text" name="jurusan" required=""> 
		<label>Jurusan</label>
		</div>
		<div class="inputBox">
		<input type="text" name="nim" required=""> 
		<label>Nim</label>
		</div>
		<div class="inputBox">
		<input type="text" name="email" required=""> 
		<label>E-mail</label>
		</div>
		<input type="submit" name="SIGNUP">
 	</form>

 </div>
 
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
</body>
</html>