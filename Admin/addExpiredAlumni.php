<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/15/2018
 * Time: 12:23 PM
 */
?>

<?php
include 'navbarAdmin.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add upcoming events</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>

<div class="container">
    <div class="row">
        <form method="post" action="processAddExpiredAlumni.php" enctype="multipart/form-data">
            <div class="h1 alert-info text-center">
                Add expired alumni name
            </div>

            <div class="form-group">
                <div>
                    <input type="text" name="addExpiredAlumniName" class="form-control" placeholder="expired alumni name" required>
                </div>

                <div class="h1 alert-info text-center">
                    Add expired alumni department
                </div>

                <div class="form-group">
                    <div>
                        <input type="text" name="addExpiredAlumniDept" class="form-control"
                               placeholder="expired alumni department" required>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add expired alumni birthdate
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="date" name="addExpiredAlumniBirthDate" class="form-control" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add expired alumni death year
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="date" name="addExpiredAlumniDeathTime" class="form-control" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add expired alumni's memorable achievements
                    </div>

                    <div class="form-group">
                        <div>
                            <textarea name="addExpiredAlumniAchv" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add expired alumni picture
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="file" class="filestyle" name="expiredAlumniImage">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-success" value="Submit" name="submitAddExpiredAlumni">
                    </div>

        </form>


    </div>

</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-filestyle.min.js"></script>
</body>
</html>

