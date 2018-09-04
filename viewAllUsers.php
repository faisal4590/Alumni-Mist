<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/13/2018
 * Time: 5:09 PM
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
    <title>User profiles</title>

    <link rel="stylesheet" href="css/viewAllUsers.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <style>
        @font-face
        {
            font-family: LobsterTwo-Regular;
            src: url(fonts/LobsterTwo-Regular.ttf) format('truetype');
        }

        body
        {
            background-image: url(images/mist_dark1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: LobsterTwo-Regular;
        }
    </style>

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

        #search_text
        {
            width: 13px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 3s ease-in-out;
            opacity: .4;
        }

        /* When the input field gets focus, change its width to 100% */
        #search_text:focus
        {
            width: 100%;
            opacity: 1;
            transition: 3s;
            box-shadow: 0px 0px 20px #79ff95, 0px 0px 50px rgba(256, 256, 256, 1);
        }
    </style>

</head>
<body>


<div class="se-pre-con"></div>

<?php
include 'navbarNew2.php';
?>


<div class="container" style="margin-top: 100px;">
    <br/>
    <div class="form-group">
        <div class="input-group wholeSearchContainer">
            <span class="input-group-addon glyphicon glyphicon-search"></span>
            <input type="text" name="search_text" id="search_text"
                   placeholder="Search by username or email" class="form-control"/>
        </div>
    </div>
    <br/>
    <div id="result"></div>
</div>

<?php
include 'footer.php';
?>


<!--code for preloader starts here-->

<script type="text/javascript" src="js/mordernizer.js"></script>
<script>
    $(window).on('load', function () {
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


<!--js code for search all user starts here-->
<script>
    $(document).ready(function () {
        load_data();

        function load_data(query)
        {
            $.ajax({
                url: "searchAllUser.php",
                method: "POST",
                data: {query: query},
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function () {
            var search = $(this).val();
            if (search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
    });
</script>
<!--js code for search all user ends here-->
<script type="text/javascript" src="js/moveToTop.js"></script>
</body>
</html>