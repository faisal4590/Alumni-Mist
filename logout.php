<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/27/2018
 * Time: 12:02 AM
 */

session_start();

$_SESSION=array(); 		//session_destroy(); array ke empty kore dilam

header("location:index.php");