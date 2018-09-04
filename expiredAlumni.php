<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/15/2018
 * Time: 11:51 AM
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
    <title>Expired Alumni</title>

    <link rel="stylesheet" href="css/expiredAlumni.css">
    <link rel="stylesheet" href="css/Footer-with-map.css">


    <style>
        body
        {
            background-image: url(images/mist_dark1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

    </style>
</head>

<body>


<?php
include 'navbarNew2.php';
?>

<div class="container" style="margin-top: 140px;">

    <div class="row">
        <div class="col-sm-3" style="display: inline-flex;width: 400px">

<?php
$db = new mysqli("localhost", "root", "", "alumni");

$sql = "SELECT * FROM alumni.expired_alumni";
$res = $db->query($sql);
while ($row = $res->fetch_array(MYSQLI_ASSOC))
{
    echo '
          <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="images/'.$row['expired_alumni_pic'].'" alt="" />
                </div>
                <div class="content">
                    <p>Name: '.$row['expired_alumni_name'].' <br>
                        Department: '.$row['expired_alumni_dept'].'</p>
                        Death: '.$row['expired_alumni_death'].'</p>
                        Memories:  '.$row['expired_alumni_achv'].'</p>
                </div>
            </div>
            
            <img src="images/'.$row['expired_alumni_pic'].'" class="src-image">
    
    ';
}
?>



        </div>

    </div>
</div>

<?php
include 'footer.php';
?>


<img src="images/chatAvatar.png" class="src-image">
<img src="images/chatAvatar.png" class="src-image">
<img src="images/chatAvatar.png" class="src-image">

<script src="js/profileImageBlur.js"></script>
<script type="text/javascript" src="js/moveToTop.js"></script>

</body>
</html>
