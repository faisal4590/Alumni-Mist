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
    $updateEventID = $_GET['id'];
    $updateEventTitle = htmlspecialchars($_POST['updateUpcomingEventTitle']);
    $updateEventLocation = htmlspecialchars($_POST['updateUpcomingEventLocation']);
    $updateEventTime = htmlspecialchars($_POST['updateUpcomingEventTime']);
    $updateEventDuration = htmlspecialchars($_POST['updateUpcomingEventDuration']);
    $updateEventDescription = htmlspecialchars($_POST['updateUpcomingEventDescription']);




    if (isset($_SESSION['access_token']))
    {
        $previousImageName = $_SESSION['userImage'];
    }
    else
    {
        $previousImageName = $_SESSION['uphoto'];
    }
    unlink("../../images/upcomingEventImages/$previousImageName");

    $updateUserImageName = $_FILES['deleteImage']['name'];

    var_dump($previousImageName, $updateUserImageName);

    move_uploaded_file($_FILES['deleteImage']['tmp_name'], '../../images/upcomingEventImages/'
        . $_FILES['deleteImage']['name']);


    $usd = $_SESSION['uid'];


    $sql = "UPDATE alumni.upcoming_events SET upcoming_event_title='$updateEventTitle',
             upcoming_event_location='$updateEventLocation', upcoming_event_time='$updateEventTime',
             upcoming_event_duration='$updateEventDuration',upcoming_event_description='$updateEventDescription',
            upcoming_event_image='$updateUserImageName'
            WHERE upcoming_event_id=$updateEventID";


    $db->query($sql);
    $db->close();

    $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

    $sql = "UPDATE alumni.upcoming_events SET upcoming_events.upcoming_event_image='$updateUserImageName'
               WHERE upcoming_event_id=$updateEventID";
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


    header("location:updateEvents.php");

}
else
{
    $updateEventID = $_GET['id'];
    $updateEventTitle = htmlspecialchars($_POST['updateUpcomingEventTitle']);
    $updateEventLocation = htmlspecialchars($_POST['updateUpcomingEventLocation']);
    $updateEventTime = htmlspecialchars($_POST['updateUpcomingEventTime']);
    $updateEventDuration = htmlspecialchars($_POST['updateUpcomingEventDuration']);
    $updateEventDescription = htmlspecialchars($_POST['updateUpcomingEventDescription']);


    if (isset($_SESSION['access_token']))
    {
        $previousImageName = $_SESSION['userImage'];
    }
    else
    {
        $previousImageName = $_SESSION['uphoto'];
    }


    $usd = $_SESSION['uid'];


    $sql = "UPDATE alumni.upcoming_events SET upcoming_event_title='$updateEventTitle',
             upcoming_event_location='$updateEventLocation', upcoming_event_time='$updateEventTime',
             upcoming_event_duration='$updateEventDuration',upcoming_event_description='$updateEventDescription',
            upcoming_event_image='$updateUserImageName'
            WHERE upcoming_event_id=$updateEventID";

    mysqli_query($db, $sql) or trigger_error(mysqli_error($db) . " " . $sql);;

    $db->close();


    $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

    $sql = "UPDATE alumni.upcoming_events SET upcoming_event_image='$previousImageName' WHERE upcoming_event_id=$updateEventID";
    $db->query($sql);
    $db->close();
    header("location:updateEvents.php");
}