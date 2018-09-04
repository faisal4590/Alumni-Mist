<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/27/2018
 * Time: 12:06 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/20/2018
 * Time: 12:45 AM
 */
?>

<?php
require_once "googleLoginConfig.php";

if (isset($_SESSION['access_token']))
{
    $gClient->setAccessToken($_SESSION['access_token']);
}
else
{
    if (isset($_GET['code']))
    {
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    }
    else
    {
        header('Location: login.php');
        exit();
    }
}

$oAuth    = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();


$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");
$email    = $userData['email'];
$usrImage    = $userData['picture'];
$unm  = $userData['givenName'];
$fnm = $userData['givenName'].' '. $userData['familyName']  ;

$message = "$fnm would like to request an account.";







//same method e check korteci email already exist kina
$email = $userData['email'];
$query  = "select * from users where u_email='$email'";
$result = $db->query($query);

if ($result->num_rows > 0)
{
    /*    $url_to_image = $_SESSION['picture'];
        $my_save_dir = 'images/userImages/';
        $filename = basename($url_to_image);
        $complete_save_loc = $my_save_dir . $filename;
        file_put_contents($complete_save_loc, file_get_contents($url_to_image));

        $imageFileType = pathinfo($filename, PATHINFO_EXTENSION); // .png .jpg
        $newUniqueFileName = uniqid() . "." . $imageFileType;

        $_SESSION['userImage'] = $newUniqueFileName;

        $newUniqueCompleteFilePath = $my_save_dir . $newUniqueFileName;
        rename ($complete_save_loc, $newUniqueCompleteFilePath);*/


    header('Location: extraSession.php');
    exit();
    echo 'multiple users';
}
else
{
    $url_to_image = $userData['picture'];
    $my_save_dir = 'images/userImages/';
    $filename = basename($url_to_image);
    $complete_save_loc = $my_save_dir . $filename;
    file_put_contents($complete_save_loc, file_get_contents($url_to_image));

    $imageFileType = pathinfo($filename, PATHINFO_EXTENSION); // .png .jpg
    $newUniqueFileName = uniqid() . "." . $imageFileType;

    $_SESSION['userImage'] = $newUniqueFileName;

    $newUniqueCompleteFilePath = $my_save_dir . $newUniqueFileName;
    rename ($complete_save_loc, $newUniqueCompleteFilePath);

    $query = "INSERT INTO alumni.requests (username,fullname,email,image,message,date) 
			    VALUES ('$unm','$fnm','$email','$newUniqueFileName','$message',CURRENT_TIMESTAMP )";


    if ($db->query($query))
    {
        echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
    }
    else{
        echo "<script>alert('Unknown error occured.')</script>";
    }
    $db->close();

    //echo 'not multiple users';
    echo '<a href="index.php">Home</a>';
    //header('Location: extraSession.php');
    exit();
}


?>

