<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/20/2018
 * Time: 11:21 AM
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
    <title>Alumni List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <link rel="stylesheet" href="css/alumniListStyle.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/lightbox.css">



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
        
        .navbar{
            font-family:LobsterTwo-Regular;
            font-size:22px;
        }

        .buttonGroupMine{
            margin-top:140px;
        }
        
    </style>

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
<body>
<div class="se-pre-con"></div>

<?php
include 'navbarNew2.php';
?>

<div class="container">
    <div class="row">
        <div align="center" class="buttonGroupMine">
            <button class="btn btn-default filter-button" data-filter="all"><span>All</span></button>
            <?php
            $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");
            $query = 'SELECT * FROM alumni.alumnicoverlist';

            $res = $db->query($query) or die('wrong query');

            $animation=array("scrollAnimWholeContent1","scrollAnimWholeContent2","scrollAnimWholeContent3");
            $departmentButton=array("btn-default","btn-deep-purple","btn-deep-orange","btn-cyan","btn-light-green");

            while ($row = $res->fetch_array(MYSQLI_ASSOC))
            {
                shuffle($departmentButton);
                if ($row['alumni_cover_dept'] == "CSE")
                {
                    echo ' <button class="btn '.$departmentButton[0].' filter-button" data-filter="cse"><span>'.$row['alumni_cover_dept'].'</span></button>';
                }
                else if ($row['alumni_cover_dept'] == "EECE")
                {
                    echo ' <button class="btn '.$departmentButton[0].' filter-button" data-filter="eece"><span>'.$row['alumni_cover_dept'].'</span></button>';

                }
                else if ($row['alumni_cover_dept'] == "ME")
                {
                    echo ' <button class="btn '.$departmentButton[0].' filter-button" data-filter="me"><span>'.$row['alumni_cover_dept'].'</span></button>';

                }
                else if ($row['alumni_cover_dept'] == "CIVIL")
                {
                    echo ' <button class="btn '.$departmentButton[0].' filter-button" data-filter="civil"><span>'.$row['alumni_cover_dept'].'</span></button>';
                    break;
                }
            }


            ?>
            
        </div>
        <br/>



            
            <?php
            $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");
            $query = 'SELECT * FROM alumni.alumnicoverlist ORDER BY batch_no ASC ';

            $res = $db->query($query) or die('wrong query');

            $animation=array("scrollAnimWholeContent1","scrollAnimWholeContent2","scrollAnimWholeContent3");
            $departmentButton=array("btn-default","btn-deep-purple","btn-deep-orange","btn-cyan","btn-light-green");


            while ($row = $res->fetch_array(MYSQLI_ASSOC))
            {
                shuffle($departmentButton);
                shuffle($animation);
                if ($row['alumni_cover_dept'] == "CSE")
                {

                    echo '
                    <div class="gallery_product col-lg-4 '.$animation[0] .' col-md-4 col-sm-4 col-xs-6 filter all cse wholeImageContainer thumbnail text-center">
                     
                     <a href="images/alumniCover/CSE/'.$row['alumni_cover_img'].'" data-lightbox="image-1" 
                     data-title="'.$row['alumni_cover_dept'].'\''.$row['batch_no'].'"> 
                            <img src="images/alumniCover/CSE/'.$row['alumni_cover_img'].'" alt="" class="img-responsive myImageStyle"
                            style="height:300px;">
                     </a>
                   
                    <div class="caption">
                        <a href="showAllAlumni.php?department='.$row['alumni_cover_dept'].'&batchno='.$row['batch_no'].'">
                        <button class="btn '.$departmentButton[0].'  waves-effect myStyle"><span>'.$row['alumni_cover_dept'].'\''.$row['batch_no'].'  
                        </span></button>
                        </a>
                    </div>
                    </div>
                    
                    ';
                }
                else if ($row['alumni_cover_dept'] == "EECE")
                {
                    echo '
                    <div class="gallery_product col-lg-4 '.$animation[0] .'  col-md-4 col-sm-4 col-xs-6 filter wholeImageContainer all eece thumbnail text-center">
                    <a href="images/alumniCover/EECE/'.$row['alumni_cover_img'].'" data-lightbox="image-1" 
                     data-title="'.$row['alumni_cover_dept'].'\''.$row['batch_no'].'"> 
                            <img src="images/alumniCover/EECE/'.$row['alumni_cover_img'].'" alt="" class="img-responsive myImageStyle"
                            style="height:300px;">
                     </a>
                    <div class="caption">
                        <a href="showAllAlumni.php?department='.$row['alumni_cover_dept'].'&batchno='.$row['batch_no'].'">
                        <button class="btn '.$departmentButton[0].'  waves-effect myStyle"><span>'.$row['alumni_cover_dept'].'\''.$row['batch_no'].' </span>
                        </button>
                         </a>
                    </div>
                    </div>
                    
                    ';
                }
                else if ($row['alumni_cover_dept'] == "CIVIL")
                {
                    echo '
                    <div class="gallery_product col-lg-4  '.$animation[0] .' col-md-4 col-sm-4 col-xs-6 wholeImageContainer filter all civil thumbnail text-center">
                   
                    <a href="images/alumniCover/CIVIL/'.$row['alumni_cover_img'].'" data-lightbox="image-1" 
                     data-title="'.$row['alumni_cover_dept'].'\''.$row['batch_no'].'"> 
                            <img src="images/alumniCover/CIVIL/'.$row['alumni_cover_img'].'" alt="" class="img-responsive myImageStyle"
                            style="height:300px;">
                     </a>
                    <div class="caption">
                    <a href="showAllAlumni.php?department='.$row['alumni_cover_dept'].'&batchno='.$row['batch_no'].'">
                        <button class="btn '.$departmentButton[0].'  waves-effect myStyle"><span>'.$row['alumni_cover_dept'].'\''.$row['batch_no'].' </span></button>
                        
</a>
                    </div>
                    </div>
                    
                    ';
                }
                else if ($row['alumni_cover_dept'] == "ME")
                {
                    echo '
                    <div class="gallery_product col-lg-4 '.$animation[0] .'  col-md-4 col-sm-4 col-xs-6 wholeImageContainer filter all me thumbnail text-center">
                    
                    <a href="images/alumniCover/ME/'.$row['alumni_cover_img'].'" data-lightbox="image-1" 
                     data-title="'.$row['alumni_cover_dept'].'\''.$row['batch_no'].'"> 
                            <img src="images/alumniCover/ME/'.$row['alumni_cover_img'].'" alt="" class="img-responsive myImageStyle"
                            style="height:300px;">
                     </a>
                     
                    <div class="caption">
                    <a href="showAllAlumni.php?department='.$row['alumni_cover_dept'].'&batchno='.$row['batch_no'].'">
                                            <button class="btn '.$departmentButton[0].'  waves-effect myStyle"><span>'.$row['alumni_cover_dept'].'\''.$row['batch_no'].' </span></button>

</a>
                    </div>
                    </div>
                    
                    ';
                }
            }
            ?>
        </div>
    </div>
</div>
</section>



<?php
include "footer.php";
?>


<script src="js/alumniList.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/lightbox.js"></script>
<script type="text/javascript" src="js/moveToTop.js"></script>




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
    $(window).on('load', function() {
        // Animate loader off screen
        $('.se-pre-con').fadeOut('slow');
    });
</script>

</body>
</html>
