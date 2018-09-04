<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/26/2018
 * Time: 3:51 PM
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
    <title>Alumni | Home</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        @font-face{
            font-family:LobsterTwo-Regular;
            src: url(fonts/LobsterTwo-Regular.ttf) format('truetype');
        }
        @font-face{
            font-family:OpenSans-Regular;
            src: url(fonts/OpenSans-Regular.ttf) format('truetype');
        }
        @font-face{
            font-family:LobsterTwo-Italic;
            src: url(fonts/LobsterTwo-Italic.ttf) format('truetype');
        }

        .nav_my_style{
            font-family: LobsterTwo-Regular;
            font-size: 18px;
        }

        .navbar{
            background: #2BBBAD;
        }
        .my_nav .navbar-nav >li>a {
            color: #ecf0f1;
        }
        .my_nav .navbar-nav >li>a:hover {
            border-bottom: 3px solid #E90052;
        }
    </style>
</head>
<body>

<!--code for navigation bar starts here-->

<nav class="navbar navbar-default my_nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Alumni</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>


                <?php
                $db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

                $query = 'SELECT * FROM alumni.requests' ;

                $res = $db->query($query) or die("Can't Connect to Query...");

                $row_cnt = $res->num_rows;
                ?>


                <ul class="nav navbar-nav navbar-left">
                    <li><a href="manageUser.php">Manage User
                            <span class="badge badge-primary"><?php echo $row_cnt; ?></span>
                            <span class="sr-only">unread messages</span>
                        </a></li>
                </ul>

                <?php
                $db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

                $query = 'SELECT * FROM alumni.validate_ticket' ;

                $res = $db->query($query) or die("Can't Connect to Query...");

                $row_cnt = $res->num_rows;
                ?>

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="manageTicket.php">Manage ticket request
                            <span class="badge badge-primary"><?php echo $row_cnt; ?></span>
                            <span class="sr-only">unread messages</span>
                        </a></li>
                </ul>
                <?php
                if (!isset($_SESSION['status']))
                {
                    echo ' <li><a href="login.php">Login</a></li>';
                }
                else
                {
                    if (isset($_SESSION['access_token']))
                    {
                        echo '<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false">'
                            .$_SESSION['givenName'] . ' '.$_SESSION['familyName'].'<span class="caret"></span></a>
                
                    <ul class="dropdown-menu">
                      
                        <li><a href="../logout.php">Logout</a></li>
                      
                    </ul>
                </li>';
                    }
                    else{
                        echo '<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false">'
                            . $_SESSION['unm'] . '<span class="caret"></span></a>
                
                    <ul class="dropdown-menu">
                    
                        <li><a href="../logout.php">Logout</a></li>
                      
                    </ul>
                </li>';
                    }

                }
                ?>


            </ul>

            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="addUpcomingEvents.php">Add events</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-left">
                <li><a href="addExpiredAlumni.php">Add Expired Alumni</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-left">
                <li><a href="addAlumniCoverImage.php">Add Alumni</a></li>
            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--code for navigation bar ends here-->

<br><br>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function ()
    {

        function load_unseen_notification(view = '')
        {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {view: view},
                dataType: "json",
                success: function (data)
                {
                    $('.dropdown-menu').html(data.notification);
                    if (data.unseen_notification > 0)
                    {
                        $('.count').html(data.unseen_notification);
                    }
                }
            });
        }

        load_unseen_notification();

        $('#comment_form').on('submit', function (event)
        {
            event.preventDefault();
            if ($('#subject').val() != '' && $('#comment').val() != '')
            {
                var form_data = $(this).serialize();
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: form_data,
                    success: function (data)
                    {
                        $('#comment_form')[0].reset();
                        load_unseen_notification();
                    }
                });
            }
            else
            {
                alert("Both Fields are Required");
            }
        });

        $(document).on('click', '.dropdown-toggle', function ()
        {
            $('.count').html('');
            load_unseen_notification('yes');
        });

        setInterval(function ()
        {
            load_unseen_notification();
        }, 5000);

    });
</script>


</body>
</html>
