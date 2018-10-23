<?php require 'inc/head.php';

session_start();
session_destroy();
echo 'You have been logged out';
?>
<br>
<a  href="login.php" class="btn btn-primary">
    <span class="glyphicon" aria-hidden="true"></span> Click here to log in !
</a>








