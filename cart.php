<?php
include "koneksi.php";

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    mysqli_query($con, "UPDATE product SET sts='0' WHERE id=$id");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="design.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
</head>

<body>

    <section id="header">
        <a href="#"><img src="img/banner/nulogo.png" class="logo" alt="" width="100px" style="margin-top: 6px;"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <!-- <li><a href="">Promo</a></li> -->
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href=""><ion-icon ios="ios-search" md="md-search"></ion-icon></a></li> -->
                <li><a href="cart.html" class="active" id="lg-bag"><i>
                            <ion-icon ios="ios-basket" md="md-basket"></ion-icon>
                        </i></a></li>
                <!-- <li><a href="#newsletter"><ion-icon ios="ios-contact" md="md-contact"></ion-icon></a></li> -->
                <a href="" id="close"><i>
                        <ion-icon ios="ios-close" md="md-close">
                    </i></ion-icon></a>
            </ul>
        </div>
        <div id="mobile">
            <a href=""><i>
                    <ion-icon ios="ios-basket" md="md-basket"></ion-icon>
                </i></a>
            <i id="bar">
                <ion-icon ios="ios-menu" md="md-menu"></ion-icon>
            </i>
        </div>
    </section>

    <section id="page-header">

    </section>

    <section id="cart" class="section-p1">
        <table width="100%" border="0">
            <thead>

                <tr>
                    <td>Checkout ??</td>
                    <td>Gambar</td>
                    <td>Kategori</td>
                    <td>Produk</td>
                    <!-- <td>Jumlah</td> -->
                    <td>Harga</td>
                    <!-- <td>Total</td> -->
                    <!-- <td>Jumlah</td>
                    <td>Total</td>
                    <td>Aksi</td> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $result = $con->query("SELECT foto FROM product where sts='1'");
                $query = mysqli_query($con, "SELECT * from product where sts='1'");
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td>
                            <a href="form.php?id=<?php echo $data['id']?>">
                                <ion-icon class="oke" ios="ios-checkmark-circle" md="md-checkmark-circle"></ion-icon>
                            </a>
                            <!--
                                <ion-icon class="no" ios="ios-close" md="md-close"></ion-icon>
                            -->
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                                <!-- <ion-icon class="no" ios="ios-close" md="md-close"></ion-icon>
                                    <input type="submit" value="" name="delete" class="normal"> -->
                                <button type="submit" name="delete" class="icon">
                                    <ion-icon class="no" ios="ios-close" md="md-close"></ion-icon>
                                </button>
                            </form>
                        </td>
                        <td>
                            <?php $row = $result->fetch_assoc() ?>
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['foto']); ?>"
                                width="100%" id="MainImg" />
                        </td>
                        <td>
                            <?php echo $data['kategori'] ?>
                        </td>
                        <td>
                            <?php echo $data['nama_produk'] ?>
                        </td>
                        <!-- <td><input type="number" value="1"></td> -->
                        <td>
                            <?php echo $data['harga'] ?>
                        </td>
                        <!-- <td></td> -->
                        <!-- <td>
                                <input type="submit"> |
                                <input type="reset">
                            </td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

    <!-- <section id="cart-add" class="section-p1">
        <div id="subtotal">
            <h3>Total Keseluruhan</h3>
            <table>
                <tr>
                    <td>Harga</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td>-</td>
                </tr>
            </table>
            <button class="normal">Chekout</button>
        </div>
    </section> -->

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/banner/disenlogo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Perum Adiwira Persada Blok R-24, Nanggewer</p>
            <p><strong>Phone:</strong> +62 889-7710-8596/+62 882-1356-1005</p>
            <p><strong>Time:</strong> 10:00-18:00, Thu-Sat</p>
            <div class="follow">
                <h4>Follow US</h4>
                <div class="icon">
                    <i><a href="">
                            <ion-icon ios="logo-facebook" md="logo-facebook"></ion-icon>
                        </a></i>
                    <i><a href="">
                            <ion-icon ios="logo-instagram" md="logo-instagram"></ion-icon>
                        </a></i>
                    <i><a href="">
                            <ion-icon ios="logo-pinterest" md="logo-pinterest"></ion-icon>
                        </a></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlish</a>
            <a href="#">Tracky My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>install App</h4>
            <p>from App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Getaways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2022, Tech2 etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>