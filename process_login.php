<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/26/2018
 * Time: 11:40 PM
 */

session_start();

if(!empty($_POST))
{
    $msg= '';

    if(empty($_POST['eml']))
    {
        $msg .= '<p>Email does not exist</p>';
    }

    if(empty($_POST['pwd']))
    {
        $msg .= '<p>Password is incorrect.</p>';
    }

    else
    {

        $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

        $email=$_POST['eml'];


        $query="select * from users where u_email='$email'";


        $res=$db->query($query) or die('wrong query');

        $row=$res->fetch_array(MYSQLI_ASSOC);
        if ($row['isEmailConfirmed'] == '0')
        {
            echo '<b style="color:red;font-size: 18px;text-align: center;">please verify your account first. Check your email for verification link. If no link is sent, please wait till an admin 
            verify your account.</b>';
            die();
        }

        if(!empty($row))
        {
            if($_POST['pwd'] == $row['u_pwd'])
            {
                $_SESSION=array();
                $_SESSION['unm']=$row['u_unm'];
                $_SESSION['uid']=$row['u_id'];
                $_SESSION['ufnm']=$row['u_fnm'];
                $_SESSION['upass']=$row['u_pwd'];
                $_SESSION['uemail']=$row['u_email'];
                $_SESSION['uphoto']=$row['u_img'];
                $_SESSION['status']=true;
                //ip binding code starts here
                /*$_SESSION['s_auth_var'] = generate_random_string();*/


                if($_SESSION['unm']!="admin")
                {
                    header("location:newUpdate.php");
                }
                else
                {
                    header("location:admin/adminNew/index.php");
                }
            }

            else
            {
                echo '<b style="color:red;font-size: 18px;text-align: center;">Incorrect Password.</b>';
            }
        }
        else
        {
            echo '<b style="color:red;font-size: 18px;text-align: center;">Invalid User.</b>';
        }
    }

}
else
{
    header("location:index.php");
}

?>