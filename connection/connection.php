<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/26/2018
 * Time: 9:02 PM
 */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'alumni');
$dbHost = DB_HOST;
$dbUser = DB_USER;
$dbPassword = DB_PASS;
$dbName = DB_NAME;

$db = new mysqli($dbHost,$dbUser,$dbPassword,$dbName);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else
{
    $db->select_db('alumni');
    //echo 'Connection successful';
}


?>