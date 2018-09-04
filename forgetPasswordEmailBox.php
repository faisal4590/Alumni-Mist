<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/14/2018
 * Time: 1:21 PM
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
</head>
<style>
    .test{
        position: absolute;
    }
    .stle{
        position: relative;
        top:300px;
        left:40%;
        width:400px;
    }
</style>
<body>
<div class="test"></div>
<form action="processForgotPassword.php" method="post">
    <div class="form-group stle">
        <label class="text-center" for="">Email:</label>
        <input class="form-control" type="text" name="email">
        <input class="btn btn-success" style="margin-top: 10px;"  type="submit" name="submit" value="submit">
    </div>

</form>
</body>
</html>

