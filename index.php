<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/9/2018
 * Time: 12:50 PM
 */
require 'connection/connection.php';
?>

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
    <title>Alumni | Home</title>
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

    <style>
        @font-face
        {
            font-family: LobsterTwo-Regular;
            src: url(fonts/LobsterTwo-Regular.ttf) format('truetype');
        }

        /* Ensure elements load hidden before ScrollReveal runs */
        .sr .scrollAnimHidden1 .scrollAnimHidden2 .scrollAnimHidden3
        {
            visibility: hidden;
        }

        /* add perspective to your container */
        .scrollAnimWholeMenu
        {
            perspective: 800px;
        }


    </style>



</head>
<body>
<div class="se-pre-con"></div>

<?php
include 'navbarNew2.php';

?>
<div class="blurred-container">
    <video class="video-fluid" autoplay muted loop style="width: 100%;">
        <source src="images/alumniVideo.MP4" type="video/mp4"/>
    </video>
</div>

<!--code for thumbnails start here-->


<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4" style="border:1px solid #EAFFCA;
            box-shadow: 0px 0px 30px green , 0px 0px 30px rgba(256, 256, 256, 1);
            ">

                <div class="caption ">
                    <h3 style="font-family: LobsterTwo-Regular;">Commandant</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid officia facere, tenetur
                        similique, sapiente optio magni, expedita laborum mollitia saepe perspiciatis! Sint qui hic
                        repudiandae, nobis quod ipsum deserunt sed.</p>

                </div>
                <div class="thumbnail scrollAnimWholeContent1"><img src="images/commandant.jpg"
                                                                    alt="Thumbnail Image 1" style="height: 250px; "><br>

                </div>
            </div>
            <div class="col-md-4" style="border:1px solid #EAFFCA;
            box-shadow: 0px 0px 30px green , 0px 0px 30px rgba(256, 256, 256, 1);">

                <div class="caption ">
                    <h3 style="font-family: LobsterTwo-Regular;">Alumni President</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid officia facere, tenetur
                        similique, sapiente optio magni, expedita laborum mollitia saepe perspiciatis! Sint qui hic
                        repudiandae, nobis quod ipsum deserunt sed.</p>

                </div>
                <div class="thumbnail scrollAnimWholeContent1"><img src="images/anis.jpg"
                                                                    alt="Thumbnail Image 1" style="height: 250px; "><br>

                </div>
            </div>
            <div class="col-md-4" style="border:1px solid #EAFFCA;
            box-shadow: 0px 0px 30px green , 0px 0px 30px rgba(256, 256, 256, 1);">

                <div class="caption ">
                    <h3 style="font-family: LobsterTwo-Regular;">Chief Representative</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid officia facere, tenetur
                        similique, sapiente optio magni, expedita laborum mollitia saepe perspiciatis! Sint qui hic
                        repudiandae, nobis quod ipsum deserunt sed.</p>

                </div>
                <div class="thumbnail scrollAnimWholeContent1"><img src="images/rubiyat.jpg"
                                                                    alt="Thumbnail Image 1" style="height: 250px; "><br>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>


<script>
    window.sr = ScrollReveal();
    sr.reveal('.scrollAnimLogo', {
        duration: 11000,
        origin: 'left'
    });

    sr.reveal('.scrollAnimWholeMenu', {
        duration: 4000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.2

    });

    sr.reveal('.scrollAnimWholeContent1', {
        duration: 4000,
        origin: 'left',
        distance: '300px',
        viewFactor: 0.2

    });

    sr.reveal('.scrollAnimHidden1', {
        duration: 8000,
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

    sr.reveal('.scrollAnimHidden2', {
        duration: 8000,
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

    sr.reveal('.scrollAnimHidden3', {
        duration: 8000,
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
    $(function () {
        // Smooth Scrolling
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname)
            {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length)
                {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

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

<script type="text/javascript" src="js/moveToTop.js"></script>



</body>
</html>
