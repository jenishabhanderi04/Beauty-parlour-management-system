<?php
include('config.php');
session_start();
$userid = $_SESSION['rid'];
echo $userid;

if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="complete";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment(name,amount,payment_status,added_on,userid) values('$name','$amt','$payment_status','$added_on','$userid')");
   // $_SESSION['rid']=mysqli_insert_id($conn);
}


// if(isset($_POST['payment_id']) && isset($_SESSION['rid'])){
//     $payment_id=$_POST['payment_id'];
//     mysqli_query($conn,"update payment set  payment_status='complete' where userid= '$userid'");
// }
?>