<?php

/*ini_set('display_errors', 1);
error_reporting(E_ALL);*/


include('../functions/functions.php');
require '../PHPMailer-master/PHPMailerAutoload.php';


$id    =  $_GET['id'];
$query = "select * from alumni.requests where alumni.requests.id=$id;";

if (count(fetchAll($query)) > 0)
{
    foreach (fetchAll($query) as $row)
    {
        $username   = $row['username'];
        $fullname   = $row['fullname'];
        $email      = $row['email'];
        $password   = $row['password'];
        $userImage  = $row['image'];
        $department = $row['department'];
        $batch      = $row['batch_no'];
        $roll       = $row['roll'];
        $regNo      = $row['registration_no'];

        /*        $_SESSION['email']      = $email;
                $_SESSION['picture']    = $userImage;
                $_SESSION['familyName'] = $username;
                $_SESSION['status']     = true;
                $_SESSION['fullName'] = $fullname;*/

        $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);

        /*$hashedPassword = password_hash($password, PASSWORD_BCRYPT);*/

        /*$query = "INSERT INTO alumni.users (u_fnm,u_email,u_pwd,isEmailConfirmed,tokenUser)
					VALUES ('$name', '$email', '$hashedPassword', '0', '$token')";*/

        $conn = new mysqli("localhost","root", "","alumni") or die('cant connect to db');

        $query = "INSERT INTO alumni.users (u_id,u_unm,u_fnm,u_email,u_pwd,u_img,department,batch_no,roll,registration_no)
			VALUES ('$id', '$username', '$fullname', '$email', '$password', '$userImage','$department','$batch','$roll','$regNo');";
    }
    $query .= "DELETE FROM alumni.requests WHERE id=$id";

    if (mysqli_multi_query($conn,$query) or trigger_error(mysqli_error($conn)." ".$query) )
    {
        echo "<script>alert('Account has been accepted.')</script>";
        $message = 'Your account has been accepted';

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

        $mail->addAddress($email, $username);

        $mail->isHTML(true);

        $mail->Subject = "Please verify your email!";
        $mail->Body    = "
                    Please click on the link below:<br><br>
                    
                    <a href='http://localhost/alumni/confirmEmail.php?email=$email&token=$token'>Click Here</a>
                ";
        $mail->AltBody = "This is the plain text version of the email content";
        if (!$mail->send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            $msg = "You have been registered! Please verify your email!";
        }

        $query = "INSERT INTO alumni.user_registration_notification (message,user_id) 
			VALUES ('$message','$id')";
        performQuery($query);
        $_SESSION['accept_user_id'] = $id;

    }
    else
    {
        echo "<script>alert('Unknown error occurred. Please try again.')</script>";

    }
}
else
{
    echo "Error occured.";
}

?>

<a href="adminNew/index.php">Go back</a>
