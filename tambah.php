<!DOCTYPE html>
<html>

    <head>
	    <title>crudphp</title>
    </head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <body>
	    <div class="container col-md-6 mt-4">
		    <h1>Tabel Barang</h1>
		    <div class="card">
			    <div class="card-header bg-success text-white">
				    Tambah Barang
			    </div>
			    <div class="card-body">
				    <form action="" method="post" role="form">
					    <div class="form-group">
						    <label>Nama</label>
						    <input type="text" name="nama" required="" class="form-control">
					    </div>
					    <div class="form-group">
						    <label>Harga</label>
						    <input type="text" name="harga" class="form-control">
					    </div>
					    <div class="form-group">
						    <label>Deskripsi</label>
						    <textarea class="form-control" name="deskripsi"></textarea>
					    </div>
					    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan Data</button>
				    </form>

				    <?php
				        include('koneksi.php');
				        if (isset($_POST['submit'])) {
					        $nama = $_POST['nama'];
					        $harga = $_POST['harga'];
					        $deskripsi = $_POST['deskripsi'];
					        $datas = mysqli_query($koneksi, "insert into barang (nama,harga,deskripsi)values('$nama', '$harga', '$deskripsi')") or die(mysqli_error($koneksi));
					        echo "<script>alert('Data berhasil disimpan.');window.location='index.php';</script>";
				        }
				    ?>

			    </div>
		    </div>
	    </div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
