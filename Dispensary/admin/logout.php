<?php

ob_start();
session_start();
unset($_SESSION['Admin_UserLogon']);
echo '<script type="text/javascript">window.location="../index.php"; </script>';


?>