<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/20/2018
 * Time: 12:43 AM
 */
?>

<?php
session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("406472428380-li7ag9uem4pleqitomf7dn4ha59c36mp.apps.googleusercontent.com");
$gClient->setClientSecret("BofIUa3b6IF8pz4SfL6xsKa4");
$gClient->setApplicationName("CPI Login Tutorial");
$gClient->setRedirectUri("http://localhost/alumni/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>

