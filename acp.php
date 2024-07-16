<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
        .error{
            color: red;
            margin-top: 0px;
            padding-top: 0px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit service Form</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="addservice.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <?php
        use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require('PHPMailer/src/PHPMailer.php');
    require('PHPMailer/src/Exception.php');
    require('PHPMailer/src/SMTP.php');

        ?>

        <?php
                       $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "parlour";

                        $con= mysqli_connect($servername,$username,$password,$database);

                        if (!$con) {
                            echo "not connected";
                        }

else{
 //echo "connected";
    header('location:viewappoin.php');
   }

   if(isset($_GET['uid']))
   {
       $id = $_GET['uid'];
       $sql = "select * from `bookappointment` where id=$id";
       $result = mysqli_query($con,$sql);
       $row=mysqli_fetch_assoc($result);
                $id = $row['id'];
               
                $email = $row['email'];
       

      
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

                    $mail->Subject = 'your bookappointment ';

                    $mail->Body    = "your appintment is accept" ;

                    $mail->MsgHTML = ('h');



                    $mail->send();
                    
                    $sql = "update `bookappointment` set status = 'accept' where id = '$id';";
                    $run = mysqli_query($con, $sql);
                    if ($run) {
                       // $showsuccess = "Otp Sent to your Email!";
                        //header location to otp pAGE
                        // header('location:otpform.php');
                    }
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }        
       }
   


      
        
    
  
?>


       

    <!-- header start -->
    
</body>
</html>