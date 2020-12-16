<!DOCTYPE html>
<html>

<!--include head section and navbar-->
<?php include('templates/header.php');
include('database/functions.php');
include('database/menu-functions.php') ?>


<!--navigation for menu-->
<div class="menu-nav">
    <h1>Menu</h1>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#Sweet">Sweet</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Savory">Savory</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Drink">Drink</a>
        </li>
    </ul>
</div>

<?php
displayEntireMenu();
?>

<!--include logo and hours section-->
<?php include('templates/footer.php'); ?>

</html>