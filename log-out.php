<!DOCTYPE html>
<html>

<?php
session_start();
$_SESSION["loggedin"] = false;
session_destroy();

//include head section and navbar
include('templates/header.php'); ?>

<h1 class="m-3">You're logged out</h1>
<div class="container div-log-out">
    <a href="index.php">Home</a>
    <a href="menu.php">View Our Menu</a>
    <a href="about.php">Learn About Us</a>
    <a href="contact.php">Contact Us</a>
    <a href="place-order.php">Place An Order</a>
</div>

<!--include logo and hours section-->
<?php include('templates/footer.php'); ?>

</html>