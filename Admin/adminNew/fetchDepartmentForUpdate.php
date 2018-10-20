<?php
//load_data.php

$connect = mysqli_connect("localhost", "root", "", "alumni");
$output = '';
if(isset($_POST["brand_id"]))
{
    if($_POST["brand_id"] != '')
    {
        $sql = "SELECT * FROM alumni.alumnicoverlist WHERE alumni_cover_id = '".$_POST["brand_id"]."'";
    }
    else
    {
        $sql = "SELECT * FROM alumni.alumnicoverlist";
    }

    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $alumni_cover_dept = $row['alumni_cover_dept'];
        $batch_no= $row['batch_no'];
        $event_image = $row['alumni_cover_img'];


        $output.=' <form method="post" action="processUpdateDepartment.php?id='.$_POST["brand_id"].'" enctype="multipart/form-data">';

        $output .= ' 
            <div class="h1 alert-info text-center">
                Update alumni department
            </div>

            <div class="form-group">
                    <label for="sel1">Select department:</label>
                    <select class="form-control" id="sel1" name="updateAlumniDepartment">
                        <option>'.$row['alumni_cover_dept'].'</option>
                      
                    </select>
             </div> ';

        $output .=' <div class="form-group">
                    <div class="h1 alert-info text-center">
                        Update alumni batch no
                    </div>
                   
                </div>

                <div class="form-group">
                    <div>
                        <input type="number" class="form-control" name="updateAlumniBatchNo" value="'.$row['batch_no'].'">
                    </div>';


        $output .='<div class="h1 alert-info text-center">
                        Update alumni cover picture
                    </div>

                    <div class="form-group">
                        <div>
                            <img src="../../images/alumniCover/'.$event_image.'"  alt="" height="200" width="500">
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