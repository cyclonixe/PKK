<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
                <li><a href="shop.php" class="active">Shop</a></li>
                <!-- <li><a href="">Promo</a></li> -->
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

    <section id="page-header">
        <!-- <h2>EVERYTHING YOU</h2>
        <P>Makes Art In Your Live</P> -->
    </section>
    <?php
    include "koneksi.php";
    $query = 'SELECT * FROM product WHERE id';
        $result = mysqli_query($con,$query);
            if($result):
            while($data = mysqli_fetch_assoc($result)):
            endwhile;
            endif;
    ?>
    <section id="product1" class="section-p1">
        <div class="mySlides">
            <div class="pro-container">
                <a href="sproduct.php?id='1'">                    
                    <div class="pro">
                        <img src="asset/digiart/- (1).png" alt="">
                        <div class="des">
                            <span>OC-Main Char</span>
                            <h5>Same-San</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.50.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='2'">
                    <div class="pro">
                        <img src="asset/digiart/- (2).png" alt="">
                        <div class="des">
                            <span>Vtuber</span>
                            <h5>Mythia Batford</h5>
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
                <a href="sproduct.php?id='3'">
                    <div class="pro">
                        <img src="asset/digiart/-.png" alt="">
                        <div class="des">
                            <span>Chibi Potret</span>
                            <h5>Couple Art</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.50.000</h4>
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
                <a href="sproduct.php?id='6'">
                    <div class="pro">
                        <img src="asset/digiart/product1.png" alt="">
                        <div class="des">
                            <span>EventArt</span>
                            <h5>HUT 77 RI</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.75.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='7'">
                    <div class="pro">
                        <img src="asset/digiart/product3.jpg" alt="">
                        <div class="des">
                            <span>Anime</span>
                            <h5>Kakashi Sharingan</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.30.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='8'">
                    <div class="pro">
                        <img src="asset/digiart/product7.png" alt="">
                        <div class="des">
                            <span>Anime</span>
                            <h5>Yuzuru - SilentVoice</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.50.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
            </div>
        </div>
        <div class="mySlides">
            <div class="pro-container">
                <a href="sproduct.php?id='15'">
                    <div class="pro">
                        <img src="asset/digiart/new3.jpg" alt="">
                        <div class="des">
                            <span>Anime</span>
                            <h5>Deku - Hero Academy</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.35.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='16'">
                    <div class="pro">
                        <img src="asset/digiart/new2.png" alt="">
                        <div class="des">
                            <span>furry</span>
                            <h5>Leo</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.50.000</h4>
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
                <a href="sproduct.php?id='10'">
                    <div class="pro">
                        <img src="asset/digiart/product13.jpg" alt="">
                        <div class="des">
                            <span>Anime</span>
                            <h5>Take A Nap</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.60.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='11'">
                    <div class="pro">
                        <img src="asset/digiart/product8.jpg" alt="">
                        <div class="des">
                            <span>OC-Main Char</span>
                            <h5>Amatra</h5>
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
                <a href="sproduct.php?id='13'">
                    <div class="pro">
                        <img src="asset/digiart/product11.jpg" alt="">
                        <div class="des">
                            <span>SketchArt</span>
                            <h5>Woman Sketch</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.55.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
                <a href="sproduct.php?id='14'">
                    <div class="pro">
                        <img src="asset/digiart/product10.jpg" alt="">
                        <div class="des">
                            <span>Anime</span>
                            <h5>Baby Kurama</h5>
                            <div class="star">
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                                <i class="fas fa-star"><ion-icon ios="ios-star" md="md-star"></ion-icon></i>
                            </div>
                            <h4>Rp.35.000</h4>
                        </div>
                        <a href="#"><i class="cart"><ion-icon ios="ios-cart" md="md-cart"></ion-icon></i></a>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a onclick="currentDivs(1)" class="demo">1</a>
        <a onclick="currentDivs(2)" class="demo">2</a>
        <a><i><ion-icon ios="ios-arrow-round-forward" md="md-arrow-round-forward" onclick="plusDivs(1)"></ion-icon></i></a>
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
    var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-blue", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-blue";
}
</script>
<script src="script.js"></script>
</body>

</html>