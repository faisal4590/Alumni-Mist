<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/27/2018
 * Time: 3:49 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/25/2018
 * Time: 12:01 AM
 */
include 'includes/functions.php';
?>

<?php

/*if(($_SESSION['status']!==true) || ($_SESSION['access_token']!=true)){
    header('location:login.php');
}*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending ticket request</title>

    <script type="application/x-javascript"> addEventListener("load", function ()
        {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar()
        {
            window.scrollTo(0, 1);
        } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
          type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css'/>
    <!-- //lined-icons -->
</head>

<body>
<?php
include 'includes/sidebarmenu.php';
?>

<main role="main" style="margin: 0 auto; width: 600px;;">

    <section class="jumbotron text-center">
        <div class="container">
            <?php

            $query = 'SELECT * FROM alumni.validate_ticket ORDER BY validate_ticket.reqstTicketDate DESC ';
            if(count(fetchAll($query))>0){
                foreach(fetchAll($query) as $row){

                    ?>

                    <img src="../../images/userImages/<?php echo $row['image'];?>" class="img-circle" alt="<?php echo $row['image'];?>" style="height: 60px;width: 60px;">
                    <h1 class="" style="font-size: 20px;"><?php echo $row['email'] ?></h1>
                    <p class="lead"><?php echo $row['message'] ?></p>
                    <p>
                        <a href="../acceptTicket.php?ticket_id=<?php echo $row['ticket_id'] ?>&user_id=<?php echo $row['user_id']?>&eventTitle=<?php echo $row['upcoming_event_title']?>&eventDuration=<?php echo $row['upcoming_event_duration']?>&eventTime=<?php echo $row['upcoming_event_time']?>&eventImage=<?php echo $row['upcoming_event_image']?>&eventLocation=<?php echo $row['upcoming_event_location']?>&fullname=<?php echo $row['fullname']?>&userImage=<?php  echo $row['image']?>&userEmail=<?php  echo $row['email']?>
                 " class="btn btn-success my-2">Accept</a>
                        <a href="../rejectTicket.php?ticket_id=<?php echo $row['ticket_id'] ?>" class="btn btn-danger my-2">Reject</a>
                    </p>
                    <p style="border-bottom: 2px dashed #f7d4a1;"><small><i><?php echo $row['reqstTicketDate'] ?></i></small> </p><br>
                    <?php
                }
            }else{
                echo "No Pending Requests.";
            }
            ?>

        </div>

    </section>

</main>


<script>
    var toggle = true;

    $(".sidebar-icon").click(function ()
    {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position": "absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function ()
            {
                $("#menu span").css({"position": "relative"});
            }, 400);
        }

        toggle = !toggle;
    });
</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- /Bootstrap Core JavaScript -->
<!-- morris JavaScript -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function ()
    {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function ()
        {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function ()
        {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function ()
        {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month)
        {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth: true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity: 0.85,
            data: [
                {
                    period: '2014 Q1',
                    iphone: 2668,
                    ipad: null,
                    itouch: 2649
                },
                {
                    period: '2014 Q2',
                    iphone: 15780,
                    ipad: 13799,
                    itouch: 12051
                },
                {
                    period: '2014 Q3',
                    iphone: 12920,
                    ipad: 10975,
                    itouch: 9910
                },
                {
                    period: '2014 Q4',
                    iphone: 8770,
                    ipad: 6600,
                    itouch: 6695
                },
                {
                    period: '2015 Q1',
                    iphone: 10820,
                    ipad: 10924,
                    itouch: 12300
                },
                {
                    period: '2015 Q2',
                    iphone: 9680,
                    ipad: 9010,
                    itouch: 7891
                },
                {
                    period: '2015 Q3',
                    iphone: 4830,
                    ipad: 3805,
                    itouch: 1598
                },
                {
                    period: '2015 Q4',
                    iphone: 15083,
                    ipad: 8977,
                    itouch: 5185
                },
                {
                    period: '2016 Q1',
                    iphone: 10697,
                    ipad: 4470,
                    itouch: 2038
                },
                {
                    period: '2016 Q2',
                    iphone: 8442,
                    ipad: 5723,
                    itouch: 1801
                }
            ],
            lineColors: ['#ff4a43',
                '#a2d200',
                '#22beef'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone',
                'ipad',
                'itouch'],
            labels: ['All Visitors',
                'Returning Visitors',
                'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
</script>



</body>


</html>


