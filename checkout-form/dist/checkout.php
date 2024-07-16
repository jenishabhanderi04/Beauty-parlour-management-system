<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Checkout Form</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="iphone">
  <header class="header">
    <h1>Checkout</h1>
  </header>

  <form action="https://httpbin.org/post" class="form" method="POST">
    <div>
      <h2>Name</h2>
       <div class="card">
       <label><input type="text" name="name" size="40" maxlength="4"></label>
      </div>
    </div>
    <div>
      <h2>Contact No.</h2>
       <div class="card">
       <label><input type="text" name="contact" size="40" ></label>
      </div>
    </div>

    <div>
          <h2>Address</h2>
          <div class="card">
          <textarea id="w3review" name="w3review" rows="4" cols="46" size="82" ></textarea>
      </div>
    </div>
    <div>
      <h2>Date</h2>
       <div class="card">
       <label><input style="width:100px;" type="date" name="date"></label>
      </div>
    </div>


    <!-- <fieldset>
      <legend>Payment Method</legend>

      <div class="form__radios">
        <div class="form__radio">
          <label for="visa"><svg class="icon">
              <use xlink:href="#icon-visa" />
            </svg>Visa Payment</label>
          <input checked id="visa" name="payment-method" type="radio" />
        </div>

        <div class="form__radio">
          <label for="paypal"><svg class="icon">
              <use xlink:href="#icon-paypal" />
            </svg>PayPal</label>
          <input id="paypal" name="payment-method" type="radio" />
        </div>

        <div class="form__radio">
          <label for="mastercard"><svg class="icon">
              <use xlink:href="#icon-mastercard" />
            </svg>Master Card</label>
          <input id="mastercard" name="payment-method" type="radio" />
        </div>
      </div>
    </fieldset> -->

    <div>
      <h2>Shopping Bill</h2>

      <table>
        <tbody>
          <tr>
            <td>Shipping fee</td>
            <td align="right">$5.43</td>
          </tr>
          <tr>
            <td>Discount 10%</td>
            <td align="right">-$1.89</td>
          </tr>
          <tr>
            <td>Price Total</td>
            <td align="right">$84.82</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td>Total</td>
            <td align="right">$88.36</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <form action="checkout.html">
    <div>
    <button type="button" class="button button--full" data-bs-target="#addtocart"><a href="index.php">By Now</a></button>
    </div>
    </form>
  </form>
</div>
</body>
</html>
