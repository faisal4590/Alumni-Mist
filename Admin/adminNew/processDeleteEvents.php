<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 9/17/2018
 * Time: 12:52 AM
 */

$db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

$eventID = $_POST['eventName'];


// sql to delete a record
$sql = "DELETE FROM alumni.upcoming_events WHERE upcoming_event_id=$eventID";

if ($db->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $db->error;
}

header("location:deleteEvents.php");