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
    $updateCommitteeID = $_GET['id'];
    $updateCommitteeName = htmlspecialchars($_POST['updateCommitteeName']);
    $updateCommitteeEmail = htmlspecialchars($_POST['updateCommitteeEmail']);
    $updateCommitteeMobile = htmlspecialchars($_POST['updateCommitteeMobile']);
    $updateCommitteeAddress = htmlspecialchars($_POST['updateCommitteeAddress']);
    $updateCommitteeCurrentWorkingPlace= htmlspecialchars($_POST['updateCommitteeCurrentWorkingPlace']);




    if (isset($_SESSION['access_token']))
    {
        $previousImageName = $_SESSION['userImage'];
    }
    else
    {
        $previousImageName = $_SESSION['uphoto'];
    }
    unlink("../../images/committeePictures/$previousImageName");

    $updateUserImageName = $_FILES['deleteImage']['name'];

    var_dump($previousImageName, $updateUserImageName);

    move_uploaded_file($_FILES['deleteImage']['tmp_name'], '../../images/committeePictures/'
        . $_FILES['deleteImage']['name']);


    $usd = $_SESSION['uid'];


    $sql = "UPDATE alumni.committee SET committee_name='$updateCommitteeName',
             committee_email='$updateCommitteeEmail', committee_mobile='$updateCommitteeMobile',
            committee_address='$updateCommitteeAddress',committee_current_working_place='$updateCommitteeCurrentWorkingPlace'
            WHERE id=$updateCommitteeID";


    $db->query($sql);
    $db->close();

    $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

    $sql = "UPDATE alumni.committee SET committee.committee_image='$updateUserImageName'
               WHERE id=$updateCommitteeID";
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


    header("location:manageCommittee.php");

}
else
{
    $updateCommitteeID = $_GET['id'];
    $updateCommitteeName = htmlspecialchars($_POST['updateCommitteeName']);
    $updateCommitteeEmail = htmlspecialchars($_POST['updateCommitteeEmail']);
    $updateCommitteeMobile = htmlspecialchars($_POST['updateCommitteeMobile']);
    $updateCommitteeAddress = htmlspecialchars($_POST['updateCommitteeAddress']);
    $updateCommitteeCurrentWorkingPlace= htmlspecialchars($_POST['updateCommitteeCurrentWorkingPlace']);


    if (isset($_SESSION['access_token']))
    {
        $previousImageName = $_SESSION['userImage'];
    }
    else
    {
        $previousImageName = $_SESSION['uphoto'];
    }


    $usd = $_SESSION['uid'];

    $sql = "UPDATE alumni.committee SET committee_name='$updateCommitteeName',
             committee_email='$updateCommitteeEmail', committee_mobile='$updateCommitteeMobile',
            committee_address='$updateCommitteeAddress',committee_current_working_place='$updateCommitteeCurrentWorkingPlace'
            WHERE id=$updateCommitteeID";

    mysqli_query($db, $sql) or trigger_error(mysqli_error($db) . " " . $sql);;

    $db->close();


    $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");


    $sql = "UPDATE alumni.committee SET committee.committee_image='$updateUserImageName'
               WHERE id=$updateCommitteeID";


    $db->query($sql);
    $db->close();
    header("location:manageCommittee.php");
}