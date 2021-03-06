<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/13/2018
 * Time: 5:09 PM
 */
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

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
        @font-face{
            font-family:LobsterTwo-Regular;
            src: url(fonts/LobsterTwo-Regular.ttf) format('truetype');
        }
        body
        {
            background-image: url(images/mist_dark_footer.jpg);
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

    </style>


</head>
<body>





<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <div class="row">

            <?php
            $connect = mysqli_connect("localhost", "root", "", "alumni");

            $animation=array("scrollAnimWholeContent1","scrollAnimWholeContent2","scrollAnimWholeContent3");
            if(isset($_POST["query"]))
            {
                $search = mysqli_real_escape_string($connect, $_POST["query"]);
                $query = "
                      SELECT * FROM alumni.users 
                      WHERE u_unm LIKE '%".$search."%' 
                      OR u_email LIKE '%".$search."%' 
                      ORDER BY u_id DESC
                      ";
            }
            else
            {
                $query = 'SELECT * FROM users ORDER BY users.u_id DESC ';
            }


            $result = mysqli_query($connect, $query);
            var_dump($result);
            while($row = mysqli_fetch_array($result))
            {
                shuffle($animation);
                if ($row['u_unm'] =='admin')
                {

                }
                else
                {
                    echo '
                <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4 '.$animation[0].' ">
                <div class="image-flip" ontouchstart="this.classList.toggle(\'hover\');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/userImages/'.$row['u_img'].'" alt="card image"></p>
                                    <h4 class="card-title">'.$row['u_fnm'].'</h4>
                                   <div>
                                      <span class="fa fa-phone" style=" vertical-align: middle;"></span>
                                      <span>'.$row['mobile_no'].'</span>
                                   </div>
                                   
                                   <div>
                                      <span class="fa fa-envelope" style=" vertical-align: middle;"></span>
                                      <span>'.$row['u_email'].'</span>
                                   </div>
                                   
                                    <div>
                                      <span class="fa fa-home" style=" vertical-align: middle;"></span>
                                      <span>'.$row['department'].'\''.$row['batch_no'].'</span>
                                   </div>
                                   
                                      <div>
                                      <a class="btn btn-warning" href="viewProfile.php?id='.$row['u_id'].'">Go to profile</a> 
                                   </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
                
                
                ';
                }

            }

            ?>



        </div>
    </div>
</section>
<!-- Team -->






<script>
    window.sr = ScrollReveal();

    sr.reveal('.scrollAnimWholeContent1', {
        duration: 2000,
        origin: 'left',
        distance: '300px',
        viewFactor: 0.2

    });

    sr.reveal('.scrollAnimWholeContent2', {
        duration: 2000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.2

    });


    sr.reveal('.scrollAnimWholeContent3', {
        duration: 2000,
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
</body>
</html>






