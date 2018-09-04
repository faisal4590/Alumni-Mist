<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/7/2018
 * Time: 11:57 AM
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


$chatBody = $_POST['chatMessage'];




$sql       = 'INSERT INTO chat_history(chat_username,chat_body,chat_image,chat_time)
			VALUES(?,?,?,CURRENT_TIMESTAMP())';
$statement = $db->prepare($sql);
$statement->bind_param('sss', $username, $chatBody,$userPic);
$statement->execute();
$statement->close();
$db->close();

header('location:open_chat.php');

