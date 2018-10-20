<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/20/2018
 * Time: 4:03 PM
 */
?>

<?php
if (!empty($_POST)) {
    $msg = array();


    if (!(strtoupper(substr($_FILES['alumniCoverPic']['name'], -4)) == ".JPG" ||
        strtoupper(substr($_FILES['alumniCoverPic']['name'], -4)) == ".jpg" ||
        strtoupper(substr($_FILES['alumniCoverPic']['name'], -5)) == ".JPEG" ||
        strtoupper(substr($_FILES['alumniCoverPic']['name'], -5)) == ".jpeg" ||
        strtoupper(substr($_FILES['alumniCoverPic']['name'], -4)) == ".GIF" ||
        strtoupper(substr($_FILES['alumniCoverPic']['name'], -4)) == ".gif" ||
        strtoupper(substr($_FILES['alumniCoverPic']['name'], -4)) == ".png" ||
        strtoupper(substr($_FILES['alumniCoverPic']['name'], -4)) == ".PNG" ))
    {
        $msg[] = 'wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)';
    }

    if ($_FILES['alumniCoverPic']['size'] >1048576)
    {
        $msg[] = 'Maximum allowed file size is 1MB)';
        header("location:addDepartment.php?ok=0");die();
    }

    if (!empty($msg)) {
        echo '<p style="color:red;
        margin-top: 30px;
        text-align: center;
         font-size: 22px;">
    <b >Error:-</b></p>';

        foreach ($msg as $k) {
            echo '<li style="color:red;
            font-weight: bold;list-style: none;
            margin-bottom: 5px;
            text-align: center;">'. $k;
        }
    } else {

        $alumniDepartment = $_POST['addAlumniDepartment'];
        var_dump($alumniDepartment);

        if ($alumniDepartment=="CSE")
        {
            move_uploaded_file($_FILES['alumniCoverPic']['tmp_name'], '../../images/alumniCover/CSE/'
                . $_FILES['alumniCoverPic']['name']);

        }
        else if ($alumniDepartment=="EECE")
        {
            move_uploaded_file($_FILES['alumniCoverPic']['tmp_name'], '../../images/alumniCover/EECE/'
                . $_FILES['alumniCoverPic']['name']);
        }
        else if ($alumniDepartment=="CIVIL")
        {
            move_uploaded_file($_FILES['alumniCoverPic']['tmp_name'], '../../images/alumniCover/CIVIL/'
                . $_FILES['alumniCoverPic']['name']);
        }
        else if ($alumniDepartment=="ME")
        {
            move_uploaded_file($_FILES['alumniCoverPic']['tmp_name'], '../../images/alumniCover/ME/'
                . $_FILES['alumniCoverPic']['name']);
        }


        $alumniCoverPicName = $_FILES['alumniCoverPic']['name'];
        $batchNo = $_POST['addAlumniBatchNo'];



        $expiredAlumniName = $_POST['addAlumniDepartment'];
        $db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

        $query = "insert into alumni.alumnicoverlist(alumni_cover_dept,batch_no,alumni_cover_img)
        values('$alumniDepartment','$batchNo','$alumniCoverPicName')";

        $db->query($query) or die("Can't Connect to Query...");
        header("location: addDepartment.php?ok=1");
    }
} else {
    header("location:addDepartment.php?ok=0");
}

