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

    <link rel="stylesheet" href="css/upcomingEventStyle.css">
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
              upcoming_event_time>CURRENT_DATE() ORDER BY alumni.upcoming_events.upcoming_event_time ';


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
                                    <i class="fa fa-search"></i> Read more </a>';
                    echo '  ';
                    if (isset($_SESSION['status']) || isset($_SESSION['access_token']))
                    {

                                   echo '<a href="eventDetails.php?event_id='.$row['upcoming_event_id'].'&event_duration='.$row['upcoming_event_duration'].
                            '&event_title='.$row['upcoming_event_title'].'&event_time='.$row['upcoming_event_time'].
                            '&event_image='.$row['upcoming_event_image'].
                            '&event_details='.$row['upcoming_event_description']. '&event_location='.$row['upcoming_event_location'].'
                        "  class="btn btn-danger"> Details</a>
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

<script type="text/javascript" src="js/moveToTop.js"></script>
<script type="text/javascript" src="sharer.js-master/sharer.min.js"></script>
</body>
</html>
