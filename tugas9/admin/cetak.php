<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<header>
		<h1 class="judul">Selamat Datang,</h1>
	</header>

	<div class="wrap"></div>
		<nav class="menu">
			<ul>
				<li>
					<a></a>
				</li>
				<li>
					<a></a>
				</li>
			</ul>
		</nav>

		<aside class="sidebar">
			<div class="widget">
				<h2>BRANI CLOTH</h2>
				<p>Brani Cloth adalah usaha bergerak di rana konveksi,keunggulan kita adalah di kualitas dan cerita yang kami berikan di setiap bajunya untuk lebih lengkapnya silahkan berkunjung di instagram @brani.cloth</p>
			</div>
			<div class="widget">
				<h2>BRANI SHOP</h2>
				<p>Brani Shop adalah salah satu online shop yang menyediakan berbagai macam makeup, jam tangan daniel wallington, serta skincare untuk wanita. untuk lebih lengkapnya silahkan berkunjung di instagram @brani.shop</p>
			</div>
		</aside>

		<div class="blog">
			<div class="conteudo">
				<h2>List Pendaftar</h2>
				<table border="1">
			    <tr><th>NO</th><th>ID</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th><th>ALAMAT</th></tr>
			    <?php
			    include 'connect.php';
			    $daftar = mysqli_query($conn, "SELECT * from daftar");
			    $no=1;
			    foreach ($daftar as $row){
			        echo "<tr>
			            <td>$no</td>
			            <td>".$row['id']."</td>
			            <td>".$row['nama']."</td>
			            <td>".$row['jkel']."</td>
			            <td>".$row['email']."</td>
			            <td>".$row['alamat']."</td>
			              </tr>";
			        $no++;
    }
    ?>
</table>
					
				
			
</body>
</html>