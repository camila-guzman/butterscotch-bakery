<?php

if (isset($_POST["password"])) {

    if (gettype($_POST["password"]) == 'string') {

        if ($_POST["password"] == "dig3134pass") {

            setcookie("placeOrder");

            include 'menu-logged-in.php';
        } else {

?>
            <!DOCTYPE html>
            <html>
            <!--include head section and navbar-->
            <?php include('templates/header.php'); ?>


            <h1 class=" m-3">Place Order</h1>


            <div class="container m-5 p-5">
                <h3>Your information was wrong :(</h3>
                <a href="place-order.php">Please try again.</a>
            </div>
            <!--include logo and hours section-->
            <?php include('templates/footer.php'); ?>

            </html> <?php
                }
            }
        }
