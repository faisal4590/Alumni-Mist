<?php
//load_data.php

$connect = mysqli_connect("localhost", "root", "", "alumni");
$output = '';
if(isset($_POST["brand_id"]))
{
    if($_POST["brand_id"] != '')
    {
        $sql = "SELECT * FROM alumni.committee WHERE id = '".$_POST["brand_id"]."'";
    }
    else
    {
        $sql = "SELECT * FROM alumni.committee";
    }

    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $committee_name = $row['committee_name'];
        $committee_email= $row['committee_email'];
        $committee_mobile = $row['committee_mobile'];
        $committee_address = $row['committee_address'];
        $committee_current_working_place = $row['committee_current_working_place'];
        $event_image = $row['committee_image'];


        $output.=' <form method="post" action="processManageCommittee.php?id='.$_POST["brand_id"].'" enctype="multipart/form-data">';

        $output .= ' 
            <div class="h1 text-center">
                Update committee name
            </div>

            <div class="form-group">
                <div>
                    <input type="text" name="updateCommitteeName" class="form-control" value="'.$committee_name.'">
            </div> ';

        $output .=' <div class="h1 text-center">
                    Update committee email
                </div>

                <div class="form-group">
                    <div>
                        <input type="text" name="updateCommitteeEmail" class="form-control"
                              value="'.$committee_email.'">
                    </div>';

        $output .='  <div class="h1 text-center">
                        Update committee mobile
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="text" name="updateCommitteeMobile" class="form-control" value="'.$committee_mobile.'">
                        </div>
                    </div>';

        $output .='  <div class="h1  text-center">
                        Update committee address
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="text" name="updateCommitteeAddress" class="form-control"  value="'.$committee_address.'">
                        </div>
                    </div>';

        $output .='  <div class="h1  text-center">
                        Update committee current working place
                    </div>

                    <div class="form-group">
                        <div>
                            <textarea name="updateCommitteeCurrentWorkingPlace" class="form-control" >'.$committee_current_working_place.'</textarea>
                        </div>
                    </div>';

        $output .='  <div class="h1  text-center">
                        Update committee picture
                    </div>

                    <div class="form-group">
                        <div>
                            <img src="../../images/committeePictures/'.$event_image.'"  alt="" height="200" width="500">
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