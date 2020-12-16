<?php
include('database/functions.php');
include('database/menu-functions.php');
include('templates/header.php');
?>
<h1 class="m-3">Place Order</h1>
<div class="container">
    <div class="cart my-3">
        <div class="row">
            <span class="ml-2">
                <svg viewBox="0 0 16 16" class="bi bi-cart3" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
            </span>
            <div class="ml-2 mt-1 mb-2">
                <h3>Your Cart</h3>
            </div>
        </div>
        <?php

        // if the name and quantity are set, the name is a string and the quantity is a number
        if ((isset($_POST['item-name'])) && (isset($_POST['item-quantity'])) && (is_string($_POST['item-name'])) && (is_numeric($_POST['item-quantity']))) {
            $item_name = $_POST['item-name'];
            $item_quantity = $_POST['item-quantity'];

            openDatabase();
            displayCartItem($item_name, $item_quantity);
            closeDatabase();
        } else {
            echo "<p>Your cart is empty!</p>";
        } ?>

    </div>

    <!--navigation for menu-->

    <div class=" menu-nav">
        <ul class=" nav">
            <li class="nav-item">
                <a class="nav-link" href="#sweet">Sweet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#savory">Savory</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#drinks">Drinks</a>
            </li>
        </ul>
    </div>
</div>

<!--menu section-->

<?php
displayEntireShoppingMenu();

include('templates/footer.php');
?>

</html>