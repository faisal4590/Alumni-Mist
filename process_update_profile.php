<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/29/2018
 * Time: 11:29 PM
 */
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);


$db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

if (!empty($_POST))
{
    $msg = '';


    if ($_POST['updatePassword'] != $_POST['confirmUpdatePassword'])
    {
        $msg .= '<p>Your password did not match. Please Enter your Password Again.</p>';
    }


    if (strlen($_POST['updatePassword']) > 30)
    {
        $msg .= '<p>Password must be within 30 charecters....</p>';
    }


    if ($msg != '')
    {
        header('location:newUpdate.php?error=' . $msg);
    }
    else
    {

        if (!empty($_FILES['deleteImage']['name']))
        {
            $updatepwd                  = htmlspecialchars($_POST['updatePassword']);
            $updateTwitter              = htmlspecialchars($_POST['updateTwitter']);
            $updateFb                   = htmlspecialchars($_POST['updateFacebook']);
            $updateGoogle               = htmlspecialchars($_POST['updateGooglePlus']);
            $updateLinkedIn             = htmlspecialchars($_POST['updateLinkedIn']);
            $updateUnm                  = htmlspecialchars($_POST['updateUsername']);
            $updateFnm                  = htmlspecialchars($_POST['updateUserFullName']);
            $updateMobile               = htmlspecialchars($_POST['updateMobileNo']);
            $updateDesignation          = htmlspecialchars($_POST['updateDesignation']);
            $updateCity                 = htmlspecialchars($_POST['updateCity']);
            $updateCurrentWorkingPlace  = htmlspecialchars($_POST['updateWorkingInfo']);
            $updateAddress              = htmlspecialchars($_POST['updateAddress']);
            $updateRoll              = htmlspecialchars($_POST['updateRoll']);
            $updateRegistrationNo             = htmlspecialchars($_POST['updateReg']);
            $updateDepartment           = htmlspecialchars($_POST['updateDepartment']);
            $updateBatch           = htmlspecialchars($_POST['updateBatch']);
            $updateStudentStatus        = htmlspecialchars($_POST['updateStudentStatus']);
            $updateResearchLink         = htmlspecialchars($_POST['updateResearchLink']);
            $updateIncmUni              = htmlspecialchars($_POST['updateIncomingUniversityName']);
            $updateIncmCntry            = htmlspecialchars($_POST['updateIncomingCountryAndState']);
            $updateHigherDept           = htmlspecialchars($_POST['updateHigherDepartment']);
            $updateHigherResearchArea   = htmlspecialchars($_POST['updateResearchArea']);
            $updateHigherAdmsInDegree   = htmlspecialchars($_POST['updateAdmissionInDegree']);
            $updateHigherFundStatus     = htmlspecialchars($_POST['updateFundStatus']);
            $updateHigherUndergradCGPA  = htmlspecialchars($_POST['updateUndergradeCGPA']);
            $updateHigherIelts          = htmlspecialchars($_POST['updateIelts']);
            $updateHigherGre            = htmlspecialchars($_POST['updateGre']);
            $updateHigherPublications   = htmlspecialchars($_POST['updatePublications']);
            $updateHigherJobExp         = htmlspecialchars($_POST['updateJobExperience']);
            $updateHigherHowDidApply    = htmlspecialchars($_POST['updateHowDidYouApply']);
            $updateHigherHowManagedFund = htmlspecialchars($_POST['updateHowDidYouManageFund']);
            if (isset($_SESSION['access_token']))
            {
                $previousImageName = $_SESSION['userImage'];
            }
            else
            {
                $previousImageName = $_SESSION['uphoto'];
            }
            unlink("images/userImages/$previousImageName");

            $updateUserImageName = $_FILES['deleteImage']['name'];

            var_dump($previousImageName,$updateUserImageName);

            move_uploaded_file($_FILES['deleteImage']['tmp_name'], 'images/userImages/'
                .$_FILES['deleteImage']['name']);




            $usd = $_SESSION['uid'];



            $sql = "UPDATE alumni.users SET users.u_pwd='$updatepwd', users.twitter='$updateTwitter',
            users.facebook='$updateFb',users.googleplus='$updateGoogle', 
            users.linkedin='$updateLinkedIn',users.u_unm='$updateUnm',
            users.u_fnm='$updateFnm', users.designation='$updateDesignation', users.mobile_no='$updateMobile',
            users.current_working_place='$updateCurrentWorkingPlace', users.city='$updateCity',
            users.address='$updateAddress',
             users.roll='$updateRoll',users.registration_no='$updateRegistrationNo',
             users.department='$updateDepartment', users.batch_no='$updateBatch',  users.student_status='$updateStudentStatus',
            users.research_link='$updateResearchLink',  users.higher_uni='$updateIncmUni',
            users.higher_cntry='$updateIncmCntry',
            users.higher_dept='$updateHigherDept', users.higher_research_area='$updateHigherResearchArea',
             users.higher_admsn='$updateHigherAdmsInDegree', users.higher_fund_status='$updateHigherFundStatus',
             users.higher_CGPA='$updateHigherUndergradCGPA',users.higher_ielts='$updateHigherIelts', users.higher_gre='$updateHigherGre',
             higher_publications='$updateHigherPublications', higher_job_experience='$updateHigherJobExp',
             users.higher_apply='$updateHigherHowDidApply', users.higher_fund='$updateHigherHowManagedFund',
             users.u_img='$updateUserImageName'
            WHERE u_id=$usd";


            $db->query($sql);
            $db->close();

            $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

            $sql = "UPDATE alumni.users SET users.u_img='$updateUserImageName' WHERE u_id=$usd";
            $db->query($sql);
            $db->close();

            if (isset($_SESSION['access_token']))
            {
                $_SESSION['userImage'] = $updateUserImageName;
            }
            else
            {
                $_SESSION['uphoto'] = $updateUserImageName;
            }


            header("location:newUpdate.php?ok=1");

        }
        else
        {
            $updatepwd                  = htmlspecialchars($_POST['updatePassword']);
            $updateTwitter              = htmlspecialchars($_POST['updateTwitter']);
            $updateFb                   = htmlspecialchars($_POST['updateFacebook']);
            $updateGoogle               = htmlspecialchars($_POST['updateGooglePlus']);
            $updateLinkedIn             = htmlspecialchars($_POST['updateLinkedIn']);
            $updateUnm                  = htmlspecialchars($_POST['updateUsername']);
            $updateFnm                  = htmlspecialchars($_POST['updateUserFullName']);
            $updateMobile               = htmlspecialchars($_POST['updateMobileNo']);
            $updateDesignation          = htmlspecialchars($_POST['updateDesignation']);
            $updateCity                 = htmlspecialchars($_POST['updateCity']);
            $updateCurrentWorkingPlace  = htmlspecialchars($_POST['updateWorkingInfo']);
            $updateRoll              = htmlspecialchars($_POST['updateRoll']);
            $updateRegistrationNo             = htmlspecialchars($_POST['updateReg']);
            $updateAddress              = htmlspecialchars($_POST['updateAddress']);
            $updateDepartment           = $_POST['updateDepartment'];
            $updateBatch           =           $_POST['updateBatch'];
            $updateStudentStatus        = htmlspecialchars($_POST['updateStudentStatus']);
            $updateResearchLink         = htmlspecialchars($_POST['updateResearchLink']);
            $updateIncmUni              = htmlspecialchars($_POST['updateIncomingUniversityName']);
            $updateIncmCntry            = htmlspecialchars($_POST['updateIncomingCountryAndState']);
            $updateHigherDept           = htmlspecialchars($_POST['updateHigherDepartment']);
            $updateHigherResearchArea   = htmlspecialchars($_POST['updateResearchArea']);
            $updateHigherAdmsInDegree   = htmlspecialchars($_POST['updateAdmissionInDegree']);
            $updateHigherFundStatus     = htmlspecialchars($_POST['updateFundStatus']);
            $updateHigherUndergradCGPA  = htmlspecialchars($_POST['updateUndergradeCGPA']);
            $updateHigherIelts          = htmlspecialchars($_POST['updateIelts']);
            $updateHigherGre            = htmlspecialchars($_POST['updateGre']);
            $updateHigherPublications   = htmlspecialchars($_POST['updatePublications']);
            $updateHigherJobExp         = htmlspecialchars($_POST['updateJobExperience']);
            $updateHigherHowDidApply    = htmlspecialchars($_POST['updateHowDidYouApply']);
            $updateHigherHowManagedFund = htmlspecialchars($_POST['updateHowDidYouManageFund']);
            if (isset($_SESSION['access_token']))
            {
                $previousImageName = $_SESSION['userImage'];
            }
            else
            {
                $previousImageName = $_SESSION['uphoto'];
            }




            $usd = $_SESSION['uid'];



            $sql = "UPDATE alumni.users SET users.u_pwd='$updatepwd', users.twitter='$updateTwitter',
            users.facebook='$updateFb', users.googleplus='$updateGoogle', 
            users.linkedin='$updateLinkedIn',users.u_unm='$updateUnm',
            users.u_fnm='$updateFnm', users.designation='$updateDesignation', users.mobile_no='$updateMobile',
            users.current_working_place='$updateCurrentWorkingPlace', users.city='$updateCity',
              users.roll='$updateRoll',users.registration_no='$updateRegistrationNo',
            users.address='$updateAddress', users.department='$updateDepartment', users.batch_no='$updateBatch',   users.student_status='$updateStudentStatus',
            users.research_link='$updateResearchLink',  users.higher_uni='$updateIncmUni',
            users.higher_cntry='$updateIncmCntry',
            users.higher_dept='$updateHigherDept', users.higher_research_area='$updateHigherResearchArea',
             users.higher_admsn='$updateHigherAdmsInDegree', users.higher_fund_status='$updateHigherFundStatus',
             users.higher_CGPA='$updateHigherUndergradCGPA',users.higher_ielts='$updateHigherIelts', 
             users.higher_gre='$updateHigherGre',
             higher_publications='$updateHigherPublications', higher_job_experience='$updateHigherJobExp',
             users.higher_apply='$updateHigherHowDidApply', users.higher_fund='$updateHigherHowManagedFund',
             users.u_img='$previousImageName'
            WHERE u_id=$usd";

            mysqli_query($db,$sql)  or trigger_error(mysqli_error($db)." ".$sql);;

            $db->close();


            $db = new mysqli("localhost", "root", "", "alumni") or die("Can't Connect to database");

            $sql = "UPDATE alumni.users SET users.u_img='$previousImageName' WHERE u_id=$usd";
            $db->query($sql);
            $db->close();
            header("location:newUpdate.php?ok=1");
        }

    }
}
else
{
    header("location:index.php");
}