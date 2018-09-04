<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 5/10/2018
 * Time: 9:50 PM
 */
?>

<?php

include 'connection/connection.php';


$sql = "SELECT * FROM alumni.users WHERE u_unm LIKE '%" . $_GET['search'] . "%'";

$array = $db->query($sql);

foreach ($array as $key)
{

    ?>
    <div id="user">
        <a href="viewProfile.php?id=<?php echo $key['u_id'];?>" style="text-decoration: none; color:white">
            <img width="50" height="50" class="img img-circle" src="images/userImages/<?php echo $key['u_img']; ?>" id="pic" alt="">
            <span id="searchUserName"><?php echo $key['u_unm']; ?></span>
        </a>

    </div>
    <?php

}
