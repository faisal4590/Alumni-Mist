<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/timelineStyle.css">
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <link rel="stylesheet" href="css/preloader.css">

    <title>Timeline</title>

    <style>
        .navbar{
            font-family:LobsterTwo-Regular;
            font-size:18px;
        }
        .mine input:hover, textarea:hover{
            border: 2px solid #2BBBAD;
            transition: 1s;

        }
    </style>

</head>
<body>

<div id="fb-root"></div>
<script>(function (d, s, id)
    {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
        {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=183714959096315&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="se-pre-con"></div>

<?php
include 'navbarNew2.php';
?>

<!--region for typed js starts-->
<span class="h3 text-center" style="font-family: LobsterTwo-Italic;font-size: 30px; margin-top: 70px;">Hello
    <?php
    if (isset($_SESSION['access_token']))
    {
        echo $_SESSION['fullName'] . ',';
    }
    else if (isset($_SESSION['status']))
    {
        echo $_SESSION['unm'] . ',';
    }
    else
    {
        echo 'anonymous, ';
    }
    ?>
    <span class="h3 text-center type" style="font-family: LobsterTwo-Regular;font-size: 30px; "></span>
</span>
<!--region for typed js ends-->


<div class="container" style="background: white; padding: 5px;">
    <div class="row">
        <div class="col-lg-12 col-md-6">

            <form method="post" action="processTimeline.php" enctype="multipart/form-data">

                <div class="form-group mine">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="postTitle" placeholder="title of your post"
                               required style="margin-bottom: 7px;">
                        <textarea class="form-control" style="height: 100px;" name="userPost"
                                  placeholder="what's on your mind?"></textarea>
                        <input type="file" name="timelineImage" class="filestyle uploadImageButton">
                        <button type="submit" class="btn btn-info pull-right postSubmitButton"
                                style="color: white; margin-top: 10px; background: #4267B2; width:70px;">Post
                        </button>

                    </div>

                </div>

            </form>

        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div>

            <?php
            $db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");


            $query = 'SELECT * FROM alumni.timeline_post ORDER BY post_id DESC ';


            $res = $db->query($query) or die("Can't Connect to Query...");


            date_default_timezone_set('Asia/Dhaka');

            while ($row = $res->fetch_array(MYSQLI_ASSOC))
            {
                $date  = $row['post_time'];
                $year  = date('Y', strtotime($date));
                $day   = date('d', strtotime($date));
                $month = date('M', strtotime($date));
                echo '
                
                <div class="blog" style="border-bottom: 3px solid orange;">
                <div class="blog-left">
                    <div class="blog-left-grid">
                        <div class="blog-left-grid-left">
                            <img src="images/userImages/' . $row['user_image'] . '"
                                 class=" img-circle img-responsive img-thumbnail"
                                 style="height: 100px;width:100px;">
                            <h3>' . $row['post_title'] . '</h3>
                            <p>by <span style="color:#dd27ff">' . $row['post_username'] . '</span> | ' . $month . ' ' . $day . ' ,' . $year . ' </p>
                        </div>

                        <div class="clearfix"></div>
                        <img src="images/timelineImages/' . $row['post_image'] . '"
                             alt=" " class="img-responsive img-rounded"
                             style="max-height: 400px;-webkit-filter: drop-shadow(10px 10px 10px #222);
                              filter: drop-shadow(10px 10px 10px #222); "/>
                        
                               <p class="para" style="text-align: justify"> 
                               ' . $row['post_details'] . '
                               </p>
                               
                         
                                <!-- <div class="fb-comments" data-href="http://localhost/alumni/timeline.php" data-numposts="5"></div> -->
                        
                           
                       
                    </div>

                </div>

                <div class="clearfix"></div>
            </div>
                
                
                ';
            }

            ?>


        </div>
    </div>
</div>


<!-- //blog -->

<?php
include 'footer.php';
?>


<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
<script src="js/typed.js"></script>

<script type="text/javascript">

    var typed = new Typed(".type", {
        strings: [
            "Hello",
            "Post here whatever you want",
            "Let everyone see what are you feeling"
        ],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
    });
</script>


<!--code for preloader starts here-->

<script type="text/javascript" src="js/mordernizer.js"></script>
<script>
    $(window).on('load', function ()
    {
// Animate loader off screen
        $('.se-pre-con').fadeOut('slow');
    });
</script>


<!--code for preloader ends here-->
<script type="text/javascript" src="js/moveToTop.js"></script>
</body>
</html>

