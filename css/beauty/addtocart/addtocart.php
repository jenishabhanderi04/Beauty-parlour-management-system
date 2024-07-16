<!doctype html>
<html lang="en">
  <head>
    <title> Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"href="style.css">
    <link rel="stylesheet"href="addtocart.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <!-- header start -->
   <header class="header" id="header">
        <div class="navbar">
            <div class="logo">
                <img src="logo.svg">
            </div>
            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="C:/xampp/htdocs/dhruviproject/beauty/index.html" class="nav-link active" class="nav-link active">home</a></li>
                    <li><a href="#about" class="nav-link">about</a></li>
                    <li><a href="#services" class="nav-link">services</a></li>
                    <li><a href="#package" class="nav-link">package</a></li>
                    <li><a href="#gallery" class="nav-link">gallery</a></li>
                    <li><a href="#product" class="nav-link">products</a></li>
                    <li><a href="#contact" class="nav-link">contact</a></li>
                </ul>
            </nav>
            <div class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!---Hero Section-->
    <section id="hero">
        <div class="hero-container">
            <div class="hero-logo">
                <h1 class="font-weight-bold">Cart Products</h1>
                <!-- <a href="C:/xampp/htdocs/dhruviproject/beauty/addtocart/bg1.jpeg" > </a> -->
            </div>
            </div>
    </section>
    <!---End of Hero Section-->
    <!--Cart Section-->
    <section class="mt-5">
        <div class="container">
            <div class="cart">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"class="text-white">Product</th>
                            <th scope="col"class="text-white">Price</th>
                            <th scope="col"class="text-white">Quantity</th>
                            <th scope="col"class="text-white">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                     <!--W=145 H=98--> <img src="addtocart/bg2.jpeg"alt="">
                                    </div>
                                    <div class="des">
                                        <p>lorem ipsum</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>
                                <div class="counter">
                                    <i class="fas fa-angle-down"></i>
                                    <input class="input-number"type="text"
                                    value="1"min="0"max="10">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>
                        <!----->
                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                     <!--W=145 H=98--> <img src="images/cart-1.jpg"alt="">
                                    </div>
                                    <div class="des">
                                        <p>lorem ipsum</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>
                                <div class="counter">
                                    <i class="fas fa-angle-down"></i>
                                    <input class="input-number"type="text"
                                    value="1"min="0"max="10">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>
                        <!----->
                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                     <!--W=145 H=98--> <img src="images/cart-1.jpg"alt="">
                                    </div>
                                    <div class="des">
                                        <p>lorem ipsum</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>
                                <div class="counter">
                                    <i class="fas fa-angle-down"></i>
                                    <input class="input-number"type="text"
                                    value="1"min="0"max="10">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>
                        <!----->
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>
    <div class="col-lg-4 offset-lg-4">
        <div class="checkout">
            <ul>
                <li class="subtotal">subtotal
                    <span>$60.00</span>
                </li>
                <li class="cart-total">Total
                <span>$60.00</span></li>
            </ul>
            <a href="#"class="proceed-btn">Proceed to Checkout</a>
        </div>
    </div>

















      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- footer start -->
<footer class="footer" id="contact">
        <div class="footer-list">
            <div class="footer-data">
                <h1><a href=""><img src="logo.svg"></a></h1>
                <div class="footer-data-social">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-data">
                <h2>address</h2>
                <p>Alharm - St 26<br> Giza - Egypt</p>
            </div>
            <div class="footer-data">
                <h2>We Opened</h2>
                <p>Monday To Friday <br> From 09:00 To 18:00</p>
            </div>
            <div class="footer-data">
                <h2>Contact</h2>
                <p>(20) 1111-222-333</p>
                <p>(20) 4444-555-666</p>
            </div>
        </div>
        <div class="copy">
            <p>&copy; All Rights Reserved</p>
            <span>Created by 🤎 Web Trend</span>
        </div>
    </footer>
<!-- footer end -->
    <!-- Javascript File -->
    <script src="feedback.js"></script>
  </body>
</html>