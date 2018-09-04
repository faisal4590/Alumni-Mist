<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/26/2018
 * Time: 3:41 PM
 */
?>
<?php
require_once "googleLoginConfig.php";

/*if (isset($_SESSION['access_token'])) {
    header('Location: index.php');
    exit();
}*/

$loginURL = $gClient->createAuthUrl();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="fonts/OleoScript-Regular.ttf" rel="stylesheet"/>
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/mdb.min.css">

</head>
<body>

<?php
include 'navbarNew2.php';
?>


<style>
    @font-face
    {
        font-family: Fuentechida;
        src: url(fonts/OleoScript-Regular.ttf);
    }
    @font-face
    {
        font-family: LobsterTwo-Regular;
        src: url(fonts/LobsterTwo-Regular.ttf) format('truetype');
    }




    body
    {
        background-image: url(images/new_carousel_2.jpg);
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

    .logoLogin
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

        color: #ffe16c;
        text-align: center;
        font-family: fuentechida;
        font-size: 22px;
    }

    .Input
    {
        transition: .8s;
        background-color: rgba(0, 0, 0, .5);
        color: #ffe16c;
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
<div class="se-pre-con"></div>
<div id="particles-js" ></div>

<div class="container formulario">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4  ">
            <img src="images/mist%20logo.jpg" class="logoLogin center-block img-circle" >
        </div>

    </div>
    <div class="espaciado">

    </div>
    <div class="row">
        <fieldset class="col-xs-10 col-xs-offset-1">

            <legend class="hidden-xs">
                <h3>Login</h3>
            </legend>

            <?php
            if (isset($_GET['error']))
            {

                echo '<legend class="hidden-xs">';
                echo '<h3 style="color:firebrick">' . $_GET['error'] . '</h3>';
                echo '</legend>';

            }

            ?>

            <form role="form" class="form-horizontal" action="process_login.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <div class="col-xs-10 col-xs-offset-1">
                        <div class="md-form">
                            <input type="email" name="eml" id="usuario" class="form-control Input">
                            <label for="email" class="">Your email</label>
                        </div>

                    </div>

                </div>
                <div class="form-group">

                    <div class="col-xs-10 col-xs-offset-1">
                        <div class="md-form">
                            <input type="password" name="pwd" id="password" class="form-control col-xs-12 Input">
                            <label for="password" class="">Your password</label>
                        </div>

                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control" style="color:#ffe16c;">Login</button>
                    <!--<input type="button" onclick="window.location = '<?php /*echo $loginURL; */?>';"
                          style="width:160px;" class="btn btn-danger pull-right" value="Login with google">-->


                </div>

                <div class="form-group">
                    <p style="text-align: center;
                    color: #ffe16c;">Don't have an account? <a href="registerNew.php" style="color: #69ff72;" target="_blank" >Register</a> </p>
                </div>

                <div class="form-group">
                    <p style="color: #ffe16c; text-align: center;"><a style="color: #69ff72;" href="forgetPasswordEmailBox.php" target="_blank" >Forgot password? </a> </p>
                </div>

            </form>
        </fieldset>

    </div>
</div>


<script src="particle.js"></script>

<script>
    particlesJS.load('particles-js', 'particles.json', function () {
        console.log('particle js successfully loaded...');
    });


</script>

<?php
include 'footer.php';
?>
<!--code for preloader starts here-->

<script type="text/javascript" src="js/mordernizer.js"></script>

<script>
    $(window).on('load', function() {
// Animate loader off screen
        $('.se-pre-con').fadeOut('slow');
    });
</script>


<!--code for preloader ends here-->

<script src="js/mdb.min.js"></script>
<script src="js/popper.min.js"></script>
<script type="text/javascript" src="js/moveToTop.js"></script>

</body>
</html>