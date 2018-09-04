<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/27/2018
 * Time: 5:13 PM
 */
?>
<?php
include('../functions/functions.php');
$ticket_id = $_GET['ticket_id'];

$query = "DELETE FROM alumni.validate_ticket WHERE validate_ticket.ticket_id = '$ticket_id';";
if(performQuery($query)){
echo "<script>alert('Ticket request has been rejected.')</script>";
}else{
echo "<script>alert('Unknown error occurred. Please try again.')</script>";
}

?>
<br/><br/>
<a href="index.php">Back</a>

