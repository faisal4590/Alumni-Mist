<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 5/11/2018
 * Time: 12:15 AM
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
    <title>User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Footer-with-map.css">
</head>
<style>
    .user-row
    {
        margin-bottom: 14px;
    }

    .user-row:last-child
    {
        margin-bottom: 0;
    }

    .dropdown-user
    {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }

    .dropdown-user:hover
    {
        cursor: pointer;
    }

    .table-user-information > tbody > tr
    {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information > tbody > tr:first-child
    {
        border-top: 0;
    }

    .table-user-information > tbody > tr > td
    {
        border-top: 0;
    }

    .toppad
    {
        margin-top: 20px;
    }

    tr td:first-child{
        color:#7689ff;
        font-weight: bold;
    }

</style>
<body>
<?php
include 'navbarNew2.php';
?>

<?php
$userID = $_GET['id'];

$db = new mysqli('localhost', 'root', '', 'alumni') or die('cant connect to db');

$sql = "SELECT * FROM alumni.users where u_id = '$userID'";

$res = $db->query($sql);

$row = $res->fetch_array(MYSQLI_ASSOC);

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3
            col-lg-offset-3 toppad">


            <div class="panel panel-info" style="margin-top: 100px; width: 700px;">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><?php echo $row['u_fnm']; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5 col-lg-5" align="center">
                            <img alt="User Pic" style="height: 270px;
                             box-shadow: 0px 0px 40px #D9EDF7, 0px 0px 20px rgba(256, 256, 256, 1);"
                                 src="images/userImages/<?php echo $row['u_img']; ?>"
                                 class="img-responsive">
                        </div>

                        <div class=" col-md-7 col-lg-7">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Department:</td>
                                    <td> <?php echo $row['department']; ?></td>
                                </tr>
                                <tr>
                                    <td>Designtion:</td>
                                    <td><?php echo $row['designation']; ?></td>
                                </tr>
                                <tr>
                                    <td>Current working place:</td>
                                    <td><?php echo $row['current_working_place']; ?></td>
                                </tr>

                                <tr>

                                <tr>
                                    <td>Home Address</td>
                                    <td><?php echo $row['address']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <a href="mailto:<?php echo $row['u_email']; ?>"><?php echo $row['u_email']; ?></a>
                                    </td>
                                </tr>
                                <td>Phone Number</td>
                                <td><?php echo $row['mobile_no']; ?></td>
                                </tr>

                                <?php
                                if ($row['student_status'] == "previous student")
                                {
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td style="font-weight: bold; color:#ffba98">Higher studies info</td>
                                    </tr>

                                    <tr>
                                        <td>Upcoming/current university:</td>
                                        <td><?php echo $row['higher_uni']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Upcoming/current country:</td>
                                        <td><?php echo $row['higher_cntry']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Research department:</td>
                                        <td><?php echo $row['higher_dept']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Research area:</td>
                                        <td><?php echo $row['higher_research_area']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Admission in degree:</td>
                                        <td><?php echo $row['higher_admsn']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Scholarship status:</td>
                                        <td><?php echo $row['higher_fund_status']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Undergrad CGPA:</td>
                                        <td><?php echo $row['higher_CGPA']; ?></td>
                                    </tr>


                                    <tr>
                                        <td>IELTS and GRE score:</td>
                                        <td><?php echo $row['higher_ielts'] .' , '. $row['higher_gre'] ; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>

</body>
</html>
