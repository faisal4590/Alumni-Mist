<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/20/2018
 * Time: 9:20 PM
 */

session_start();

$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

$email=$_SESSION['email'];


$query="select * from users where u_email='$email'";

$res=$db->query($query) or die('wrong query');

$row=$res->fetch_array(MYSQLI_ASSOC);

if (!empty($row))
{
    $_SESSION['uid'] = $row['u_id'];
}

header("location: index.php");