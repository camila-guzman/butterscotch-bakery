<!DOCTYPE html>
<html>

<!--include head section and navbar-->
<?php include('templates/header.php');

//include database functions
include('database/functions.php');
include('database/accounts-functions.php') ?>

<?php

if ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"])) {
?>
    <h1 class="m-3">My Account</h1>
    <div class="container">
        <div class="div-logged-in">
            <a href="confirm-delete.php"> Delete Account</a>
            <a href="log-out.php"> Log Out</a>
        </div>
        <?php
    } else {

        global $username;
        $username = $_POST['username'];
        $password = $_POST['password'];

        // encrypt the password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        openDatabase();

        $correctLogIn = checkLogIn($username, $password);

        closeDatabase();

        if ($correctLogIn) {
            $_SESSION["loggedin"] = true;
        ?>
            <h1 class="m-3">You're logged in!</h1>
            <div class="container div-logged-in">
                <a href="shopping.php">Place Order</a>
                <a href="account.php">My Account</a>
            </div>
    <?php
        } else {
            echo "<div class='div-wrong-login'><h3>Your information was wrong :(</h3>";
            echo "<a href='place-order.php'>Please try again.</a></div>";
        }
    } ?>
    </div>

    <?php
    //include logo and hours section
    include('templates/footer.php'); ?>

</html>