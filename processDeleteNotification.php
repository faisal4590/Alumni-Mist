<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 5/11/2018
 * Time: 4:18 PM
 */
session_start();
?>

<?php
if (isset($_POST['clearAll']))
{
    $db = new mysqli('localhost','root','','alumni') or die('cant connect to db');
    $query = "DELETE FROM alumni.user_ticket_notification WHERE alumni.user_ticket_notification.user_id={$_SESSION['uid']}";
    $res = $db->query($query) or die('cant connect to query');
    header('location: index.php');
}
?>

