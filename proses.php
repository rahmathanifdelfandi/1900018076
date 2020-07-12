<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<?php 
	echo "<head><title>GUEST BOOK</head></title>";
	$fp=fopen("guestbook.txt", "a+");
	$nama = $_POST['nama'];
	$email= $_POST['email'];
	$alamat= $_POST['alamat'];
	$status= $_POST['status'];
	$komentar= $_POST['komentar'];

	fputs($fp,"$nama|$email|$alamat|$status|$komentar\n");
	fclose($fp);
	echo "<center>";
	echo '<h1 class="h1">Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu</h1><br>';
	echo "<a href=lihat.php>Lihat Buku Tamu</a><br><br>";
	echo "</center>";

	 ?>

</div>
</body>
</html>