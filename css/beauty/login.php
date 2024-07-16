<!DOCTYPE html>
<html>
<head>
	<title>How to Design Login & Registration Form Transition</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header" id="header">
    <div class="navbar">
        <div class="logo">
            <img src="logo (1).svg">
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
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button class="submit" type="button">Sign In</button>
      <p class="forgot-pass"><a href="C:\xampp\htdocs\dhruviproject\beauty\forgetpassword\forgot.html">Forgot Password ?</a></p>

      <div class="social-media">
        <ul>
          <li><a href="index.html" target="_blank">
            <img src="img/home.png" alt="">
          </a></li>
          <li><img src="img/facebook.png"></li>
          <li><img src="img/twitter.png"></li>
          <li><img src="img/linkedin.png"></li>
          <li><img src="img/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text">
        </label>
        <label>
          <span>Email</span>
          <input type="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password">
        </label>
        <button type="button" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>