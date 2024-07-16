<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="bronze.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <header class="header" id="header">
        <div class="navbar">
            <div class="logo">
                <img src="logo.svg">
            </div>
            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="index.php" class="nav-link active">home</a></li>
                    <li><a href="about.php" class="nav-link">about</a></li>
                    <li><a href="newservices.php" class="nav-link">services</a></li>
                    <li><a href="index.php#package" class="nav-link">package</a></li>
                    <li><a href="index.php#gallery" class="nav-link">gallery</a></li>
                    <li><a href="product.html" class="nav-link">products</a></li>
                    <li><a href="index.php#contact" class="nav-link">contact</a></li>
                    <li><a href="reg.php" class="nav-link">Registration</a></li>
                    <li><a href="login.php" class="nav-link">login</a></li>
                </ul>
            </nav>
            <div class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
<!-- package -->
<section class="package" id="package">
    <div class="section-title">
        <h1>promotional packages</h1>
        <span>for your bride's day</span>
    </div>
    <div class="package-cards">
        <div class="card">
            <div class="card-title">
                <h1>Gold</h1>
            </div>
            <div class="card-items">
                <div class="item">
                    <!-- <i class="far fa-check-square check-icon"></i> -->
                   <input type="checkbox" class="color">
			       <label for="web-developer">
					  <p>Hairstyle</p>
			       </label>
                </div>
                <div class="item">
                   <input type="checkbox">
			       <label for="web-developer">
                    <p>makeup</p>
                  </label>
                </div>
                <div class="item">
                   <input type="checkbox">
			       <label for="web-developer">
                    <p>nails</p>
                </label>
                </div>
                <div class="item">
                    <input type="checkbox">
                    <label for="web-developer">  
                    <p >hair removal</span></p>
                </label>
                </div>
                <div class="item">
                    <input type="checkbox">
                    <label for="web-developer"> 
                    <p >eyebrow design</span></p>
                </label>
                </div>
                <div class="item">
                    <input type="checkbox">
                    <label for="web-developer"> 
                    <p class="not">skin cleansing</span></p>
                </label>
                </div>
                <div class="item">
                    <input type="checkbox">
                    <label for="web-developer"> 
                    <p>reserved bridal room</span></p>
                </label>
                </div>
                <div class="item">
                    <input type="checkbox">
                    <label for="web-developer"> 
                    <p class="not">table fruit</span></p>
                </label>
                </div>
                <button class="btn">SUBMIT</button>
            </div>             
        </div>
</section>
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
        <!-- End Footer Section -->
        <!-- Javascript File -->
        <script src="main.js"></script>
    </body>
    </html>