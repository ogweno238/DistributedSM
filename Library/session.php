<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['Admin_UserLogon']) || (trim($_SESSION['Admin_UserLogon']) == '')) {
    header("location: ../index.php");
    exit();
}
$session_id=$_SESSION['Admin_UserLogon'];
?>