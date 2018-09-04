<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/27/2018
 * Time: 2:37 PM
 */
session_start();
?>

<?php

$upcoming_event_id =$_GET['event_id'];
$upcoming_event_duration =$_GET['event_duration'];
$upcoming_event_title =$_GET['event_title'];
$upcoming_event_image=$_GET['event_image'];
$upcoming_event_time =$_GET['event_time'];
$upcoming_event_description =$_GET['event_details'];
$upcoming_event_location =$_GET['event_location'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<?php
include 'navbarNew2.php';
?>
<br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div>

            <?php
            $db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");


            $query = "select * from alumni.upcoming_events where upcoming_events.upcoming_event_id = '$upcoming_event_id'; ";


            $res = $db->query($query) or die("Can't Connect to Query...");


            date_default_timezone_set('Asia/Dhaka');

            while ($row = $res->fetch_array(MYSQLI_ASSOC))
            {
                $date  = $row['upcoming_event_time'];
                $year  = date('Y', strtotime($date));
                $day   = date('d', strtotime($date));
                $month = date('M', strtotime($date));
                echo '
                
                <div class="blog">
                <div class="blog-left">
                    <div class="blog-left-grid">
                        <div class="blog-left-grid-left">
                            <img src="images/userImages/' . $_SESSION['uphoto'] . '"
                                 class=" img-circle img-responsive img-thumbnail"
                                 style="height: 100px;width:100px;">
                            <h3>' . $row['upcoming_event_title'] . '</h3>
                            <p>by <span style="color:#dd27ff">' . $_SESSION['unm'] . '</span> | ' . $month . ' ' . $day . ' ,' . $year . ' </p>
                        </div>

                        <div class="clearfix"></div>
                        <img src="images/upcomingEventImages/' . $row['upcoming_event_image'] . '"
                             alt=" " class="img-responsive img-rounded"
                             style="max-height: 400px;-webkit-filter: drop-shadow(10px 10px 10px #222);
                              filter: drop-shadow(10px 10px 10px #222); "/>
                        
                               <p class="para" style="text-align: justify; margin-top: 20px;"> 
                               ' . $row['upcoming_event_description'] . '
                               </p>
                               <form method="post" action="">
                                       <button class="btn btn-info pull-left" name="rqstTicket">Request ticket</button>
                                   </form>
                               
                               

                    </div>

                </div>

                <div class="clearfix"></div>
            </div>
                
                
                ';
            }

            ?>
            <br><br><br>

        </div>
    </div>
</div>

<?php



if (isset($_POST['rqstTicket']))
{

    if (isset($_SESSION['access_token']))
    {
        $fnm      = $_SESSION['fullName'];
        $unm      = $_SESSION['givenName'];
        $email    = $_SESSION['email'];
        $usrImage = $_SESSION['userImage'];
        $message = "$fnm would like to request an account.";
        $userID = $_SESSION['id'];
    }
    else
    {
        $fnm      = $_SESSION['ufnm'];
        $unm      = $_SESSION['unm'];
        $email    = $_SESSION['uemail'];
        $usrImage = $_SESSION['uphoto'];
        $userID = $_SESSION['uid'];

        $message = "$fnm would like to request a ticket for {$upcoming_event_title} event.";
    }

    $query = "INSERT INTO alumni.validate_ticket (user_id, upcoming_event_id, upcoming_event_title, upcoming_event_duration, 
    upcoming_event_time, upcoming_event_image, upcoming_event_location, upcoming_event_details, username, fullname, email, image, message,
    reqstTicketDate) 
			    VALUES ('$userID','$upcoming_event_id','$upcoming_event_title','$upcoming_event_duration',
			    '$upcoming_event_time','$upcoming_event_image','$upcoming_event_location','$upcoming_event_description','$unm', 
			    '$fnm','$email','$usrImage', '$message', CURRENT_TIMESTAMP )";

    if ($db->query($query))
    {
        echo "<script>alert('Your ticket request is successful.')</script>";
    }
    else{
        echo "<script>alert('Unknown error occured.')</script>";
    }
    $db->close();
}
?>

</body>
</html>



