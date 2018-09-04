<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/8/2018
 * Time: 5:29 PM
 */

session_start();

$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

$query = 'SELECT * FROM users WHERE u_id=' . $_SESSION['uid'];

$res = $db->query($query) or die('wrong query');

$row = $res->fetch_array(MYSQLI_ASSOC);


if (isset($_SESSION['status']))
{
    if (isset($_SESSION['access_token']))
    {
        $username = $_SESSION['fullName'];
        $userPic = $row['u_img'];
    }
    else
    {
        $username = $_SESSION['unm'];
        $userPic = $row['u_img'];
    }

}
else
{
    $username = 'anonymous';
    $userPic = 'chatAvatar.png';
}


$postBody = $_POST['userPost'];
$postTitle = $_POST['postTitle'];
$timeLineImage =  $_FILES['timelineImage']['name'];


move_uploaded_file($_FILES['timelineImage']['tmp_name'], 'images/timelineImages/'
    . $_FILES['timelineImage']['name']);

$sql       = 'INSERT INTO timeline_post(post_username,user_image,post_title,post_details,post_image,post_time)
			VALUES(?,?,?,?,?,CURRENT_TIMESTAMP())';
$statement = $db->prepare($sql);
$statement->bind_param('sssss', $username,$userPic, $postTitle,$postBody, $timeLineImage);
$statement->execute();
$statement->close();
$db->close();

header('location:timeline.php');


