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
                <div class="card-header bg-success text-white ">
                    Edit Barang
                </div>
                <div class="card-body">

                    <?php
                        include('koneksi.php');
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi, "select * from barang where id = '$id'");
                        $row = mysqli_fetch_assoc($data);
                    ?>
                    
                    <form action="" method="post" role="form">
                        <div class="form-group">
                            <label>Nama</label>
                                <input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">
                                <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Data</button>
                    </form>

                    <?php
                        if (isset($_POST['submit'])) {
                        $id = $_POST['id'];
                        $nama = $_POST['nama'];
                        $harga = $_POST['harga'];
                        $deskripsi = $_POST['deskripsi'];
                        mysqli_query($koneksi, "update barang set nama='$nama', harga='$harga', deskripsi='$deskripsi' where id ='$id'") or die(mysqli_error($koneksi));
                        echo "<script>alert('Data berhasil diupdate.');window.location='index.php';</script>";
                        }
                    ?>

                </div>
            </div>
        </div>

    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
