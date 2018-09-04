<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 5/10/2018
 * Time: 11:14 PM
 */
?>

<?php

include 'connection/connection.php';


$sql = "SELECT * FROM alumni.users WHERE u_unm LIKE '%".$_GET['search']."%'";

$array = $db->query($sql);


foreach ($array as $key){

    ?>
    <div id="user"><img width="50" height="50" src="images/userImages/<?php echo $key['u_img'];?>" id="pic" alt="">
        <span><?php echo $key['u_unm']; ?></span></div>
    <?php

}
