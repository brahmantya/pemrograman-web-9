<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>

<body>
	<header>
		<h1 class="judul">Daftar</h1>
	</header>

	<div class="wrap"></div>

		<div class="blog">
			<div class="conteudo">
				<form action="home.php" method="post">
					<div class="imgcontainer">
						<div class="container">

						<label><b>Id</b></label>
							<input type="text" placeholder="Masukkan Id Anda" name= "id" required="" value="<?=isset($_POST['id']) ? $_POST['id'] : ''?>"/>					
						<label><b>Nama</b></label>
							<input type="text" placeholder="Masukkan Nama Anda" name="nama" required="" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
						<label><b>Jenis Kelamin</b></label>
							<input type="text" placeholder="Masukkan Jenis Kelamin Anda" name= "jkel" required="" value="<?=isset($_POST['jkel']) ? $_POST['jkel'] : ''?>"/>					
						<label><b>email</b></label>
							<input type="text" placeholder="Masukkan Email Anda" name="email" required="" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
						<label><b>alamat</b></label>
							<input type="text" placeholder="Masukkan Alamat Anda" name="alamat" required="" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"/>
					
						<button type="submit" name="submit">Daftar</button>
   						 
  					</div>
				</form>
				<form action="login.php" method="post">
					
						<button type="submit" name="login">Login</button>
   						 
  					</div>
				</form>

			
</body>
</html>