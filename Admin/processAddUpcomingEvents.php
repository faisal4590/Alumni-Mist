<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/30/2018
 * Time: 7:52 PM
 */


if (!empty($_POST))
{
    $msg = array();


    if (empty($_FILES['upcomingEventImage']['name']))
    {
        $msg[] = 'Please provide a image for upcoming event';
    }

    if ($_FILES['upcomingEventImage']['error'] > 0)
    {
        $msg[] = 'Error uploading image';
    }


    if (!(strtoupper(substr($_FILES['upcomingEventImage']['name'], -4)) == ".JPG" ||
        strtoupper(substr($_FILES['upcomingEventImage']['name'], -4)) == ".jpg" ||
        strtoupper(substr($_FILES['upcomingEventImage']['name'], -5)) == ".JPEG" ||
        strtoupper(substr($_FILES['upcomingEventImage']['name'], -5)) == ".jpeg" ||
        strtoupper(substr($_FILES['upcomingEventImage']['name'], -4)) == ".GIF" ||
        strtoupper(substr($_FILES['upcomingEventImage']['name'], -4)) == ".gif" ||
        strtoupper(substr($_FILES['upcomingEventImage']['name'], -4)) == ".png" ||
        strtoupper(substr($_FILES['upcomingEventImage']['name'], -4)) == ".PNG")
    )
    {
        $msg[] = 'wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)';
    }


    if (!empty($msg))
    {
        echo '<p style="color:red;
        margin-top: 30px;
        text-align: center;
         font-size: 22px;">
         <b >Error:-</b></p>';

        foreach ($msg as $k)
        {
            echo '<li style="color:red;
            font-weight: bold;list-style: none;
            margin-bottom: 5px;
            text-align: center;">' . $k;
        }
    }
    else
    {
        move_uploaded_file($_FILES['upcomingEventImage']['tmp_name'], '../images/upcomingEventImages/'
            . $_FILES['upcomingEventImage']['name']);

        $upEventImageName = $_FILES['upcomingEventImage']['name'];

        var_dump($upEventImageName);


        $upEventTitle       = $_POST['addUpcomingEventTitle'];
        $upEventLocation    = $_POST['addUpcomingEventLocation'];
        $upEventTime        = $_POST['addUpcomingEventTime'];
        $upEventDuration    = $_POST['addUpcomingEventDuration'];
        $upEventDescription = $_POST['upcomingEventDescription'];

        var_dump($_POST);

        $db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

        $query = "insert into alumni.upcoming_events(upcoming_event_title,upcoming_event_location,
                        upcoming_event_time,upcoming_event_duration,upcoming_event_description,upcoming_event_image)
			values('$upEventTitle','$upEventLocation','$upEventTime','$upEventDuration','$upEventDescription',
			'$upEventImageName')";

        $db->query($query) or die("Can't Connect to Query...");
        header("location: addUpcomingEvents.php");

        /*$db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

        $query = "insert into alumni.upcoming_events(upcoming_event_title,upcoming_event_location,
                        upcoming_event_time,upcoming_event_duration,upcoming_event_description,upcoming_event_image)
			values('$upEventTitle','$upEventLocation','$upEventTime','$upEventDuration','$upEventDescription',
			'$upEventImageName')";

        $db->query($query) or die("Can't Connect to Query...");
        header("location:addUpcomingEvents.php");*/

    }
}
else
{
    header("location:index.php");
}