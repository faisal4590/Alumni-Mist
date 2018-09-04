<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/14/2018
 * Time: 1:22 PM
 */

$connection = mysqli_connect("localhost", "root", "", "alumni");
$email      = $_REQUEST["email"];
$query      = mysqli_query($connection, "select * from users where users.u_email='$email'");
$row        = mysqli_fetch_array($query);
$count      = mysqli_num_rows($query);
if ($count > 0)
{
    require 'PHPMailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer();

//Enable SMTP debugging.
//$mail->SMTPDebug = 1;
//Set PHPMailer to use SMTP.
    $mail->isSMTP();
//Set SMTP host name
    $mail->Host        = "smtp.gmail.com";
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
//Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = TRUE;
//Provide username and password
    $mail->Username = "optimizedfaisal42@gmail.com";
    $mail->Password = "googlemaniac420";
//If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "false";
    $mail->Port       = 587;
//Set TCP port to connect to

    $mail->From     = "optimizedfaisal42@gmail.com";
    $mail->FromName = "Faisal";

    $mail->addAddress($row["u_email"]);

    $mail->isHTML(true);


    $mail->Subject = "Your forgotten password for MIST ALUMNI";
    $mail->Body    = "<i style='font-weight: bold;font-size: 25px;'>this is your password : </i>" . $row['u_pwd'];
    $mail->AltBody = "This is the plain text version of the email content";
    if (!$mail->send())
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
        echo '<p style="font-size: 24px;font-weight: bold;
                text-align: center; color:forestgreen; margin-top: 300px;">Check your email. Your password has been sent there.</p>';

        echo '<a href="index.php" style="text-align: center;">Go to home</a>';
    }

}

else
{
    echo '<p style="font-size: 24px;font-weight: bold;
                text-align: center; color:indianred; margin-top: 300px;">Please provide a valid email address</p>';
}


?>