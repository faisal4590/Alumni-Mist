<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/28/2018
 * Time: 5:16 PM
 */
session_start();
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/aboutUsStyle.css">
    <style>
        @font-face
        {
            font-family: LobsterTwo-Regular;
            src: url(fonts/LobsterTwo-Regular.ttf) format('truetype');
        }

        body{
            font-family:LobsterTwo-Regular;
        }
    </style>
</head>
<body>
<?php
include 'navbarNew2.php';
?>
<div style="margin-bottom: 40px;"></div>
<article>
    <figure>
        <img src='images/mine.jpg' alt />
    </figure>
    <section>
        <div>
            <h1>Faisal Ibn Aziz</h1>
            <p>Team leader</p>
            <p>201514022</p>
        </div>
    </section>

    <figure>
        <img src='images/faisal2.jpg' class="img-responsive" alt />
    </figure>
    <section>
        <div>
            <h2>Mahmuda Rawnak Jahan<br/>
                &ldquo;Nitu&rdquo;</h2>
            <p>201514058</p>
        </div>
    </section>

    <figure>
        <img src='images/nitu3.jpeg' class="img-responsive" alt />
    </figure>
    <section>
        <div>
            <h2>Abid Ali</h2>
            <p>201514037</p>
        </div>
    </section>

    <figure>
        <img src='images/abid.jpg' class="img-responsive" style="height:100px;" alt />
    </figure>
    <section>
        <div>
            <h2>Major Moin Bayezid</h2>
            <p>201514005</p>
        </div>
    </section>

    <figure>
        <img src='images/moin.jpg' class="img-responsive" alt />
    </figure>

    <section>
        <div>
            <h2>Contact with us<br/>
                <a href='https://escss.blogspot.com/2017/08/scroll-half-by-half-pure-css.html'>Team codehacks</a></h2>
            <p>01521201537</p>
        </div>
    </section>

</article>


<div>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/74452/bcr-white.png'>
</div>
</div>
</body>
</html>
