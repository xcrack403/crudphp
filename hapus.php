<?php				
	include 'koneksi.php';
	$id = $_GET['id'];

	$datas = mysqli_query($koneksi, "delete from barang where id ='$id'") or die(mysqli_error($koneksi));

	echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
?>
