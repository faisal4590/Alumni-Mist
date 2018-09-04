<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/27/2018
 * Time: 5:13 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <div class="row">


        <?php
        include('../functions/functions.php');
        require_once '../tcpdf/config/tcpdf_config.php';
        require_once '../tcpdf/tcpdf.php';

        $ticket_id     = $_GET['ticket_id'];
        $user_id       = $_GET['user_id'];
        $eventTitle    = $_GET['eventTitle'];
        $eventDuration = $_GET['eventDuration'];
        $eventTime     = $_GET['eventTime'];
        $eventImage    = $_GET['eventImage'];
        $eventLocation = $_GET['eventLocation'];
        $fullname      = $_GET['fullname'];
        $userImage     = $_GET['userImage'];
        $userEmail     = $_GET['userEmail'];

        $query = "select * from alumni.validate_ticket where validate_ticket.ticket_id = '$ticket_id'";

        if (count(fetchAll($query)) > 0)
        {
            echo "<table  class='table table-bordered table-responsive'>
    <tr>
        <th>User ID</th>
        <th>Student name</th>
        <th>Event name</th>
        <th>Event time</th>
        <th>Event duration</th>
        <th>Event location</th>
    </tr>";
            foreach (fetchAll($query) as $row)
            {
                echo '
        <tr>
            <td>' . $user_id . '</td>
            <td>' . $fullname . '</td>
            <td>' . $eventTitle . '</td>
            <td>' . $eventTime . '</td>
            <td>' . $eventDuration . ' days' . '</td>
            <td>' . $eventLocation . '</td>
        </tr>
        ';

                /* $query = "INSERT INTO alumni.users (u_id,u_unm,u_fnm,u_email,u_pwd,u_img)
                     VALUES ('$id', '$username', '$fullname', '$email', '$password', '$userImage');";*/
            }
            //$query .= "DELETE FROM alumni.requests WHERE requests.id = '$id';";

            echo "</table>";
            /*if(performQuery($query)){
                echo "<script>alert('Account has been accepted.')</script>";

            }else{
                echo "<script>alert('Unknown error occurred. Please try again.')</script>";

            }*/
        }
        else
        {
            echo "Error occured.";
        }

        ?>

        <form method="post" action="">
            <button class="btn btn-success" name="submitpdf">Generate ticket and email to user</button>
        </form>
        <a href="index.php">Go back</a>

        <?php

        if (isset($_POST['submitpdf']))
        {

           require '../PHPMailer-master/PHPMailerAutoload.php';

            // Include the main TCPDF library (search for installation path).

// extend TCPF with custom functions
            class MYPDF extends TCPDF
            {

                // Load table data from file
                public function LoadData()
                {
                    $ticket_id = $_GET['ticket_id'];
                    $query = "select * from alumni.validate_ticket where validate_ticket.ticket_id = '$ticket_id'";
                    return fetchAll($query);

                }

                // Colored table
                public function ColoredTable($header, $data)
                {
                    // Colors, line width and bold font
                    $this->SetFillColor(255, 0, 0);
                    $this->SetTextColor(255);
                    $this->SetDrawColor(128, 0, 0);
                    $this->SetLineWidth(0.3);
                    $this->SetFont('', 'B');
                    // Header
                    $w = array(
                        20,
                        35,
                        35,
                        40,
                        30,
                        30);
                    $num_headers = count($header);
                    for ($i = 0; $i < $num_headers; ++$i)
                    {
                        $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
                    }
                    $this->Ln();
                    // Color and font restoration
                    $this->SetFillColor(224, 235, 255);
                    $this->SetTextColor(0);
                    $this->SetFont('');
                    // Data
                    $fill = 0;
                    foreach ($data as $row)
                    {
                        $this->Cell($w[0], 6, $row['user_id'], 'LR', 0, 'L', $fill);
                        $this->Cell($w[1], 6, $row['fullname'], 'LR', 0, 'L', $fill);
                        $this->Cell($w[2], 6, $row['upcoming_event_title'], 'LR', 0, 'L', $fill);
                        $this->Cell($w[3], 6, $row['upcoming_event_time'], 'LR', 0, 'L', $fill);
                        $this->Cell($w[4], 6, $row['upcoming_event_duration'], 'LR', 0, 'R', $fill);
                        $this->Cell($w[5], 6, $row['upcoming_event_location'], 'LR', 0, 'L', $fill);
                       /* $this->Cell($w[2], 6, number_format($row[2]), 'LR', 0, 'R', $fill);
                        $this->Cell($w[3], 6, number_format($row[3]), 'LR', 0, 'R', $fill);*/
                        $this->Ln();
                        $fill = !$fill;
                    }
                    $this->Cell(array_sum($w), 0, '', 'T');
                }
            }

// create new PDF document
            $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('MIST');
            $pdf->SetTitle('Ticket for '.$eventTitle);
            $pdf->SetSubject('Ticket for upcoming event');
            $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE , PDF_HEADER_STRING);

// set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,
                '',
                PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA,
                '',
                PDF_FONT_SIZE_DATA));

// set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__) . '/lang/eng.php'))
            {
                require_once(dirname(__FILE__) . '/lang/eng.php');
                $pdf->setLanguageArray($l);
            }

// ---------------------------------------------------------

// set font
            $pdf->SetFont('helvetica', '', 12);

// add a page
            $pdf->AddPage();

// column titles
            $header = array(
                'User ID',
                'Student name',
                'Event name',
                'Event time',
                'Event duration(in days)',
                'Event location');

// data loading
            $data = $pdf->LoadData();


// print colored table
            $pdf->ColoredTable($header, $data);
            ob_end_clean();
// ---------------------------------------------------------
// close and output PDF document
            $pdfFile = $pdf->Output('eventTicket.pdf', 'S');


            //code for phpMailer starts here

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host        = 'smtp.gmail.com';
            $mail->SMTPAuth    = true;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //Provide username and password
            $mail->Username = "optimizedfaisal42@gmail.com";
            $mail->Password = "googlemaniac420";
            //If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "false";
            $mail->Port       = 587;
            //Set TCP port to connect to

            $mail->From     = "optimizedfaisal42@gmail.com";
            $mail->FromName = "Faisal";

            $mail->addAddress($userEmail);

            $mail->addStringAttachment($pdfFile,'eventTicket.pdf');

            $mail->isHTML(true);

            $mail->Subject = "Ticket for " . $eventTitle . " event";
            $mail->Body    = "<i style='font-weight: bold;font-size: 25px;'>Ticket for </i>" . $eventTitle;
            // create new PDF document

            if (!$mail->send())
            {
                echo "Mailer Error: " . $mail->ErrorInfo;

            }
            else
            {
                echo '<script>alert("Message has been sent.")</script>';

            }

            $notiMessage = 'Your ticket request for '.$eventTitle.' has been accepted. Check your email to get the ticket.';
            $query = "INSERT INTO user_ticket_notification(user_id,email,event_title,noti_message,ticket_id) VALUES('$user_id',
            '$userEmail','$eventTitle','$notiMessage','$ticket_id')";

            performQuery($query);





            $query = "DELETE FROM alumni.validate_ticket WHERE validate_ticket.ticket_id = '$ticket_id'";
            performQuery($query);

            echo '<button class="btn btn-info"> <a href="index.php">Home</a></button>';

            //code for phpMailer ends here

        }

        ?>
    </div>
</div>


</body>
</html>
