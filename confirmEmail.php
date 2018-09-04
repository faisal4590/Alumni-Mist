<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 5/18/2018
 * Time: 9:49 PM
 */

function redirect() {
    header('Location: registerNew.php');
    exit();
}

if (!isset($_GET['email']) || !isset($_GET['token'])) {
    redirect();
} else {
    $con = new mysqli('localhost', 'root', '', 'alumni');

    $email = $con->real_escape_string($_GET['email']);
    $token = $con->real_escape_string($_GET['token']);

    $sql = $con->query("SELECT u_id FROM alumni.users WHERE users.u_email='$email' AND users.tokenUser='$token' AND users.isEmailConfirmed=0")
    or die('cant connect to query');

    if ($sql->num_rows > 0) {
        $con->query("UPDATE alumni.users SET isEmailConfirmed=1, tokenUser='' WHERE users.u_email='$email'");
        header("location: registerNew.php?acceptedAccount=your account has been verified. You can login now");
    } else
        redirect();
}