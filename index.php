<?php
    session_start();
    if(isset($_GET['enf'])){
        echo '<script>alert("email not found")</script>';

    }

    if(isset($_GET['pnm'])){
        echo '<script>alert("password  not matched")</script>';

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/release/v5.10.0/css/all.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  /> -->
    <link rel="stylesheet" href="style.css">
    <title>P I X N E P</title>
</head>
<body>
    
    <section id="header">
        <a href="#"><img src="img/final logo.png" class="logo" alt=""></a>
        

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="wardrobe.html">Wardrobe</a></li>
                <li><a href="art.html">Art Gallery</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><img src="img/bag.png" class="cart-icon"></a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
                <a id="btnLogin-popup" ><button class="btnLogin-popup"></button></a>
            </ul>
            
            
            <!-- <button class="btnLogin-popup"></button> -->
        </div>
        <div id="mobile">
            <a href="cart.html"><img src="img/bag.png" class="cart-icon"></a>
            <a id="btnLogin-popup" ><button class="btnLogin-popup"></button></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    

    <section id="hero">
        <h4>Pixalate your imagination.</h4>
        <h2>Design with us with your ideas.</h2>
        <h1>Stay unique.</h1>
        <P>Wear your design, wear your ideas</P>
        <button></button>
    </section>

    <div class="wrapper">
        <!-- <span class="icon-close">
            
        </span> -->
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>
        <div class="form-box login">
            <h2>LOGIN</h2>
            <form action="/PROJECT_PIXNEP/php2/login.php" method="post">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">REMEMBER ME</label><a href="#">FORGOT PASSWORD?</a>
                </div>
                <button type="submit" name="submit" class="button">LOGIN</button>
                <div class="login-register">
                    <p>Don't Have An Account?  <a href="#" class="register-link">REGISTER</a></p>
                </div>
            </form>
        </div>





        <div class="form-box register">
            <h2>REGISTRATION</h2>
            <form action="/PROJECT_PIXNEP/php2/regis.php" method="post">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="cpassword" name="cpassword" required>
                    <label>Repeat Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">AGREE TO THE TERMS & CONDITIONS</label>
                </div>
                <button type="submit" name="submit" class="button">REGISTER</button>
                <div class="login-register">
                    <p>Already Have An Account?<a href="#" class="login-link">LOGIN</a></p>
                </div>
            </form>
        </div>
    </div>    

    <section id="product1" class="section-p1">
        <h2>From Artist's Vault</h2>
        <!-- <p>Designs by artists</p> -->
        <div class="pro-container">
            <div class="pro">
                <img src="img/f1.jpg" alt="">
                <div class="des">
                    <span>T-shirt</span>
                    <h5>spider-man</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.1200</h4>
                </div>
                <a href="cart.html"><img src="img/cart.png" class="cart-icon"></a>
            </div>

            <div class="pro">
                <img src="img/f1.jpg" alt="">
                <div class="des">
                    <span>T-shirt</span>
                    <h5>spider-man</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.1200</h4>
                </div>
                <a href="cart.html"><img src="img/cart.png" class="cart-icon"></a>
            </div>

            <div class="pro">
                <img src="img/f1.jpg" alt="">
                <div class="des">
                    <span>T-shirt</span>
                    <h5>spider-man</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.1200</h4>
                </div>
                <a href="cart.html"><img src="img/cart.png" class="cart-icon"></a>
            </div>

            <div class="pro">
                <img src="img/f1.jpg" alt="">
                <div class="des">
                    <span>T-shirt</span>
                    <h5>spider-man</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.1200</h4>
                </div>
                <a href="cart.html"><img src="img/cart.png" class="cart-icon"></a>
            </div>

            <div class="pro">
                <img src="img/f2.jpg" alt="">
                <div class="des">
                    <span>Hoodie</span>
                    <h5>spider-man</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2200</h4>
                </div>
                <a href="cart.html"><img src="img/cart.png" class="cart-icon"></a>
            </div>

            <div class="pro">
                <img src="img/f2.jpg" alt="">
                <div class="des">
                    <span>Hoodie</span>
                    <h5>spider-man</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2200</h4>
                </div>
                <a href="cart.html"><img src="img/cart.png" class="cart-icon"></a>
            </div>

            <div class="pro">
                <img src="img/f2.jpg" alt="">
                <div class="des">
                    <span>Hoodie</span>
                    <h5>spider-man</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2200</h4>
                </div>
                <a href="cart.html"><img src="img/cart.png" class="cart-icon"></a>
            </div>

            <div class="pro">
                <img src="img/f2.jpg" alt="">
                <div class="des">
                    <span>Hoodie</span>
                    <h5>spider-man</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2200</h4>
                </div>
                <a href="cart.html"><img src="img/cart.png" class="cart-icon"></a>
            </div>
        </div>
    </section>

    <section id="login">
        <div class="login">
            <h4>login or sign up bitches!!!!</h4>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img src="img/final logo.png" class="logo-footer" alt="">
            <h4>contact</h4>
            <p><strong>Address: </strong> saraswotinagar, chabahil, RIA</p>
            <p><strong>Phone: </strong> +977 981234567</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <img src="img/facebook.png" class="icon" alt="">
                    <img src="img/instagram.png" class="icon" alt="">
                </div>
            </div>
        </div>

       <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
       </div> 

        <div class="col">  
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Help</a>
        </div> 
    </footer>

    
</div>
    
    <script src="./script.js"></script>
    <!-- <script src="./loginJs.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    window.addEventListener('beforeunload', function(event) {
        // Get the current URL
        var url = window.location.href;

        // Remove the "enf" parameter from the URL
        var updatedUrl = url.replace(/([&?]enf=[^&$]*)/, '');

        // Update the URL without reloading the page
        window.history.replaceState({}, document.title, updatedUrl);

});

</script>
</body>
</html>