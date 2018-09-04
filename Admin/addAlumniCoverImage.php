<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/20/2018
 * Time: 3:54 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/30/2018
 * Time: 7:00 PM
 */
include 'navbarAdmin.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add alumni cover image</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <form method="post" action="processAddAlumniCoverImage.php" enctype="multipart/form-data">
            <div class="h1 alert-info text-center">
                Add alumni department
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="sel1">Select department:</label>
                    <select class="form-control" id="sel1" name="addAlumniDepartment">
                        <option>CSE</option>
                        <option>EECE</option>
                        <option>ME</option>
                        <option>CIVIL</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="h1 alert-info text-center">
                        Add alumni batch no
                    </div>
                    <input type="number" class="form-control" name="addAlumniBatchNo" placeholder="batch no">
                </div>

                    <div class="h1 alert-info text-center">
                        Add alumni cover picture
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="file" required class="filestyle" name="alumniCoverPic">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-success" value="Submit" name="submitAddUpcomingEvents">
                    </div>

        </form>


    </div>

</div>

<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
</body>
</html>

