<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM product WHERE id=$id");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="box">
        <div class="form">
            <form action="simpan.php" method="post">
                <h2>Data Pembelian</h2>
                <div class="inputBox">
                    <input type="text" required="required" name="nama_pelanggan">
                    <span>Nama Pelanggan</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="kategori" value="<?php echo $data['kategori'] ?>">
                    <span>Kategori</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="nama_produk" value="<?php echo $data['nama_produk'] ?>">
                    <span>Nama Produk</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>E-mail</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="telp" required="required">
                    <span>Nomor Telpon(WA)</span>
                    <i></i>
                </div>
                <input type="submit" value="Kirim">
            </form>
            <a href="shop.php"><input type="reset" value="Batal"></a>
        </div>
    </div>
</body>

</html>