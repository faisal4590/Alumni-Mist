<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/30/2018
 * Time: 12:50 PM
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
    <title>Upcoming events</title>
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- load and instantiate ScrollReveal first -->
    <script src="js/scrollreveal.min.js"></script>
    <script>
        window.sr = ScrollReveal();

        // Add class to <html> if ScrollReveal is supported
        // Note: this method is deprecated, and only works in version 3
        if (sr.isSupported())
        {
            document.documentElement.classList.add('sr');
        }

    </script>
</head>
<style>
    @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
    @font-face
    {
        font-family: LobsterTwo-Regular;
        src: url(fonts/LobsterTwo-Regular.ttf) format('truetype');
    }

    body
    {
        background-image: url(images/nature.gif);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .navbar{
        font-family:LobsterTwo-Regular;
        color:white;
        font-size:17px;
    }

    .event-list
    {
        list-style: none;
        font-family: 'Lato', sans-serif;
        margin: 0px;
        padding: 0px;
    }

    .event-list > li
    {
        background-color: rgb(255, 255, 255);
        box-shadow: 0px 0px 5px rgb(51, 51, 51);
        box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
        padding: 0px;
        margin: 0px 0px 20px;

    }

    .event-list > li > time
    {
        display: inline-block;
        width: 100%;
        color: rgb(255, 255, 255);
        background-color: rgb(197, 44, 102);
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
    }

    .event-list > li:nth-child(even) > time
    {
        background-color: rgb(165, 82, 167);
    }

    .event-list > li > time > span
    {
        display: none;
    }

    .event-list > li > time > .day
    {
        display: block;
        font-size: 30pt;
        font-weight: 900;
        line-height: 1;
    }

    .event-list > li time > .month
    {
        display: block;
        font-size: 24pt;
        font-weight: 900;
        line-height: 1;
    }

    .event-list > li > img
    {
        width: 100%;
    }

    .event-list > li > .info
    {
        padding-top: 5px;
        text-align: center;
    }

    .event-list > li > .info > .title
    {
        font-size: 17pt;
        font-weight: 700;
        margin: 0px;
    }

    .event-list > li > .info > .desc
    {
        font-size: 13pt;
        font-weight: 300;
        margin: 0px;
    }

    .event-list > li > .info > ul,
    .event-list > li > .social > ul
    {
        display: table;
        list-style: none;
        margin: 10px 0px 0px;
        padding: 0px;
        width: 100%;
        text-align: center;
    }

    .event-list > li > .social > ul
    {
        margin: 0px;
    }

    .event-list > li > .info > ul > li,
    .event-list > li > .social > ul > li
    {
        display: table-cell;
        cursor: pointer;
        color: rgb(30, 30, 30);
        font-size: 11pt;
        font-weight: 300;
        padding: 3px 0px;
    }

    .event-list > li > .info > ul > li > a
    {
        display: block;
        width: 100%;
        color: rgb(30, 30, 30);
        text-decoration: none;
    }

    .event-list > li > .social > ul > li
    {
        padding: 0px;
    }

    .event-list > li > .social > ul > li > a
    {
        padding: 3px 0px;
    }

    .event-list > li > .info > ul > li:hover,
    .event-list > li > .social > ul > li:hover
    {
        color: rgb(30, 30, 30);
        background-color: rgb(200, 200, 200);
    }

    .facebook a,
    .twitter a,
    .google-plus a
    {
        display: block;
        width: 100%;
        color: rgb(75, 110, 168) !important;
    }

    .twitter a
    {
        color: rgb(79, 213, 248) !important;
    }

    .google-plus a
    {
        color: rgb(221, 75, 57) !important;
    }

    .facebook:hover a
    {
        color: rgb(255, 255, 255) !important;
        background-color: rgb(75, 110, 168) !important;
    }

    .twitter:hover a
    {
        color: rgb(255, 255, 255) !important;
        background-color: rgb(79, 213, 248) !important;
    }

    .google-plus:hover a
    {
        color: rgb(255, 255, 255) !important;
        background-color: rgb(221, 75, 57) !important;
    }

    @media (min-width: 768px)
    {
        .event-list > li
        {
            position: relative;
            display: block;
            width: 100%;
            height: 120px;
            padding: 0px;
        }

        .event-list > li > time,
        .event-list > li > img
        {
            display: inline-block;
        }

        .event-list > li > time,
        .event-list > li > img
        {
            width: 120px;
            float: left;
        }

        .event-list > li > .info
        {
            background-color: rgb(245, 245, 245);
            overflow: hidden;
        }

        .event-list > li > time,
        .event-list > li > img
        {
            width: 120px;
            height: 120px;
            padding: 0px;
            margin: 0px;
        }

        .event-list > li > .info
        {
            position: relative;
            height: 120px;
            text-align: left;
            padding-right: 40px;
        }

        .event-list > li > .info > .title,
        .event-list > li > .info > .desc
        {
            padding: 0px 10px;
        }

        .event-list > li > .info > ul
        {
            position: absolute;
            left: 0px;
            bottom: 0px;
        }

        .event-list > li > .social
        {
            position: absolute;
            top: 0px;
            right: 0px;
            display: block;
            width: 40px;
        }

        .event-list > li > .social > ul
        {
            border-left: 1px solid rgb(230, 230, 230);
        }

        .event-list > li > .social > ul > li
        {
            display: block;
            padding: 0px;
        }

        .event-list > li > .social > ul > li > a
        {
            display: block;
            width: 40px;
            padding: 10px 0px 9px;
        }
    }
</style>
<body>

<div class="se-pre-con"></div>

<?php
include 'navbarNew2.php';
?>
<div class="container">
    <div class="row"  style="margin-top: 150px">
        <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
            <ul class="event-list">

                <?php
                $db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");
                $animation=array("scrollAnimWholeContent1","scrollAnimWholeContent2","scrollAnimWholeContent3");

                $query = 'SELECT * FROM alumni.upcoming_events WHERE 
              upcoming_event_time>CURRENT_DATE() ORDER BY upcoming_event_id DESC ';


                $res = $db->query($query) or die("Can't Connect to Query...");
                while ($row = $res->fetch_array(MYSQLI_ASSOC))
                {
                    shuffle($animation);

                    $time  = strtotime($row['upcoming_event_time']);
                    $day   = date('d', $time);
                    $month = date('M', $time);//getting the month name
                    $year  = date('Y', $time);
                    $hour  = date('H:i', $time);
                    $img   = $row['upcoming_event_image'];
                    echo ' <li class="'.$animation[0].'">
                    <time>
                        <span class="day" style="font-family:LobsterTwo-Regular;">' . $day . '</span>
                        <span class="month"  style="font-family:LobsterTwo-Regular;">' . $month . ',</span>
                        <span class="month"  style="font-family:LobsterTwo-Regular;">' . $year . '</span>
                        <span class="time"  style="font-family:LobsterTwo-Regular;">' . $hour . '</span>
                        </time>

                        <img alt="event" src="images/upcomingEventImages/' . $img . ' "/>

                        <div class="info">
                        <h2 class="title">' . $row['upcoming_event_title'] . '</h2>
                        <p class="desc">' . $hour . '</p>
                        <div class="btn-ground text-right" style="margin-top: 25px;">

                                    <a type="button" id="requestTicketID"
                                    onclick="setEventId(
                                    \'' . $row['upcoming_event_title'] . '\',
                                    \'' . $row['upcoming_event_location'] . '\',
                                    \'' . $row['upcoming_event_time'] . '\',
                                    \'' . $row['upcoming_event_duration'] . '\',
                                    \'' . $row['upcoming_event_description'] . '\',
                                    \'' . $row['upcoming_event_image'] . '\',
                                    \'' . $row['upcoming_event_id'] . '\')"
                                    class="btn btn-primary" data-toggle="modal"
                                    data-target="#product_view" href="javascript:void(0)">
                                    <i class="fa fa-search"></i> Read more</a>
                        </div>
                    </div>



                         <div class="social">
                        <ul>
                            <li class="facebook sharer" data-sharer="facebook"
                            data-url="http://facebook.com/" style="width:33%;"><a href="#facebook"><span
                                            class="fa fa-facebook"></span></a></li>
                            <li class="twitter sharer" data-sharer="twitter"
                            data-url="http://twitter.com/" style="width:34%;"><a href="#twitter"><span
                                            class="fa fa-twitter"></span></a></li>
                            <li class="google-plus sharer" data-sharer="googleplus"
                            data-url="http://google.com" style="width:33%;"><a href="#google-plus"><span
                                            class="fa fa-google-plus"></span></a></li>
                        </ul>
                    </div>
                    </li>';

                }


                ?>


            </ul>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>


<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span
                            class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><span id="event_title"></span></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img  id="myImage"
                             class="img-responsive">
                    </div>
                    <!--<div class="col-md-6 product_content">
                        <h4>Product Id: <span>51526</span></h4>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div>-->
                        <p id="event_description"></p>
                        <!--<h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00
                            <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small>
                        </h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">Color</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                    <option value="gold">Gold</option>
                                    <option value="rose gold">Rose Gold</option>
                                </select>
                            </div>
                            <!-- end col -->


                            <!--<div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="">Capacity</option>
                                    <option value="">16GB</option>
                                    <option value="">32GB</option>
                                    <option value="">64GB</option>
                                    <option value="">128GB</option>
                                </select>
                            </div>-->
                            <!-- end col -->
                           <!-- <div class="col-md-4 col-sm-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">QTY</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>-->
                            <!-- end col -->
                        </div>
                        <div class="space-ten"></div>

                <?php
                if(isset($_SESSION['access_token'])){
                    echo '

                    <div class="btn-ground">
                            <button type="button" class="btn btn-primary"><span
                                        class="glyphicon glyphicon-heart"></span> Request ticket
                            </button>
                        </div>

                    ';
                }
                else if (isset($_SESSION['status']))
                {
                    echo '

                    <div class="btn-ground">
                            <button type="button" onclick="ticketGenerate()" class="btn btn-primary"><span
                                        class="glyphicon glyphicon-heart"></span> Request ticket
                            </button>
                            <p id="demo"></p>
                        </div>

                    ';
                }

                ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function setEventId(event_title,event_location,event_time,event_duration,event_description,event_image, event_id)
    {

        document.querySelector("#event_title").innerHTML = event_title;
        document.querySelector("#event_description").innerHTML = event_description;
        document.getElementById("myImage").src = "images/upcomingEventImages/"+event_image;



    }
</script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--code for preloader starts here-->

<script type="text/javascript" src="js/mordernizer.js"></script>
<script>
    $(window).on('load', function() {
// Animate loader off screen
        $('.se-pre-con').fadeOut('slow');
    });
</script>


<!--code for preloader ends here-->

<script>
    window.sr = ScrollReveal();

    sr.reveal('.scrollAnimWholeContent1', {
        duration: 4000,
        origin: 'left',
        distance: '300px',
        viewFactor: 0.2

    });

    sr.reveal('.scrollAnimWholeContent2', {
        duration: 4000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.2

    });


    sr.reveal('.scrollAnimWholeContent3', {
        duration: 4000,
        origin: 'right',
        distance: '300px',
        viewFactor: 0.2

    });


    sr.reveal('.scrollAnimFooterMap', {
        duration: 5000,
        origin: 'bottom',
        distance: '300px'

    });


</script>

<script>
    function ticketGenerate()
    {
        document.getElementById("demo").innerHTML="Your request is being sent to admin.";
    }
</script>
<script type="text/javascript" src="js/moveToTop.js"></script>
<script type="text/javascript" src="sharer.js-master/sharer.min.js"></script>
</body>
</html>
