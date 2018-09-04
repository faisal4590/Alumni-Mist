
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!--New navbar includes starts-->

    <link href="css/newNavbar/pe-icon-7-stroke.css" rel="stylesheet"/>
    <link href="css/newNavbar/ct-navbar.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/newNavbar/customNewNavStyle.css">


    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>


    <!--New navbar ends-->

</head>

<body>
<div id="navbar-full">
    <div id="navbar" style="margin-top: 100px;">
        <!--
         navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
         -->
        <nav class="navbar navbar-ct-green navbar-fixed-top navbar-transparent" role="navigation">

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="margin-left: -20px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-brand-logo scrollAnimLogo" href="index.php">
                        <div class="logo">
                            <img src="images/alumniLogo.jpg" style="height: 50px;width: 60px">
                        </div>
                        <div class="brand" style="font-family: LobsterTwo-Regular; font-size: 18px;" > MIST ALUMNI ASSOCIATION</div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
                                <i class="pe-7s-search"></i>
                                    <p class="menuText" style="font-family: LobsterTwo-Regular; font-size: 18px;">Search</p>
                            </a>
                        </li>

                        <!--Home-->
                        <li>
                            <a href="index.php">
                                <i class="pe-7s-home">
                                </i>
                                <p class="menuText" style="font-family: LobsterTwo-Regular; font-size: 18px;">Home</p>
                            </a>
                        </li>

                        <!--Login/login korar por menu-->
                        <?php
                        if (!isset($_SESSION['status']))
                        {
                            echo ' <li><a href="login.php">  <i class="pe-7s-add-user"></i><p style="font-family: LobsterTwo-Regular; font-size: 18px;">Login</p></a></li>';
                        }
                        else
                        {
                            if (isset($_SESSION['access_token']))
                            {
                                echo '<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false"><p style="font-family: LobsterTwo-Regular; font-size: 18px;">'. $_SESSION['unm'] . '</p>'.
                                    '<span class="caret"></span>
                                    <i class="pe-7s-add-user"></i>
                                    </a>
                
                    <ul class="dropdown-menu">
                        <li><a href="viewUserProfile.php" target="_blank" style="font-family: LobsterTwo-Regular; font-size: 18px;">View profile</a></li>
                        <li><a href="newUpdate.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Update profile</a></li>
                        <li><a href="timeline.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Timeline</a></li>
                        <!-- 
                        <li><a href="open_chat.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Chat</a></li>
                        <li><a href="viewAllUsers.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">View all users</a></li>-->
                        <li><a href="logout.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Logout</a></li>
                      
                    </ul>
                    </li>';
                            }
                            else
                            {
                                echo '<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false"><img src="images/mine.jpg" 
                    class="img-circle" height="35" width="35" alt="">
                    <p style="font-family: LobsterTwo-Regular; font-size: 18px;">' . $_SESSION['unm'] . '</p>'
                                    . '<span class="caret"></span>
                                    
                                    </a>
                
                    <ul class="dropdown-menu">
                        <li><a href="viewUserProfile.php" target="_blank" style="font-family: LobsterTwo-Regular; font-size: 18px;">View profile</a></li>
                        <li><a href="newUpdate.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Update profile</a></li>
                        <li><a href="timeline.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Timeline</a></li>
                        <!-- 
                        <li><a href="open_chat.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Chat</a></li>
                        <li><a href="viewAllUsers.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">View all users</a></li>-->
                        <li><a href="logout.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Logout</a></li>
                      
                    </ul>
                    </li>';
                            }
                        }
                        ?>

                        <!--About us-->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="aboutus.php"><i class="pe-7s-users"></i><p style="font-family: LobsterTwo-Regular; font-size: 18px;">About us</p></a>
                            </li>
                        </ul>

                        <!--Membership application-->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="membershipApplication.php"><i class="pe-7s-pen"></i><p style="font-family: LobsterTwo-Regular; font-size: 18px;">Membership</p></a>
                            </li>
                        </ul>

                        <!--Expired Alumni-->
                        <?php
                        if (isset($_SESSION['status']))
                        {
                            echo '
                            <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="expiredAlumni.php"><i class="pe-7s-delete-user"></i><p style="font-family: LobsterTwo-Regular; font-size: 18px;">Expired Alumni</p></a>
                            </li>
                            </ul>
                            ';
                        }
                        ?>

                        <!--Donate-->
                        <!--<ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="donation.php"><i class="pe-7s-cash"></i><p style="font-family: LobsterTwo-Regular; font-size: 18px;">Donate</p> </a>
                            </li>
                        </ul>-->

                        <!--All alumni-->

                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="alumniList.php"><i class="pe-7s-albums"></i><p style="font-family: LobsterTwo-Regular; font-size: 18px;">All Alumni</p></a>
                            </li>
                        </ul>


                        <!--Events-->

                        <ul class="nav navbar-nav navbar-left">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><i class="pe-7s-bell"></i><p style="font-family: LobsterTwo-Regular; font-size: 18px;">Events</p> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="upcomingEventsNew.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Upcoming events</a></li>
                                    <li><a href="pastEvents.php" style="font-family: LobsterTwo-Regular; font-size: 18px;">Past events</a></li>
                                </ul>
                            </li>
                        </ul>


                        <!--Notification for ticket generation-->
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
                                           <i class="pe-7s-mail"> 
                                                <span class="label">' . $row_cnt . '</span>
                                            </i>
                                            <p style="font-family: LobsterTwo-Regular; font-size: 18px;">Message</p>
                                           <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                    
                                    ';

                                while ($row = $res->fetch_array(MYSQLI_ASSOC))
                                {
                                    echo '
                                    <li><a href="https://www.gmail.com/" style="font-family: LobsterTwo-Regular; font-size: 18px;">' . $row['noti_message'] . '</a></li>';
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
                                                   <i class="pe-7s-mail"> 
                                                                                    <span class="label">' . $row_cnt . '</span>
                                                                                </i>
                                                                                <p style="font-family: LobsterTwo-Regular; font-size: 18px;">Message</p>
                                                                               <span class="caret"></span></a>
                                                                       
                                                <ul class="dropdown-menu">
                                                <li style="padding: 5px;" style="font-family: LobsterTwo-Regular; font-size: 18px;">No new notification </li>
                                                 </ul>
                                            </li>
                                        </ul>';
                            }


                        }
                        //code for ticket notification ends here
                        ?>


                    </ul>
                    <div class="inner-add">
                    </div>
                    <form class="navbar-form navbar-right navbar-search-form" role="search">
                        <div class="form-group">
                            <input type="text" name="name" id="search" value="" class="form-control" placeholder="Search...">
                            <div id="result"></div>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->

</body>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/newNavbar/ct-navbar.js"></script>
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

</html>