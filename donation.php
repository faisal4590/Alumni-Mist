<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/15/2018
 * Time: 1:19 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .test{
            margin: 0 auto;
            width: 300px;
            margin-top:300px;
        }
    </style>
</head>
<body>


<div class="form-group test">
    <h3 class="h3">Donate using paypal</h3>
    <form method="post" action="processDonation.php">
        <input class="form-control" type="text" name="donateMoney" placeholder="enter the amount of money here(in USD)" required>  <br>
        <input class="form-control btn btn-success" type="submit" value="Donate"><br><br>
        <p>If you want to donate via bkash, use this number : +880 01521201537</p>
    </form>
</div>

</body>
</html>
