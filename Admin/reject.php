<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/27/2018
 * Time: 11:38 AM
 */

?>

<?php
include('../functions/functions.php');
$id = $_GET['id'];

$query = "DELETE FROM alumni.requests WHERE requests.id = '$id';";
if(performQuery($query)){
    echo "<script>alert('Account has been rejected.')</script>";
}else{
    echo "<script>alert('Unknown error occurred. Please try again.')</script>";
}

?>
<br/><br/>
<a href="index.php">Back</a>
