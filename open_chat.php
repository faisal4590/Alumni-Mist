<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Shout here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/chatStyle.css">
    <link rel="stylesheet" href="css/Footer-with-map.css">

    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
<div class="se-pre-con"></div>

<?php
include 'navbarNew2.php';
?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-sm-12">

            <form name="chatForm" action="process_chat.php" enctype="multipart/form-data" method="post">
                <div class="panel panel-white border-top-green">
                    <div class="panel-body chat">
                        <div class="row chat-wrapper">


                            <div class="col-md-8" style="width: 100%;">

                                <div class="recipient-box">
                                    <select data-placeholder=" " class="form-control chzn-select chzn-done" multiple=""
                                            style="display: none;">
                                        <option value="k.mckoy@ztapps.com">Kevin Mckoy</option>
                                        <option value="y.robinson@ztapps.com" selected="">Yanique Robinson</option>
                                        <option value="gavino@ztapps.com">Gavino Free</option>
                                        <option value="ggeoff@ztapps.com">Geoff Ramsey</option>
                                        <option value="kkara@ztapps.com">Kara Kingsley</option>
                                        <option value="barbs@ztapps.com">Barbara Dundkleman</option>
                                    </select>
                                </div>

                                <div>

                                    <div class="slimScrollDiv"
                                         style="position: relative; overflow: hidden; width: auto; height: 452px;">
                                        <div class="message-list-wrapper"
                                             style="overflow: hidden; width: auto; height: 452px;">
                                            <ul class="message-list">

<?php
$db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");


$query = 'SELECT * FROM alumni.chat_history ORDER BY chat_id ASC ' ;


$res = $db->query($query) or die("Can't Connect to Query...");

if (isset($_SESSION['status']))
{
    if (isset($_SESSION['access_token']))
    {
        $usernamee = $_SESSION['fullName'];
    }
    else
    {
        $usernamee = $_SESSION['unm'];
    }
}
else
{

    $usernamee = 'anonymous';
}

date_default_timezone_set('Asia/Dhaka');



while ($row = $res->fetch_array(MYSQLI_ASSOC))
{
    $timee = $row['chat_time'];
    echo '  <li class="left">
                                                <span class="username">

                                                </span>
                                                    <small class="timestamp"><span style="color:#7479FF; font-style: normal; font-weight: bold;">
                                                '.$row['chat_username'].'    '.'</span>
                                            <i class="fa fa-clock-o"></i> <time class="timeago" datetime="'.date(DATE_ISO8601, strtotime($timee)).'"></time>
                                            </small>
                                                    <span class="avatar available tooltips" data-toggle="tooltip "
                                                          data-placement="right" data-original-title="Yanique Robinson">
                                                <img src="images/userImages/'.$row['chat_image'].'" class="img-circle" alt="avatar">
                                                </span>
                                                    <div class="body">
                                                        <div class="message well well-sm">
                                    '.$row['chat_body'].'
                                    </div>

                                                    </div>

                                                </li>

                                             ';
}
?>

                                            </ul>
                                        </div>
                                        <div class="slimScrollBar"
                                             style="width: 7px; position: absolute; top: 265px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 187.092px; background: rgb(0, 0, 0);"></div>
                                        <div class="slimScrollRail"
                                             style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
                                    </div>

                                    <div class="compose-box">
                                        <div class="row">
                                            <div class="col-xs-12 mg-btm-10">
                                            <textarea id="btn-input" class="form-control input-sm"
                                                      name="chatMessage"
                                                      placeholder="Type your message here..."></textarea>
                                            </div>

                                            <div class="col-lg-12">
                                                <button class="btn btn-green btn-sm pull-right">
                                                    <i class="fa fa-location-arrow"></i> Send
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </form>


        </div>

    </div>
</div>


<script type="text/javascript" src="js/moveToTop.js"></script>


<script src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript">
    $(function () {
        $(".chat-list-wrapper, .message-list-wrapper").niceScroll();
    })
</script>


<script src="js/timeago.jquery.js"></script>
<script src="js/customTimeago.js"></script>

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




</body>
</html>