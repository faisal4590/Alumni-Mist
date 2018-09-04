<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/28/2018
 * Time: 6:25 PM
 */
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update profile</title>
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/newUpdate.css">

    <style>
        body
        {
            background-image: url(images/mainalumni1.JPG);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .myStyle
        {
            margin-bottom: 10px;
        }

        .myStyle:hover
        {
            box-shadow: 0px 0px 40px #ffa142, 0px 0px 80px rgba(256, 256, 256, 1);
            transition: 2s;
        }

        input
        {
            text-align: center;
        }

    </style>
</head>
<body>
<div class="se-pre-con"></div>
<?php
include 'navbarNew2.php';
?>

<?php

$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");
$query = 'SELECT * FROM alumni.users WHERE users.u_id=' . $_SESSION['uid'];

$res = $db->query($query) or die('wrong query');

$row = $res->fetch_array(MYSQLI_ASSOC);


?>


<form method="post" action="process_update_profile.php" enctype="multipart/form-data">
    <section>
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                        <ul class="nav nav-tabs" id="myTab">
                            <div class="liner"></div>
                            <li class="active">
                                <a href="#home" data-toggle="tab" title="account">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-home"></i>
                      </span>
                                </a></li>

                            <li><a href="#profile" data-toggle="tab" title="social profile">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-user"></i>
                     </span>
                                </a>
                            </li>
                            <li><a href="#messages" data-toggle="tab" title="personal details">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-gift"></i>
                     </span> </a>
                            </li>

                            <li><a href="#settings" data-toggle="tab" title="educational profile">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-comment"></i>
                         </span>
                                </a></li>

                            <li><a href="#doner" data-toggle="tab" title="higher studies info(optional)">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
                            </li>

                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home" style="padding: 50px;">

                            <div id="errorShow">
                                <?php
                                if (isset($_GET['error']))
                                {

                                    echo '<legend class="hidden-xs">';
                                    echo '<h3 style="color:firebrick">' . $_GET['error'] . '</h3>';
                                    echo '</legend>';

                                }

                                if (isset($_GET['ok']))
                                {

                                    echo '<legend class="hidden-xs">';

                                    echo '<p style="font-size: 18px;
                                    font-weight: bold; text-align: center;
                                    color: limegreen;
                                    ">Your information is succesfully updated.</p>';
                                    echo '</legend>';
                                }

                                ?>
                            </div>


                            <img src="images/userImages/<?php echo $row['u_img']; ?>" alt=""
                                 style="margin-bottom: 10px;"
                                 class="img-circle center-block" height="80" width="80">

                            <div class="form-group">
                                <input class="myStyle form-control" disabled type="text" name="updateEmail" value="
            <?php
                                if (isset($_SESSION['access_token']))
                                {
                                    echo $_SESSION['email'];
                                }
                                else
                                {
                                    if (isset($_SESSION['status']))
                                    {
                                        echo $_SESSION['uemail'];
                                    }
                                }

                                ?>"/>
                            </div>

                            <label for="">Update password</label>
                            <input class="myStyle form-control" type="password" name="updatePassword"
                                   value="<?php echo $_SESSION['upass']; ?>"/>
                            <label for="">Confirm password</label>
                            <input class="myStyle form-control" type="password" name="confirmUpdatePassword"
                                   placeholder="Confirm Password"/>
                            <label for="">Update profile picture</label>
                            <input type="file" class="filestyle" name="deleteImage">
                        </div>

                        <div class="tab-pane fade" id="profile" style="padding: 50px;">
                            <h3 class="h2 text-center">Give the urls of your social profile</h3>
                            <div class="form-group">
                                <label for="">Twitter</label>
                                <input class="myStyle form-control" type="text" name="updateTwitter"
                                       value="<?php echo $row['twitter']; ?>"/>
                                <label for="">Facebook</label>
                                <input class="myStyle form-control" type="text" name="updateFacebook"
                                       value="<?php echo $row['facebook']; ?>"/>
                                <label for="">Google Plus</label>
                                <input class="myStyle form-control" type="text" name="updateGooglePlus"
                                       value="<?php echo $row['googleplus']; ?>"/>
                                <label for="">Linkdin</label>
                                <input class="myStyle form-control" type="text" name="updateLinkedIn"
                                       value="<?php echo $row['linkedin']; ?>"/>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="messages" style="padding: 50px;">
                            <div class="form-group">
                                <h2 class="h2 text-center">Personal Details</h2>

                                <label for="">Username</label>
                                <input class="myStyle form-control" type="text" name="updateUsername" value="
                        <?php
                                if (isset($_SESSION['access_token']))
                                {
                                    echo $_SESSION['familyName'];
                                }
                                else
                                {
                                    if (isset($_SESSION['status']))
                                    {
                                        echo $_SESSION['unm'];
                                    }
                                }

                                ?>"/>
                                <label for="">Fullname</label>
                                <input class="myStyle form-control" type="text" name="updateUserFullName" value="
                    <?php
                                if (isset($_SESSION['access_token']))
                                {
                                    echo $_SESSION['fullName'];
                                }
                                else
                                {
                                    if (isset($_SESSION['status']))
                                    {
                                        echo $_SESSION['ufnm'];
                                    }
                                }

                                ?>"/>
                                <label for="">Mobile no</label>
                                <input class="myStyle form-control" type="text" name="updateMobileNo"
                                       value="<?php echo $row['mobile_no']; ?>"/>
                                <label for="">Designation</label>
                                <input class="myStyle form-control" type="text" name="updateDesignation"
                                       value="<?php echo $row['designation']; ?>"/>
                                <label for="">City</label>
                                <input class="myStyle form-control" type="text" name="updateCity"
                                       value="<?php echo $row['city']; ?>"/>
                                <label for="">Current working place</label>
                                <input class="myStyle form-control" type="text" name="updateWorkingInfo"
                                       value="<?php echo $row['current_working_place']; ?>"/>
                                <label for="">Address</label>
                                <textarea class="myStyle form-control"
                                          name="updateAddress"><?php echo $row['address']; ?></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings" style="padding: 50px;">
                            <div class="form-group">
                                <h3 class="h2 text-center">Educational profile</h3>

                                <label for="">Roll no: </label>
                                <input class="myStyle form-control" type="text" name="updateRoll"
                                       value="<?php echo $row['roll']; ?>"/>

                                <label for="">Registration No: </label>
                                <input class="myStyle form-control" type="text" name="updateReg"
                                       value="<?php echo $row['registration_no']; ?>"/>

                                <label for="">Department</label>
                                <div class="form-group ">
                                    <select class="form-control myStyle" id="sel1" name="updateDepartment">
                                        <option class="myStyle">CSE</option>
                                        <option class="myStyle">EECE</option>
                                        <option class="myStyle">ME</option>
                                        <option class="myStyle">AERO</option>
                                        <option class="myStyle">CIVIL</option>
                                        <option class="myStyle">EWCE</option>
                                        <option class="myStyle">NSE</option>
                                        <option class="myStyle">BME</option>
                                    </select>
                                </div>

                                <label for="">Batch no: </label>
                                <div class="form-group ">

                                    <select class="form-control myStyle" id="sel1" name="updateBatch">
                                        <option class="myStyle">1</option>
                                        <option class="myStyle">2</option>
                                        <option class="myStyle">3</option>
                                        <option class="myStyle">4</option>
                                        <option class="myStyle">5</option>
                                        <option class="myStyle">6</option>
                                        <option class="myStyle">7</option>
                                        <option class="myStyle">8</option>
                                        <option class="myStyle">9</option>
                                        <option class="myStyle">10</option>
                                        <option class="myStyle">11</option>
                                        <option class="myStyle">12</option>
                                        <option class="myStyle">13</option>
                                        <option class="myStyle">14</option>
                                        <option class="myStyle">15</option>
                                        <option class="myStyle">16</option>
                                        <option class="myStyle">17</option>
                                        <option class="myStyle">18</option>
                                        <option class="myStyle">19</option>
                                        <option class="myStyle">20</option>
                                        <option class="myStyle">21</option>
                                        <option class="myStyle">22</option>
                                        <option class="myStyle">23</option>
                                        <option class="myStyle">24</option>
                                        <option class="myStyle">25</option>
                                        <option class="myStyle">26</option>
                                        <option class="myStyle">27</option>
                                        <option class="myStyle">28</option>
                                        <option class="myStyle">29</option>
                                        <option class="myStyle">30</option>
                                    </select>
                                </div>


                                <div class="form-group ">
                                    <select class="form-control myStyle" id="sel1" name="updateStudentStatus">
                                        <?php
                                        $curr = 'current student';
                                        $prev = 'previous student';
                                        if ($row['student_status'] == 'current student')
                                        {
                                            echo ' 
                                        <option class="myStyle form-control" >' . $curr . '</option>
                                        <option class="myStyle form-control">' . $prev . '</option>';
                                        }
                                        else
                                        {
                                            echo ' 
                                        <option class="myStyle form-control" >' . $prev . '</option>
                                        <option class="myStyle form-control">' . $curr . '</option>';
                                        }
                                        ?>

                                    </select>
                                </div>
                                <label for="">Research link</label>
                                <input class="myStyle form-control" type="text" name="updateResearchLink"
                                       value="<?php echo $row['research_link']; ?>"/>


                                </fieldset>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="doner" style="padding: 50px;">
                            <div class="form-group">
                                <h3 class="h2 text-center">Higher study info(optional)</h3>

                                <label for="">Incoming/current university name</label>
                                <input class="myStyle form-control" type="text" name="updateIncomingUniversityName"
                                       value="<?php echo $row['higher_uni']; ?>"/>
                                <label for="">Incoming/current country/state</label>
                                <input class="myStyle form-control" type="text" name="updateIncomingCountryAndState"
                                       value="<?php echo $row['higher_cntry']; ?>"/>
                                <label for="">Department/major</label>
                                <input class="myStyle form-control" type="text" name="updateHigherDepartment"
                                       value="<?php echo $row['higher_dept']; ?>"/>
                                <label for="">Research area(e.g. Bioinformatics)</label>
                                <input class="myStyle form-control" type="text" name="updateResearchArea"
                                       value="<?php echo $row['higher_research_area']; ?>"/>
                                <label for="">Admission in degree(PHD/MS)</label>
                                <input class="myStyle form-control" type="text" name="updateAdmissionInDegree"
                                       value="<?php echo $row['higher_admsn']; ?>"/>

                                <div class="form-group">
                                    <select class="form-control myStyle" id="sel1" name="updateFundStatus">
                                        <?php
                                        $full    = 'full fund';
                                        $partial = 'partial fund';
                                        if ($row['higher_fund_status'] == 'full fund')
                                        {
                                            echo ' 
                                        <option class="myStyle form-control" >' . $full . '</option>
                                        <option class="myStyle form-control">' . $partial . '</option>';
                                        }
                                        else
                                        {
                                            echo ' 
                                        <option class="myStyle form-control" >' . $partial . '</option>
                                        <option class="myStyle form-control">' . $full . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <label for="">Undergrad CGPA</label>
                                <input class="myStyle form-control" type="text" name="updateUndergradeCGPA"
                                       value="<?php echo $row['higher_CGPA']; ?>"/>
                                <label for="">IELTS/TOFEL score</label>
                                <input class="myStyle form-control" type="text" name="updateIelts"
                                       value="<?php echo $row['higher_ielts']; ?>"/>
                                <label for="">GRE/GMAT score</label>
                                <input class="myStyle form-control" type="text" name="updateGre"
                                       value="<?php echo $row['higher_gre']; ?>"/>
                                <label for="">Number of publications</label>
                                <input class="myStyle form-control" type="text" name="updatePublications"
                                       value="<?php echo $row['higher_publications']; ?>"/>
                                <label for="">Job experience</label>
                                <input class="myStyle form-control" type="text" name="updateJobExperience"
                                       value="<?php echo $row['higher_job_experience']; ?>"/>
                                <label for="">How did you apply</label>
                                <textarea class="myStyle form-control" name="updateHowDidYouApply">
                                    <?php echo $row['higher_apply']; ?>
                                </textarea>
                                <label for="">How did you manage fund</label>
                                <textarea class="myStyle form-control" name="updateHowDidYouManageFund">
                                    <?php echo $row['higher_fund']; ?>
                                </textarea>

                                <input type="submit" name="submitUpdateForm" class="btn btn-success pull-right"
                                       value="Submit"/>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</form>


<?php
include 'footer.php';
?>


<script src='js/jquery.easing.min.js'></script>
<script src="js/bootstrap-filestyle.min.js"></script>

<script>
    setTimeout(function() {
        $('#errorShow').fadeOut('slow');
    }, 3000); // <-- time in milliseconds
</script>

<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function ()
    {
        if (animating)
        {
            return false;
        }
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx)
            {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function ()
            {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function ()
    {
        if (animating)
        {
            return false;
        }
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx)
            {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function ()
            {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });


</script>


<!--code for preloader starts here-->

<script type="text/javascript" src="js/mordernizer.js"></script>
<script>
    $(window).on('load', function ()
    {
// Animate loader off screen
        $('.se-pre-con').fadeOut('slow');
    });
</script>


<!--code for preloader ends here-->
<script type="text/javascript" src="js/moveToTop.js"></script>

<script>
    $(function ()
    {
        $('a[title]').tooltip();
    });

</script>

</body>
</html>
