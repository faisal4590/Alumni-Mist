<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/committee.css">
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <title> Our Team Style  </title>
</head>

<body>

<?php
include 'navbarNew2.php';
?>
<div class="demo">
    <div class="container">
        <div class="row text-center">
            <h1 class="heading-title"> MIST ALUMNI COMMITTEE</h1>
        </div>

        <div class="row text-center">
            <h3 class=""> Alumni president</h3>
        </div>
        <?php
        $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");
        $query = 'SELECT * FROM alumni.committee';

        $res = $db->query($query) or die('wrong query');
        while ($row = $res->fetch_array(MYSQLI_ASSOC))
        {
            if ($row['committee_designation'] == "President")
            {
                echo '
                        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/committeePictures/'.$row['committee_image'].'" alt=""/>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">'.$row['committee_name'].'</h3>
                        <small class="post">web developer</small>
                        <small>Email: <b>'.$row['committee_email'].'</b></small>
                    </div>
                    <div class="team-layer">
                        <a href="#">'.$row['committee_name'].'</a><br>
                        <a href="#">ALUMNI PRESIDENT</a>
                        <span class="post">'.$row['committee_email'].'</span>
                        <span class="post">'.$row['committee_mobile'].'</span>
                        <span class="post">'.$row['committee_address'].'</span>
                        <span class="post">'.$row['committee_current_working_place'].'</span>
                    </div>
                </div>
            </div>

        </div>
                
                ';
            }
        }
        ?>

    </div>
</div>


<div style="margin-top: -150px;" class="demo">
    <div class="container">

        <div class="row">


                <?php
                $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");
                $query = 'SELECT * FROM alumni.committee';

                $res = $db->query($query) or die('wrong query');
                while ($row = $res->fetch_array(MYSQLI_ASSOC))
                {
                    if ($row['committee_designation'] !== "President")
                    {
                        echo '
                <div class="col-md-3 col-sm-6">
                    <div class="row text-center">
                        <h4 class="">'.$row['committee_designation'].'</h4>
                    </div>
                
                <div class="our-team">
                    <div class="pic">
                       <img src="images/committeePictures/'.$row['committee_image'].'" alt=""/>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">'.$row['committee_name'].'</h3>
                        <small class="post">web developer</small>
                        <small>Email: <b>'.$row['committee_email'].'</b></small>
                    </div>
                    <div class="team-layer">
                        <a href="#">'.$row['committee_name'].'</a><br>
                        <a href="#">'.$row['committee_designation'].'</a>
                        <span class="post">'.$row['committee_email'].'</span>
                        <span class="post">'.$row['committee_mobile'].'</span>
                        <span class="post">'.$row['committee_address'].'</span>
                        <span class="post">'.$row['committee_current_working_place'].'</span>
                    </div>
                </div>
                 </div>
                ';
                    }

                }
                ?>




        </div>
    </div>
</div>

<?php
include "footer.php";
?>
</body>
</html>
