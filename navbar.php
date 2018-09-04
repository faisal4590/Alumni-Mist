<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/26/2018
 * Time: 3:51 PM
 */


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumni | Home</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <link rel="stylesheet" href="css/style.css">


    <style type="text/css">
        @font-face{
            font-family:LobsterTwo-Regular;
            src: url(fonts/LobsterTwo-Regular.ttf) format('truetype');
        }
        @font-face{
            font-family:OpenSans-Regular;
            src: url(fonts/OpenSans-Regular.ttf) format('truetype');
        }
        @font-face{
            font-family:LobsterTwo-Italic;
            src: url(fonts/LobsterTwo-Italic.ttf) format('truetype');
        }

        .nav_my_style{
            font-family: LobsterTwo-Regular;
            font-size: 18px;
        }

        .navbar{
            background: #2BBBAD;
        }
        .my_nav .navbar-nav >li>a {
            color: #ecf0f1;
        }
        .my_nav .navbar-nav >li>a:hover {
            border-bottom: 3px solid #E90052;
        }
    </style>
</head>
<body>

<!--code for navigation bar starts here-->

<nav class="navbar navbar-fixed-top navbar-default  my_nav">
    <div class="container-fluid nav_my_style scrollAnimWholeMenu">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand scrollAnimLogo" href="index.php" style="color: #DD27FF; font-weight: bold; font-size: 20px;">
                <img src="images/mist%20logo.jpg" alt="" class="img-circle img-responsive" style="height: 30px;width: 40px;">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <?php
                if (!isset($_SESSION['status']))
                {
                    echo ' <li><a href="login.php">Login</a></li>';
                }
                else
                {
                    if (isset($_SESSION['access_token']))
                    {
                        echo '<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false">'
                            .$_SESSION['givenName'] . ' '.$_SESSION['familyName'].'<span class="caret"></span></a>
                
                    <ul class="dropdown-menu">
                        <li><a href="viewUserProfile.php" target="_blank">View profile</a></li>
                        <li><a href="newUpdate.php">Update profile</a></li>
                        <li><a href="timeline.php">Timeline</a></li>
                        <li><a href="open_chat.php">Chat</a></li>
                        <li><a href="viewAllUsers.php">View all users</a></li>
                         <li><a href="logout.php">Logout</a></li>
                      
                    </ul>
                </li>';
                    }

                    else{
                        echo '<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false">'
                            .$_SESSION['unm'].'<span class="caret"></span></a>
                
                    <ul class="dropdown-menu">
                        <li><a href="viewUserProfile.php" target="_blank">View profile</a></li>
                        <li><a href="newUpdate.php">Update profile</a></li>
                        <li><a href="timeline.php">Timeline</a></li>
                        <li><a href="open_chat.php">Chat</a></li>
                        <li><a href="viewAllUsers.php">View all users</a></li>
                         <li><a href="logout.php">Logout</a></li>
                      
                    </ul>
                </li>';
                    }

                }
                ?>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="donation.php"><i class="pull-left glyphicon glyphicon-usd"></i><span>Donate</span> </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="alumniList.php">All alumni </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-left" >
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="upcomingEvents.php">Upcoming events</a></li>
                        <li><a href="pastEvents.php">Past events</a></li>
                    </ul>
                </li>
            </ul>




        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--code for navigation bar ends here-->


<br><br>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>



</body>
</html>
