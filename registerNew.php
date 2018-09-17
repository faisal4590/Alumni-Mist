<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/24/2018
 * Time: 10:46 PM
 */
?>

<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/26/2018
 * Time: 9:13 PM
 */

require 'connection/connection.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>


    <link href="fonts/OleoScript-Regular.ttf" rel="stylesheet"/>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>

<div class="se-pre-con"></div>

<?php
include 'navbarNew2.php';
?>

<style>
    @font-face
    {
        font-family: Fuentechida;
        src: url(fonts/OleoScript-Regular.ttf);
    }

    body
    {
        background-image: url(images/mist_dark1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .formulario
    {
        transition: 2s;
        margin-top: -550px;
        width: 30%;
        box-shadow: 0px 0px 40px rgba(0, 255, 0, 0.3), 0px 0px 80px rgba(256, 256, 256, 1);
    }

    .formulario:hover
    {
        transition: .8s;
        background-color: rgba(0, 0, 0, .5);
    }

    .logoRegister
    {
        height: 75px;
        margin-top: 40px;
    }

    .espaciado
    {
        margin-top: 20px;
    }

    fieldset
    {
        transition: 2s;
        margin-bottom: 50px;
        border-color: rgba(213, 0, 0, 1);
        border-style: groove;
        border-width: 5px;
        border-radius: 20px;
    }

    h3, h4
    {

        color: white;
        text-align: center;
        font-family: fuentechida;
    }

    .Input
    {
        transition: .8s;
        background-color: rgba(0, 0, 0, .5);
        color: white;
        border-color: #006;
        border-bottom-color: white;
        border-bottom-style: groove;
        border-left: none;
        border-right: none;
        border-top: none;
        border-width: 4px;

    }

    .Input:hover
    {
        transition: .8s;
        background-color: rgba(55, 71, 79, .5);
        box-shadow: inset;
        border-bottom-color: red;
    }

    .Input:focus
    {
        transition: .8s;
        border-bottom-color: red;
    }

    @media screen and (max-width: 750px)
    {

        .logo
        {
            height: 50px;

        }

        .formulario
        {
            transition: 2s;
            width: 95%;
            margin-top: 10px;
        }
    }
</style>


<body>
<div id="particles-js">

</div>

<div class="container formulario">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4  ">
            <img src="images/mist%20logo.jpg" class="logoRegister center-block img-circle">
        </div>

    </div>
    <div class="espaciado">

    </div>
    <div class="row">
        <fieldset class="col-xs-10 col-xs-offset-1">


            <legend class="hidden-xs">
                <h3>Register</h3>
            </legend>

            <?php
           /* if (isset($_GET['error']))
            {

                echo '<legend class="hidden-xs">';
                echo '<h3 style="color:firebrick">' . $_GET['error'] . '</h3>';
                echo '</legend>';

            }

            if (isset($_GET['ok']))
            {

                echo '<legend class="hidden-xs">';

                echo '<p style="font-size: 18px;
                        font-weight: bold; text-align: center;
                        color: limegreen;
                        ">You are successfully Registered.</p>';
                echo '</legend>';
            }*/

            ?>

            <!--process register code starts-->

            <?php
            $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");


            if (isset($_POST['signup']))
            {
                $fnm      = htmlspecialchars($_POST['fnm']);
                $unm      = htmlspecialchars($_POST['unm']);
                $pwd      = htmlspecialchars($_POST['pwd']);
                $email    = htmlspecialchars($_POST['eml']);
                $department   = htmlspecialchars($_POST['department']);
                $batch    = htmlspecialchars($_POST['batch']);
                $roll    = htmlspecialchars($_POST['rollNo']);
                $regNo    = htmlspecialchars($_POST['regNo']);
                $usrImage = $_FILES['userImage']['name'];

                $message = "$fnm would like to request an account.";
                date_default_timezone_set('Asia/Dhaka');


                move_uploaded_file($_FILES['userImage']['tmp_name'], 'images/userImages/'
                    . $_FILES['userImage']['name']);


                //var_dump($_POST);

                $query = "INSERT INTO alumni.requests (username,fullname,email,password,image,message,date,department,batch_no,roll,registration_no) 
			    VALUES ('$unm','$fnm','$email','$pwd','$usrImage','$message',CURRENT_TIMESTAMP,'$department','$batch', '$roll','$regNo' )";

                if ($db->query($query))
                {
                    echo "<script>alert('Your account request is now pending for approval. An admin will examine your account. ' +
                    'If accepted, an email verification link will be sent to your email. Please wait for confirmation and check your email.' +
                     ' Thank you.')</script>";
                }
                else{
                    echo "<script>alert('Unknown error occured.')</script>";
                }
                $db->close();

            }
            ?>

            <!--process register code ends-->

            <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label style="color:limegreen;" class="messages">
                        <?php
                        if (isset($_GET['acceptedAccount']))
                        {
                            echo $_GET['acceptedAccount'];
                        }
                        ?>
                    </label>
                    <label class="col-xs-12" for="usuario"><h4>Username</h4></label>
                    <div class="col-xs-10 col-xs-offset-1">

                        <input type="text" name="unm" id="usuario" class="form-control Input" required>

                    </div>

                </div>

                <div class="form-group">
                    <label class="col-xs-12" for="usuario"><h4>Fullname</h4></label>
                    <div class="col-xs-10 col-xs-offset-1">

                        <input type="text" name="fnm" id="usuario" class="form-control Input" required>

                    </div>

                </div>

                <div class="form-group">
                    <label class="col-xs-12" for="usuario"><h4>Email</h4></label>
                    <div class="col-xs-10 col-xs-offset-1">

                        <input type="email" name="eml" id="usuario" class="form-control Input" required>

                    </div>

                </div>

                <div class="form-group">
                    <label class="col-xs-12" for="password"><h4>Password</h4></label>
                    <div class="col-xs-10 col-xs-offset-1">
                        <input type="password" name="pwd" id="password" class="form-control col-xs-12 Input" required
                               placeholder="********">
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-xs-12" for="password"><h4>Confirm Password</h4></label>
                    <div class="col-xs-10 col-xs-offset-1">
                        <input type="password" name="cpwd" id="password" class="form-control col-xs-12 Input" required
                               placeholder="********">
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-xs-12" for="roll"><h4>Your roll no: </h4></label>
                    <div class="col-xs-10 col-xs-offset-1">
                        <input type="text" name="rollNo" id="roll" class="form-control col-xs-12 Input" required
                               placeholder="ex.201514022">
                    </div>

                    <div class="form-group">
                        <label class="col-xs-12" for="roll"><h4>Your registration no: </h4></label>
                        <div class="col-xs-10 col-xs-offset-1">
                            <input type="text" name="regNo" id="roll" class="form-control col-xs-12 Input"
                                   placeholder="ex.131401150021">
                        </div>

                </div>

                    <div class="form-group ">
                        <label class="col-xs-12" for="roll"><h4>Your department: </h4></label>
                        <div class="col-xs-10 col-xs-offset-1">
                            <select class="form-control col-xs-12 Input" id="sel1" name="department">
                                <option class="myStyle">CSE</option>
                                <option class="myStyle">EECE</option>
                                <option class="myStyle">ME</option>
                                <option class="myStyle">AERO</option>
                                <option class="myStyle">CIVIL</option>
                                <option class="myStyle">EWCE</option>
                                <option class="myStyle">NSE</option>
                                <option class="myStyle">BME</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group ">
                        <label class="col-xs-12" for="roll"><h4>Your batch: </h4></label>
                        <div class="col-xs-10 col-xs-offset-1">
                            <select class="form-control col-xs-12 Input" id="sel1" name="batch">
                                <option class="myStyle">1</option>
                                <option class="myStyle">2</option>
                                <option class="myStyle">3</option>
                                <option class="myStyle">4</option>
                                <option class="myStyle">5</option>
                                <option class="myStyle">6</option>
                                <option class="myStyle">7</option>
                                <option class="myStyle">8</option>
                                <option class="myStyle">9</option>
                                <option class="myStyle">10</option>
                                <option class="myStyle">11</option>
                                <option class="myStyle">12</option>
                                <option class="myStyle">13</option>
                                <option class="myStyle">14</option>
                                <option class="myStyle">15</option>
                                <option class="myStyle">16</option>
                                <option class="myStyle">17</option>
                                <option class="myStyle">18</option>
                                <option class="myStyle">19</option>
                                <option class="myStyle">20</option>
                                <option class="myStyle">21</option>
                                <option class="myStyle">22</option>
                                <option class="myStyle">23</option>
                                <option class="myStyle">24</option>
                                <option class="myStyle">25</option>
                                <option class="myStyle">26</option>
                                <option class="myStyle">27</option>
                                <option class="myStyle">28</option>
                                <option class="myStyle">29</option>
                                <option class="myStyle">30</option>
                            </select>
                        </div>

                    </div>

                <div class="form-group">
                    <div class="col-xs-10 col-xs-offset-1">
                        <input type="file" name="userImage" class="filestyle" data-buttonName="btn-primary">
                    </div>

                </div>

                <div class="form-group">
                    <button name="signup" type="submit" class="btn btn-info center-block" style="color: #232d2e;">
                        Register
                    </button>

                </div>

                <div class="form-group">
                    <p style="color: white; text-align: center;">Already have an account? <a href="login.php"
                                                                                             target="_blank">Login</a>
                    </p>
                </div>

            </form>
        </fieldset>

    </div>
</div>


<script src="particle.js"></script>
<script src="js/bootstrap-filestyle.min.js"></script>


<script>
    particlesJS.load('particles-js', 'particles.json', function ()
    {
        console.log('particle js successfully loaded...');
    });


</script>

<?php
include 'footer.php';
?>
<!--code for preloader starts here-->

<script type="text/javascript" src="js/mordernizer.js"></script>



<!--code for preloader ends here-->

<script type="text/javascript" src="js/moveToTop.js"></script>
</body>
</html>

