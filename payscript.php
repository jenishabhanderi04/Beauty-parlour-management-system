<?php
 session_start();
 $apiKey = "rzp_test_4fdfSU1OCN3pbQ";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_SESSION['total_amount'] * 100 ;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'O_ID'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Click here to Pay"
    data-name="Gujarat Mobile Shop"
    data-description="Best online Solution"
    data-image=""
    data-prefill.name="<?php echo $_REQUEST['P_Name'];?>"
    data-prefill.email="<?php echo $_REQUEST['Quantity'];?>"
    data-prefill.contact="<?php echo $_REQUEST['Price'];?>"
    data-prefill.contact="<?php echo $_REQUEST['Decsciption'];?>"   
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>