<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/26/2018
 * Time: 9:46 PM
 */

$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

if(!empty($_POST))
{
    $msg='';

    if (empty($_FILES['userImage']['name']))
    {
        $msg.= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['userImage']['error'] > 0)
    {
        $msg.='<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }



    if (!(strtoupper(substr($_FILES['userImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['userImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['userImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['userImage']['name'], -4)) == ".PNG" ))
    {
        $msg.= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    if (file_exists('images/userImage' . $_FILES['userImage']['name']))
    {
        $msg .= 'File already uploaded. Please do not upload with a same name';
    }


    move_uploaded_file($_FILES['userImage']['tmp_name'], 'images/userImages/'
        . $_FILES['userImage']['name']);




    if(empty($_POST['fnm']) || empty($_POST['unm'])
        || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['eml']))
    {
        $msg.= '<p>Please fill up all the data</p>';
    }

    if($_POST['pwd']!=$_POST['cpwd'])
    {
        $msg.= '<p>Your password did not match. Please Enter your Password Again.</p>';
    }


    if(strlen($_POST['pwd'])>30)
    {
        $msg.= '<p>Password must be within 30 charecters....</p>';
    }


    $unm=htmlspecialchars($_POST['unm']);


    $query = "select * from users where u_unm='$unm'";
    $result = $db->query($query);
    if($result->num_rows > 0)
    {
        $msg.= '<p>Username already exists.</p>';
    }

    //same method e check korteci email already exist kina
    $email=htmlspecialchars($_POST['mail']);
    $query = "select * from users where u_email='$email'";
    $result = $db->query($query);
    if($result->num_rows > 0)
    {
        $msg.= '<p>Email already exists.</p>';
    }

    if(is_numeric($_POST['fnm']))
    {
        $msg.= '<p>Name must be in String Format...</p>';
    }

    if($msg!= '')
    {
        header('location:register.php?error=' .$msg);
    }
    else
    {
        $fnm=htmlspecialchars($_POST['fnm']);
        $unm=htmlspecialchars($_POST['unm']);
        $pwd=htmlspecialchars($_POST['pwd']);
        $email=htmlspecialchars($_POST['eml']);
        $usrImage =  $_FILES['userImage']['name'];



        //prepare statement starts here

        $sql = 'insert into users(u_fnm,u_unm,u_pwd,u_email,u_img)
			values(?,?,?,?,?)';
        $statement = $db->prepare($sql);
        $statement->bind_param("sssss",$fnm,$unm,$pwd,$email,$usrImage);
        $statement->execute();
        $statement->close();
        $db->close();

        //prepare statement ends here

        /*$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
        values('$fnm','$unm','$pwd','$gender','$email','$contact','$city')";

        $db->query($query) or die("Can't Execute Query...");*/
        header("location:register.php?ok=1");
    }
}
else
{
    header("location:index.php");
}


