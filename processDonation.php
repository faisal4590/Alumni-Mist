<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/15/2018
 * Time: 1:24 AM
 */
?>

<?php


$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL. Jokhn live korbo website tokhn
// url hobe https://www.paypal.com/cgi-bin/webscr
$paypal_id = 'optimizedfaisal42_business@gmail.com'; //Business Email.. ei account e eshe sob taka joma hobe..
//live korle then paypal er real email id dibo..
$donationAmount = $_POST['donateMoney'];
?>
<html>
<head>
    <title>Donation transaction</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->

    <style>
        .test{
            margin:0 auto;
            margin-top:300px;
            width:40%;
        }
    </style>
</head>
<body>


<form method="post" action="<?php echo $paypal_url; ?>" class="test">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="<?php echo 'donation to mist alumni'; ?>">
    <!--    <input type="hidden" name="item_number" value="--><?php //echo $row['item_number']; ?><!--">-->
    <input type="hidden" name="amount" value="<?php echo $donationAmount; ?>">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Specify URLs -->
    <input type='hidden' name='return' value='http://localhost/alumni/donationSuccess.php'>

    <!-- Display the payment button. -->
    <input type="submit" class="buynow form-control btn btn-info" value="Go to your paypal account" name="submit" >
</form>
</body>
</html>

