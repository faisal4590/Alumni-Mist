<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/15/2018
 * Time: 1:26 AM
 */
session_start();
?>

<?php

// information from PayPal
/*$item_number = $_GET['item_number'];*/

$txn_id = $_GET['tx'];
$payment_gross = $_GET['amt'];
$currency_code = $_GET['cc'];
$payment_status = $_GET['st'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donation informations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body{
            padding-top: 70px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Your donation has been completed. Here is your transaction info</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Tax number</th>
            <th>Paid amount</th>
            <th>Currency</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $txn_id; ?></td>
            <td><?php echo $payment_gross; ?></td>
            <td><?php echo $currency_code; ?></td>
            <td><?php echo $payment_status; ?></td>
        </tr>
        </tbody>
    </table>

    <?php
    $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");
    //prepare statement starts here

    if (isset($_SESSION['access_token']))
    {
        $donor_id = $_SESSION['id'];
        $donor_name = $_SESSION['fullName'];
    }
    else if (isset($_SESSION['status']))
    {
        $donor_id = $_SESSION['uid'];
        $donor_name = $_SESSION['unm'];
    }

    $sql = 'insert into alumni.donation_history(donor_id,donor_name,tax_no,paid_amount,currency,status)
			values(?,?,?,?,?,?)';
    $statement = $db->prepare($sql);
    $statement->bind_param("ssssss",$donor_id,$donor_name,$txn_id,$payment_gross,$currency_code,$payment_status);
    $statement->execute();
    $statement->close();
    $db->close();

    ?>

    <a href="index.php">click here to go home</a>
</div>
</body>
</html>

