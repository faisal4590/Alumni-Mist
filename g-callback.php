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


$_SESSION['id']         = $userData['id'];
$_SESSION['email']      = $userData['email'];
$_SESSION['gender']     = $userData['gender'];
$_SESSION['picture']    = $userData['picture'];
$_SESSION['familyName'] = $userData['familyName'];
$_SESSION['givenName']  = $userData['givenName'];
$_SESSION['status']     = true;
$_SESSION['fullName'] = $_SESSION['givenName'] . ' ' . $_SESSION['familyName'];

$userFullname = $_SESSION['givenName'] . ' ' . $_SESSION['familyName'];

$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");



//same method e check korteci email already exist kina
$email = $_SESSION['email'];
var_dump($email);
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
    $url_to_image = $_SESSION['picture'];
    $my_save_dir = 'images/userImages/';
    $filename = basename($url_to_image);
    $complete_save_loc = $my_save_dir . $filename;
    file_put_contents($complete_save_loc, file_get_contents($url_to_image));

    $imageFileType = pathinfo($filename, PATHINFO_EXTENSION); // .png .jpg
    $newUniqueFileName = uniqid() . "." . $imageFileType;

    $_SESSION['userImage'] = $newUniqueFileName;

    $newUniqueCompleteFilePath = $my_save_dir . $newUniqueFileName;
    rename ($complete_save_loc, $newUniqueCompleteFilePath);


    $sql       = 'insert into users(u_fnm,u_unm,u_email,u_img)
        values(?,?,?,?)';
    $statement = $db->prepare($sql);
    $statement->bind_param("ssss",$userFullname, $_SESSION['givenName'], $_SESSION['email'], $newUniqueFileName);
    $statement->execute();
    $statement->close();
    $db->close();

    echo 'not multiple users';

    header('Location: extraSession.php');
    exit();
}


?>
