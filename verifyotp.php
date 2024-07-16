<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
      $servername = "localhost";
$username = "root";
$password = "";
$db = "parlour";

 $con = mysqli_connect($servername,$username,$password,$db);

 if($con)
 {
    echo " connected";
    if (isset($_POST['btn'])) {
    	  $name = $_POST['name'];
        $email = $_POST['email'];
        $add = $_POST['add'];
        $dob = $_POST['dob'];
        $num = $_POST['num'];
        $pass = $_POST['pass'];
        $hash = password_hash($pass,PASSWORD_DEFAULT);

        $email = $_POST['email'];
                $otp = rand(100000, 999999);

                $mail = new PHPMailer(true);

                try {

                    //Server settings

                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'beautyparlour493@gmail.com';
                    $mail->Password   = 'ovfqclzskberrqev';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;



                    //Recipients
                    $mail->setFrom('beautyparlour493@gmail.com', 'beauty parlour');
                    $mail->addAddress($email);     //Add a recipient

                    $mail->isHTML(true);
                    //$msg=file_get_contents("beefree-wbrjvkqo22s.php");

                    $mail->Subject = 'Sign Up Verification';

                    $mail->Body    = "Thanks For Registering! <br> Here is the One Time Password for  " . $otp;

                    $mail->MsgHTML = ('h');



                    $mail->send();

                    // $sql = "INSERT INTO `registration` (`name`, `email`, `address`, `dob`, `number`, `password`, `usertype`,`otp` ) VALUES ( '$name', '$email','$add','$dob','$num','$hash','user','$otp');";
                    // $run = mysqli_query($con, $sql);
                    // if ($run) {
                    //     $showsuccess = "Otp Sent to your Email!";
                    // }
                    $sql = "INSERT INTO `verify` ( `email`, `password`,`otp` ) VALUES (  '$email','$hash','$otp');";
                    $run = mysqli_query($con, $sql);
                    
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }        
       }
    	header('location:otpform.php');

    }


 


    if (isset($_POST['btnotp'])) 
    {
      
    $otp=$_POST['otp'];
   
   $hash = password_hash($password,PASSWORD_DEFAULT);

    $sql = "select email,password,otp from verify";
    $result = mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {

   
        if ($_POST['email'] === $row['email'] &&  password_verify($password, $row['password']) && $_POST['otp'] === $row['otp']) 
        {
           			$sql = "INSERT INTO `registration` (`name`, `email`, `address`, `dob`, `number`, `password`, `usertype`,`otp` ) VALUES ( '$name', '$email','$add','$dob','$num','$hash','user','$otp');";
                     $run = mysqli_query($con, $sql);
                    
                     echo "register";

                    }
        else
       {
          echo "invalid";
        }

    }
}



	?>
 
</body>
</html>