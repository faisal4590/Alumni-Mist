<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 9/16/2018
 * Time: 11:43 PM
 */

session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);

$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

if (!empty($_FILES['deleteImage']['name']))
{
    $updateDepartmentID = $_GET['id'];
    $updateDepartmentName= htmlspecialchars($_POST['updateAlumniDepartment']);
    $updateAlumniBatchNo= htmlspecialchars($_POST['updateAlumniBatchNo']);




    if ($updateDepartmentName=="CSE")
    {
        move_uploaded_file($_FILES['alumniCoverPic']['tmp_name'], '../../images/alumniCover/CSE/'
            . $_FILES['alumniCoverPic']['name']);

    }
    else if ($updateDepartmentName=="EECE")
    {
        move_uploaded_file($_FILES['alumniCoverPic']['tmp_name'], '../../images/alumniCover/EECE/'
            . $_FILES['alumniCoverPic']['name']);
    }
    else if ($updateDepartmentName=="CIVIL")
    {
        move_uploaded_file($_FILES['alumniCoverPic']['tmp_name'], '../../images/alumniCover/CIVIL/'
            . $_FILES['alumniCoverPic']['name']);
    }
    else if ($updateDepartmentName=="ME")
    {
        move_uploaded_file($_FILES['alumniCoverPic']['tmp_name'], '../../images/alumniCover/ME/'
            . $_FILES['alumniCoverPic']['name']);
    }




    if (isset($_SESSION['access_token']))
    {
        $previousImageName = $_SESSION['userImage'];
    }
    else
    {
        $previousImageName = $_SESSION['uphoto'];
    }
    unlink("../../images/alumniCover/$previousImageName");

    $updateUserImageName = $_FILES['deleteImage']['name'];

    var_dump($previousImageName, $updateUserImageName);

    move_uploaded_file($_FILES['deleteImage']['tmp_name'], '../../images/alumniCover/'
        . $_FILES['deleteImage']['name']);


    $usd = $_SESSION['uid'];


    $sql = "UPDATE alumni.alumnicoverlist SET alumni_cover_dept='$updateDepartmentName',
             batch_no='$updateAlumniBatchNo',
            alumni_cover_img='$updateUserImageName'
            WHERE alumni_cover_id=$updateDepartmentID";


    $db->query($sql);
    $db->close();

    $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

    $sql = "UPDATE alumni.alumnicoverlist SET alumnicoverlist.alumni_cover_img='$updateUserImageName'
               WHERE alumni_cover_id=$updateDepartmentID";
    $db->query($sql);
    $db->close();

    if (isset($_SESSION['access_token']))
    {
        $_SESSION['userImage'] = $updateUserImageName;
    }
    else
    {
        $_SESSION['uphoto'] = $updateUserImageName;
    }


    header("location:updateDepartment.php");

}
else
{
    $updateDepartmentID = $_GET['id'];
    $updateDepartmentName= htmlspecialchars($_POST['updateAlumniDepartment']);
    $updateAlumniBatchNo= htmlspecialchars($_POST['updateAlumniBatchNo']);



    if (isset($_SESSION['access_token']))
    {
        $previousImageName = $_SESSION['userImage'];
    }
    else
    {
        $previousImageName = $_SESSION['uphoto'];
    }


    $usd = $_SESSION['uid'];


    $sql = "UPDATE alumni.alumnicoverlist SET alumni_cover_dept='$updateDepartmentName',
             batch_no='$updateAlumniBatchNo',
            alumni_cover_img='$updateUserImageName'
            WHERE alumni_cover_id=$updateDepartmentID";

    mysqli_query($db, $sql) or trigger_error(mysqli_error($db) . " " . $sql);;

    $db->close();


    $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

    $sql = "UPDATE alumni.alumnicoverlist SET alumnicoverlist.alumni_cover_img='$updateUserImageName'
               WHERE alumni_cover_id=$updateDepartmentID";

    $db->query($sql);
    $db->close();
    header("location:updateDepartment.php");
}