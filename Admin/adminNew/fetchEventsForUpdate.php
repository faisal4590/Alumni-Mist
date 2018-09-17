<?php
//load_data.php

$connect = mysqli_connect("localhost", "root", "", "alumni");
$output = '';
if(isset($_POST["brand_id"]))
{
    if($_POST["brand_id"] != '')
    {
        $sql = "SELECT * FROM alumni.upcoming_events WHERE upcoming_event_id = '".$_POST["brand_id"]."'";
    }
    else
    {
        $sql = "SELECT * FROM alumni.upcoming_events";
    }

    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $event_title = $row['upcoming_event_title'];
        $event_location = $row['upcoming_event_location'];
        $event_time = $row['upcoming_event_time'];
        $event_duration = $row['upcoming_event_duration'];
        $event_description = $row['upcoming_event_description'];
        $event_image = $row['upcoming_event_image'];


        $output.=' <form method="post" action="processUpdateEvents.php?id='.$_POST["brand_id"].'" enctype="multipart/form-data">';

        $output .= ' 
            <div class="h1 text-center">
                Update event title
            </div>

            <div class="form-group">
                <div>
                    <input type="text" name="updateUpcomingEventTitle" class="form-control" value="'.$event_title.'">
            </div> ';

        $output .=' <div class="h1 text-center">
                    Update event location
                </div>

                <div class="form-group">
                    <div>
                        <input type="text" name="updateUpcomingEventLocation" class="form-control"
                              value="'.$event_location.'">
                    </div>';

        $output .='  <div class="h1 text-center">
                        Update event time
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="datetime-local" name="updateUpcomingEventTime" class="form-control" value="'.$event_time.'">
                        </div>
                    </div>';

        $output .='  <div class="h1  text-center">
                        Update event duration(in days)
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="number" name="updateUpcomingEventDuration" class="form-control"  value="'.$event_duration.'">
                        </div>
                    </div>';

        $output .='  <div class="h1  text-center">
                        Update event description
                    </div>

                    <div class="form-group">
                        <div>
                            <textarea name="updateUpcomingEventDescription" class="form-control" >'.$event_description.'</textarea>
                        </div>
                    </div>';

        $output .='  <div class="h1  text-center">
                        Update event picture
                    </div>

                    <div class="form-group">
                        <div>
                            <img src="../../images/upcomingEventImages/'.$event_image.'"  alt="" height="200" width="500">
                        </div>
                        <br/>
                        <input type="file" class="filestyle" name="deleteImage">
                    </div>';

        $output .= '<div class="form-group">
                        <input type="submit" class="form-control btn btn-success" value="Update" name="submitUpdateUpcomingEvents">
                    </div>';

        $output .='</form>';



    }
    echo $output;
}
?>