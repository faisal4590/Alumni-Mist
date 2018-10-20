<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 9/17/2018
 * Time: 12:30 AM
 */
$connect = mysqli_connect("localhost", "root", "", "alumni");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
</head>
<body>

<?php
include 'includes/sidebarmenu.php';
?>


<?php
function fill_brand($connect)
{
    $output = '';
    $sql = "SELECT * FROM alumni.alumnicoverlist";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $output .= '<option value="'.$row["alumni_cover_id"].'">'.$row["alumni_cover_dept"]. '-'.$row['batch_no'].'</option>';
    }
    return $output;
}
?>
<form method="post" action="processDeleteDepartment.php" enctype="multipart/form-data">

    <select name="eventName" id="brand" style="margin: 0 auto; width: 600px; margin-left: 300px; margin-top: 200px;">
        <option value="">Select which department you want to delete</option>
        <?php echo fill_brand($connect); ?>
    </select><br>

    <input style="margin: 0 auto; margin-left: 300px; margin-top: 10px;"
           type="submit" class="btn btn-danger" value="Delete" name="deleteEvent">

</form>

</body>
</html>