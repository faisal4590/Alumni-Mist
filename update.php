<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/29/2018
 * Time: 10:01 PM
 */
session_start();
?>


<!DOCTYPE html>
<html>
<title>Update profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/updateProfile.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="css/css_reset.css">
<link rel="stylesheet" href="css/jquery_ui.css">
<script type="text/javascript" src="js/angular.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Footer-with-map.css">
<link rel="stylesheet" href="css/preloader.css">


<style>
    h1, h2, h3, h4, h5, h6
    {
        font-family: "Oswald"
    }

    body
    {
        font-family: "Open Sans"
    }

</style>


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


<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">


    <!-- Image header -->


    <!-- Grid -->
    <form id="msform" role="form" method="post" action="process_update_profile.php" enctype="multipart/form-data">
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Account Update</li>
            <li>Social Profiles Update</li>
            <li>Personal Details Update</li>
            <li>Educational Profile Update</li>
            <li>Higher studies information(optional)</li>
        </ul>

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
                        ">Data successfully updated.</p>';
            echo '</legend>';
        }

        ?>

        <!-- fieldsets -->
        <fieldset>

            <h2 class="fs-title">Update your account</h2>
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

            <input class="myStyle" type="password" name="updatePassword" value="<?php echo $_SESSION['upass']; ?>"/>
            <input class="myStyle" type="password" name="confirmUpdatePassword" placeholder="Confirm Password"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Social Profiles</h2>
            <h3 class="fs-subtitle">Give the urls of your social profile</h3>
            <input class="myStyle" type="text" name="updateTwitter" value="<?php echo $row['twitter']; ?>"/>
            <input class="myStyle" type="text" name="updateFacebook" value="<?php echo $row['facebook']; ?>"/>
            <input class="myStyle" type="text" name="updateGooglePlus" value="<?php echo $row['googleplus']; ?>"/>
            <input class="myStyle" type="text" name="updateLinkedIn" value="<?php echo $row['linkedin']; ?>"/>
            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>

            <input class="myStyle" type="text" name="updateUsername" value="
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
            <input class="myStyle" type="text" name="updateUserFullName" value="
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
            <input class="myStyle" type="text" name="updateMobileNo" placeholder="mobile no"/>
            <input class="myStyle" type="text" name="updateDesignation" placeholder="designation"/>
            <input class="myStyle" type="text" name="updateCity" placeholder="city"/>
            <input class="myStyle" type="text" name="updateWorkingInfo" placeholder="current working place"/>
            <textarea class="myStyle" name="updateAddress" placeholder="Address"></textarea>
            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Educational Profile</h2>

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
                    <option class="myStyle">current student</option>
                    <option class="myStyle">previous student</option>
                </select>
            </div>
            <input class="myStyle" type="text" name="updateResearchLink"
                   placeholder="your undergraduate research link(e.g. https://www.something.com/"/>

            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Higher studies info(optional)</h2>

            <input class="myStyle" type="text" name="updateIncomingUniversityName"
                   placeholder="incoming/current university name"/>
            <input class="myStyle" type="text" name="updateIncomingCountryAndState"
                   placeholder="incoming/current country and states"/>
            <input class="myStyle" type="text" name="updateHigherDepartment" placeholder="department/major"/>
            <input class="myStyle" type="text" name="updateResearchArea"
                   placeholder="research area(e.g. Bioinformatics)"/>
            <input class="myStyle" type="text" name="updateAdmissionInDegree"
                   placeholder="admission in degree(Phd/MS)"/>
            <div class="form-group ">
                <select class="form-control myStyle" id="sel1" name="updateFundStatus">
                    <option class="myStyle">Full fund</option>
                    <option class="myStyle">partial fund</option>
                </select>
            </div>
            <input class="myStyle" type="text" name="updateUndergradeCGPA" placeholder="undergrad cgpa"/>
            <input class="myStyle" type="text" name="updateIelts" placeholder="IELTS/TOFEL score"/>
            <input class="myStyle" type="text" name="updateGre" placeholder="GRE/GMAT score"/>
            <input class="myStyle" type="text" name="updatePublications" placeholder="number of publications"/>
            <input class="myStyle" type="text" name="updateJobExperience" placeholder="job experience(e.g. 5 years)"/>
            <textarea class="myStyle" name="updateHowDidYouApply"
                      placeholder="how did you apply(in details)"></textarea>
            <textarea class="myStyle" name="updateHowDidYouManageFund"
                      placeholder="how did you manage fund(in details)"></textarea>


            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <input type="submit" name="submitUpdateForm" class="submit action-button" value="Submit"/>
        </fieldset>
    </form>

</div>

<?php
/*include 'footer.php';
*/ ?>


<script src='js/jquery.easing.min.js'></script>

<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function () {
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
            step: function (now, mx) {
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
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function () {
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
            step: function (now, mx) {
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
            complete: function () {
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
    $(window).on('load', function () {
// Animate loader off screen
        $('.se-pre-con').fadeOut('slow');
    });
</script>


<!--code for preloader ends here-->
<script type="text/javascript" src="js/moveToTop.js"></script>
</body>
</html>


















