<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/15/2018
 * Time: 1:16 PM
 */
?>

<?php
if (!empty($_POST)) {
$msg = array();



if (empty($_FILES['expiredAlumniImage']['name']))
{
$msg[] = 'Please provide a image for upcoming event';
}

if ($_FILES['expiredAlumniImage']['error'] > 0)
{
$msg[] = 'Error uploading image';
}


if (!(strtoupper(substr($_FILES['expiredAlumniImage']['name'], -4)) == ".JPG" ||
strtoupper(substr($_FILES['expiredAlumniImage']['name'], -4)) == ".jpg" ||
strtoupper(substr($_FILES['expiredAlumniImage']['name'], -5)) == ".JPEG" ||
strtoupper(substr($_FILES['expiredAlumniImage']['name'], -5)) == ".jpeg" ||
strtoupper(substr($_FILES['expiredAlumniImage']['name'], -4)) == ".GIF" ||
strtoupper(substr($_FILES['expiredAlumniImage']['name'], -4)) == ".gif" ||
strtoupper(substr($_FILES['expiredAlumniImage']['name'], -4)) == ".png" ||
strtoupper(substr($_FILES['expiredAlumniImage']['name'], -4)) == ".PNG" ))
{
$msg[] = 'wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)';
}



if (!empty($msg)) {
echo '<p style="color:red;
        margin-top: 30px;
        text-align: center;
         font-size: 22px;">
    <b >Error:-</b></p>';

foreach ($msg as $k) {
echo '<li style="color:red;
            font-weight: bold;list-style: none;
            margin-bottom: 5px;
            text-align: center;">'. $k;
    }
    } else {
    move_uploaded_file($_FILES['expiredAlumniImage']['tmp_name'], '../images/expiredAlumniImages/'
    . $_FILES['expiredAlumniImage']['name']);

    $expiredAlumniImageName = $_FILES['expiredAlumniImage']['name'];



    $expiredAlumniName = $_POST['addExpiredAlumniName'];
    $expiredAlumniDepartment= $_POST['addExpiredAlumniDept'];
    //$addExpiredAlumniBirthDate = date('Y-m-d', strtotime($_POST['addExpiredAlumniBirthDate']));
    $addExpiredAlumniBirthDate = date($_POST['addExpiredAlumniBirthDate']);
    //$addExpiredAlumniDeathTime = date('Y-m-d', strtotime($_POST['addExpiredAlumniDeathTime']));
    $addExpiredAlumniDeathTime = date($_POST['addExpiredAlumniDeathTime']);

    $addExpiredAlumniAchv = $_POST['addExpiredAlumniAchv'];

    $db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

    $query = "insert into alumni.expired_alumni(expired_alumni_name,expired_alumni_bday,
    expired_alumni_death,expired_alumni_dept,expired_alumni_achv,expired_alumni_pic)
    values('$expiredAlumniName','$addExpiredAlumniBirthDate','$addExpiredAlumniDeathTime',
    '$expiredAlumniDepartment','$addExpiredAlumniAchv',
    '$expiredAlumniImageName')";

    $db->query($query) or die("Can't Connect to Query...");
    header("location: addExpiredAlumni.php");
    }
    } else {
    header("location:index.php");
    }
