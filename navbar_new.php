<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/7/2018
 * Time: 5:28 PM
 */

?>

<style>
    .navbar
    {
        background: #2BBBAD;
    }

    .my_nav .navbar-nav > li > a
    {
        color: #ecf0f1;
    }

    .my_nav .navbar-nav > li > a:hover
    {
        border-bottom: 3px solid #E90052;
    }

    #search
    {
        width: 400px;
        padding: 10px;
        display: block;
        border-radius: 4px;
        margin-left: 50px;
    }

    #search::-webkit-input-placeholder
    {
        color: white;
    }

    #result
    {
        width: 400px;
        padding: 10px;
        border-radius: 4px;
        margin: 0 auto;

    }

    #pic
    {
        vertical-align: middle;

    }

    #user
    {
        margin: 3px;
    }

    .badge, .badge-primary
    {
        background: #A552A7;
        padding: 5px;
    }

    .search
    {
        position: relative;
        color: #aaa;
        font-size: 16px;
    }

    .search input
    {
        width: 250px;
        height: 32px;

        background: #fcfcfc;
        border: 1px solid #aaa;
        border-radius: 5px;
        box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset;
    }


</style>


<!--code for navigation bar starts here-->



<nav class="navbar navbar-fixed-top navbar-default my_nav">
<!--    <div>
        <img src="images/banner.PNG" style="width: 100%;" height="50px" alt="">
    </div>-->
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand scrollAnimLogo" href="index.php"
               style="color: #DD27FF; font-weight: bold; font-size: 20px;">
                <img src="images/alumniLogo.jpg" alt="" class="img-circle img-responsive"
                     style="height: 30px;width: 40px;">
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
                            . $_SESSION['givenName'] . ' ' . $_SESSION['familyName'] . '<span class="caret"></span></a>
                
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
                    else
                    {
                        echo '<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false">'
                            . $_SESSION['unm'] . '<span class="caret"></span></a>
                
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
                    <a href="aboutus.php">About us</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="membershipApplication.php">Membership Application</a>
                </li>
            </ul>

            <?php
            if (isset($_SESSION['status']))
            {
                echo '
                            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="expiredAlumni.php">Expired alumni</a>
                </li>
            </ul>
                ';
            }
            ?>

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


            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="upcomingEventsNew.php">Upcoming events</a></li>
                        <li><a href="pastEvents.php">Past events</a></li>
                    </ul>
                </li>
            </ul>

            <?php
            //code for ticket notification starts here

            if (isset($_SESSION['status']))
            {
                $db = new mysqli('localhost', 'root', '', 'alumni') or die('cant connect to db');
                $sql = "SELECT * FROM alumni.user_ticket_notification where alumni.user_ticket_notification.user_id={$_SESSION['uid']}";
                $res = $db->query($sql) or die('cant connect to query');
                $row_cnt = $res->num_rows;

                if ($row_cnt > 0)
                {
                    echo '
                
                 <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-envelope badge badge-primary">  ' . $row_cnt . '<span> </span> </span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                
                ';

                    while ($row = $res->fetch_array(MYSQLI_ASSOC))
                    {
                        echo '
                            <li><a href="https://www.gmail.com/">' . $row['noti_message'] . '</a></li>';
                    }

                    echo '
                <form method="post" action="processDeleteNotification.php">
                       <input class="btn btn-warning pull-right" style="margin-right: 5px; width:70px;" name="clearAll" value="clear all" type="submit">
                         
                    </form>
               
                </ul>
                </li>
            </ul>
                ';
                }
                else
                {
                    echo '
                     <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-envelope badge badge-primary">  ' . $row_cnt . '<span> </span> </span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li style="padding: 5px;">No new notification </li>
                     </ul>
                </li>
            </ul>';
                }


            }
            //code for ticket notification ends here
            ?>


            <div class="inner-add">
            </div>

            <input type="text" style="color:white; border-bottom: 1px solid lightgrey;"
                   id="search" class="navbar navbar-left" placeholder="Search" name="name">
            <div id="result">





            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>


<!--code for navigation bar ends here-->
<script src="js/jquery.min.js"></script>
<script>
    $("#search").keyup(function () {
        $search = $("#search").val();
        if ($search.length > 0)
        {
            $.get("get_user.php", {"search": $search}, function ($data) {
                $("#result").html($data);
            })
        }
    });
    $("#search").keydown(function () {
        $("#result").html("");
    });


</script>
