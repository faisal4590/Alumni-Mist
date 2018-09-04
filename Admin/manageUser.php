<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/25/2018
 * Time: 12:01 AM
 */
include '../functions/functions.php';
?>

<?php

/*if(($_SESSION['status']!==true) || ($_SESSION['access_token']!=true)){
    header('location:login.php');
}*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending user lists</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<?php
include 'navbarAdmin.php';
?>
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <?php
            date_default_timezone_set('Asia/Dhaka');
            $query = "select * from alumni.requests ORDER BY requests.date DESC;";
            if (count(fetchAll($query)) > 0)
            {
                foreach (fetchAll($query) as $row)
                {
                    ?>
                    <img src="../images/userImages/<?php echo $row['image'] ?>" class="img-circle"
                         style="height: 60px;width: 60px;">
                    <h1 class="jumbotron-heading"><?php echo $row['email'] ?></h1>
                    <p class="lead text-muted"><?php echo $row['message'] ?></p>
                    <p class="lead text-muted">Roll : <?php echo $row['roll'] ?></p>
                    <p class="lead text-muted">Registration No : <?php
                        if (empty($row['registration_no']))
                        {
                            echo "not available";
                        }
                        else
                        {
                            echo $row['registration_no'];
                        }

                    ?></p>
                    <p class="lead text-muted">Department : <?php echo $row['department'] ?></p>
                    <p class="lead text-muted">Batch: <?php echo $row['batch_no'] ?></p>
                    <p>
                        <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-success my-2">Accept</a>
                        <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn btn-danger my-2">Reject</a>
                    </p>
                    <p style="border-bottom: 2px dashed #f7d4a1;">
                        <small><i><?php echo $row['date'] ?></i></small>
                    </p><br>
                    <?php
                }
            }
            else
            {
                echo "No Pending Requests.";
            }
            ?>

        </div>

    </section>

</main>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>

