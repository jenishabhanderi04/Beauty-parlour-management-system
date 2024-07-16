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
    <div class="container">
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/dhruviproject/beauty/addtocart/bg1.jpg" class="d-block w-100" alt="Slide 1" style="height:70vh">
                <div class="carousel-caption d-none d-md-block v-center mb-5">
                    <h5 class="mb-5 display-3 fw-bolder text-white">Cart</h5>
                    <p class="mb-5 display-6 text-white"><small>Your cart list</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="align-middle">
                    <td>
                        <img class="border rounded me-2" src="/dhruviproject/beauty/addtocart/p1.jpg" alt="garnier" width="70" height="70">
                        Garnier skin naturals,
                        cleansing face
                    </td>
                    <td>100.00</td>
                    <td class="w-25">
                        <input type="number" name="quantity" class="w-50" value="1">
                    </td>
                    <td>100.00</td>
                    <td>
                        <button class="border-0 bg-white">
                            <img src="/dhruviproject/beauty/addtocart/del.png" alt="Delete" width="20" height="20">
                        </button>
                    </td>
                </tr>
                <tr class="align-middle">
                    <td>
                        <img class="border rounded me-2" src="/dhruviproject/beauty/addtocart/p4.jpg" alt="burger" width="70" height="70">
                       Biotique Advanced Ayurveda fruit face wash.
                    </td>
                    <td>80.00</td>
                    <td class="w-25">
                        <input type="number" name="quantity" class="w-50" value="2">
                    </td>
                    <td>160.00</td>
                    <td>
                        <button class="border-0 bg-white">
                            <img src="/dhruviproject/beauty/addtocart/del.png" alt="Delete" width="20" height="20">
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="input-group my-3 w-50 shadow-sm">
            <input type="text" class="form-control form-control-lg" placeholder="Coupon Code">
            <button class="btn btn-outline-info btn-lg" type="button">Apply Coupon</button>
        </div>
    </div>
    <div class="container">
        <div class="card w-100 shadow-sm">
            <div class="card-header text-muted">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Total Amount :
                        </div>
                        <div class="col text-end">
                            260.00
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body text-muted">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Coupon code discount :
                        </div>
                        <div class="col text-end">
                            52.00
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Payable amount :
                        </div>
                        <div class="col text-end">
                            208.00
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <div id="liveAlertPlaceholder"></div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Checkout">Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CHECKOUT -->
    <?php
    // require "C:/xampp/htdocs/Project_demo/Customer/Checkout.php";
    ?>
    
    <!-- FOOTER -->
    <?php
    // require "C:/xampp/htdocs/Project_demo/Customer/Footer.php";
    ?>

    <!-- <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

        const alert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible fade show mt-2" role="alert">`,
                `   <div>${message}</div>`,
                '   <a href="/Project_demo/Customer/Home.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>',
                '</div>'
            ].join('')

            alertPlaceholder.append(wrapper)
        }

        const alertTrigger = document.getElementById('liveAlertBtn')
        if (alertTrigger) {
            alertTrigger.addEventListener('click', () => {
                alert('Your order placed successfully.', 'success')
            })
        }
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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