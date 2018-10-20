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
    <title>Add upcoming events</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <form method="post" action="processAddUpcomingEvents.php" enctype="multipart/form-data">
            <div class="h1 alert-info text-center">
                Add event title
            </div>

            <div class="form-group">
                <div>
                    <input type="text" name="addUpcomingEventTitle" class="form-control" placeholder="event title" required>
                </div>

                <div class="h1 alert-info text-center">
                    Add event location
                </div>

                <div class="form-group">
                    <div>
                        <input type="text" name="addUpcomingEventLocation" class="form-control"
                               placeholder="event location" required>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add event time
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="datetime-local" name="addUpcomingEventTime" class="form-control" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add event duration(in days)
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="number" name="addUpcomingEventDuration" class="form-control" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add event description
                    </div>

                    <div class="form-group">
                        <div>
                            <textarea name="upcomingEventDescription" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add event picture
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="file" name="upcomingEventImage">
                            <span class="alert-danger">*Max size 1MB</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-success" value="Submit" name="submitAddUpcomingEvents">
                    </div>

        </form>


    </div>

</div>


</body>
</html>
