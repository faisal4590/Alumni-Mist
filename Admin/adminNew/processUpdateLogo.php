<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 10/1/2018
 * Time: 11:58 AM
 */
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);

$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

$updateLogoTitle= htmlspecialchars($_POST['updateLogoTitle']);
$updateLogo= $_FILES['updateLogo']['name'];

move_uploaded_file($_FILES['updateLogo']['tmp_name'], '../../images/updateLogo/'
    . $_FILES['updateLogo']['name']);

$sql = "UPDATE alumni.managecontents SET logo_title='$updateLogoTitle',
             logo_image='$updateLogo'";

$db->query($sql);
$db->close();

header('location: updateLogo.php');

