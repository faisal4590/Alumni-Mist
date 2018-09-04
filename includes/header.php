<?php if (!$_SESSION['status'])
{
    ?>
    <div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href="../index.php"><i class="fa fa-home"></i></a></li>
            <li class="prnt"><a href="../viewProfile.php">My Profile</a></li>
            <li class="prnt"><a href="change-password.php">Change Password</a></li>
            <li class="prnt"><a href="tour-history.php">My Tour History</a></li>

            <!-- <li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>-->
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="tol">Welcome :</li>
            <li class="sig"><?php echo htmlentities($_SESSION['login']); ?></li>
            <li class="sigi"><a href="logout.php">/ Logout</a></li>

        </ul>

        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li>
                <div class="inner-add">

                </div>

                <input type="text" style=" style="color: #2e3951; border-bottom: 1px solid lightgrey;"
                       id="search" class="navbar navbar-left" placeholder="Search" name="name">
                <div id="result">


            </li>
        </ul>



        <div class="inner-add">

        </div>





        <div class="clearfix"></div>
    </div>
    </div><?php }
else
{ ?>
    <div class="top-header">
        <div class="container">
            <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                <li class="hm"><a href="../index.php"><i class="fa fa-home"></i></a></li>
                <!--<li class="hm"><a href="admin/index.php">Admin Login</a></li>-->
            </ul>
            <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
                <li class="tol">Mobile No : +8801521201537</li>
                <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">/ Sign In</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
<?php } ?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
    <div class="container">
        <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
            <a href="../index.php">MIST <span>ALUMNI ASSOCIATION</span></a>
        </div>

        <div class="lock fadeInDown animated" data-wow-delay=".5s">
            <li><i class="fa fa-lock"></i></li>
            <li>
                <div class="securetxt">SAFE &amp; SECURE</div>
            </li>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.php">Home</a></li>

                            <?php
                            if (!isset($_SESSION['access_token']))
                            {
                                echo '
                                  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    Faisal <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a style="color: #2e3951;" href="viewUserProfile.php" target="_blank">View profile</a></li>
                                    <li><a style="color: #2e3951; href="newUpdate.php">Update profile</a></li>
                                    <li><a  style="color: #2e3951; href="timeline.php">Timeline</a></li>
                                    <li><a  style="color: #2e3951; href="open_chat.php">Chat</a></li>
                                    <li><a style="color: #2e3951; href="viewAllUsers.php">View all users</a></li>
                                    <li><a style="color: #2e3951; href="logout.php">Logout</a></li>

                                </ul>
                            </li>
                                
                                ';
                            }
                            ?>

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="aboutus.php">About us</a>
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
                                        <li><a style="color: #2e3951; href="upcomingEventsNew.php">Upcoming events</a></li>
                                        <li><a style="color: #2e3951; href="pastEvents.php">Past events</a></li>
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
                            <li><a  style="color: #2e3951; href="https://www.gmail.com/">' . $row['noti_message'] . '</a></li>';
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

                            <?php if ($_SESSION['status'])
                            {
                                ?>
                                <li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>
                                </li>
                            <?php }
                            else
                            { ?>
                                <li><a href="enquiry.php"> Enquiry </a></li>
                            <?php } ?>
                            <div class="clearfix"></div>

                        </ul>
                    </nav>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>