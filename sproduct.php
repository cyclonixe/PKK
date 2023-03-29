<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="design.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
</head>

<body>
    
    <section id="header">
        <a href="#"><img src="img/banner/nulogo.png" class="logo" alt="" width="100px" style="margin-top: 6px;"></a>
        <div>
             <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.php" class="active">Shop</a></li>
                <!-- <li><a href="#">Promo</a></li> -->
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href=""><ion-icon ios="ios-search" md="md-search"></ion-icon></a></li> -->
                <!-- <li><a href="cart.php" id="lg-bag"><i><ion-icon ios="ios-basket" md="md-basket"></ion-icon></i></a></li> -->
                <!-- <li><a href="#newsletter"><ion-icon ios="ios-contact" md="md-contact"></ion-icon></a></li> -->
                <a href="" id="close"><i><ion-icon ios="ios-close" md="md-close"></i></ion-icon></a>
            </ul>
        </div> 
        <div id="mobile">
            <!-- <a href="cart.php"><i><ion-icon ios="ios-basket" md="md-basket"></ion-icon></i></a> -->
            <i id="bar"> <ion-icon ios="ios-menu" md="md-menu"></ion-icon></i>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <?php
            include "koneksi.php";
            $id=$_GET['id'];
            $result = $con->query("SELECT foto FROM product where id=$id");
            $query = mysqli_query($con, "SELECT * from product where id=$id" );
            while ($data = mysqli_fetch_array($query)){
        ?>
        <div class="single-pro-image">
            <!-- <img src="asset/digiart/- (1).png" width="100%"  id="MainImg" alt=""> -->
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['foto']); ?>" width="100%"  id="MainImg"/> 
        <?php } ?> 
            <div class="small-img-group">
                <div class="small-img-col">
                    <a href="sproduct.php?id='1'">
                        <img src="asset/digiart/- (1).png" width="100%" class="small-img" alt="">
                    </a>
                </div>
                <div class="small-img-col">                   
                    <a href="sproduct.php?id='2'">
                        <img src="asset/digiart/- (2).png" width="100%" class="small-img" alt="">
                    </a>
                </div>
                <div class="small-img-col">
                    <a href="sproduct.php?id='4'">
                        <img src="asset/digiart/- (3).png" width="100%" class="small-img" alt="">
                    </a>
                </div>
                <div class="small-img-col">
                    <a href="sproduct.php?id='8'">
                        <img src="asset/digiart/product7.png" width="100%" class="small-img" alt="">
                    </a>
                </div>
            </div>
        </div>
        
        <div class="single-pro-details">
            <h6><?php echo $data['kategori']?></h6>
            <h4><?php echo $data['nama_produk']?></h4>
            <h2><?php echo $data['harga']?></h2>
            <!-- <input type="number" name="jumlah" value="1"> -->
                <a href="form.php?id='<?php echo $data['id']?>'">
                    <input type="submit" value="Buy" name="buy" class="normal"></a>
                <!-- <a href="form.php"><button type="submit" class="normal">Buy</button></a> -->
                <h4>Detail Produk</h4>
                <span>
                    <?php echo $data['detail']?>
                </span>
        </div>
            <?php } ?>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
            <ul id="navbar2">
                <li><a class="active">Collection Best Art</a></li>
            </ul>
        <div class="pro-container">
        <a href="sproduct.php?id='12'">
                    <div class="pro">
                        <img src="asset/digiart/product9.png" alt="">
                        <div class="des">
                            <span>OC-Main Char</span>
                            <h5>Meul De Mihir</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.40.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='5'">
                    <div class="pro">
                        <img src="asset/digiart/Desain tanpa judul (5).png" alt="">
                        <div class="des">
                            <span>OC-Main Char</span>
                            <h5>Adi Gunawan (Maharaja)</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.100.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='9'">
                    <div class="pro">
                        <img src="asset/digiart/product12.jpg" alt="">
                        <div class="des">
                            <span>G.I</span>
                            <h5>Yelan WangyWangy</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.65.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='4'">
                    <div class="pro">
                        <img src="asset/digiart/- (3).png" alt="">
                        <div class="des">
                            <span>Holo-EN</span>
                            <h5>GawrGura</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.110.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail update about our latest shop and <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

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
                    <i><a href=""><ion-icon ios="logo-facebook" md="logo-facebook"></ion-icon></a></i>
                    <i><a href=""><ion-icon ios="logo-instagram" md="logo-instagram"></ion-icon></a></i>
                    <i><a href=""><ion-icon ios="logo-pinterest" md="logo-pinterest"></ion-icon></a></i>
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

<script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src;
    }
</script>


<script src="script.js"></script>
</body>

</html>