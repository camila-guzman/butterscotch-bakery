<?php

// Display the menu items based on the type of item: Sweet, Savory or Drink
function displayMenuSection($type)
{

    global $connection;

    // query select from menu-items
    $sql = "SELECT Name, Price, URL FROM menu_items WHERE Type = '$type'";

    // run query
    $result = mysqli_query($connection, $sql);

    echo "<h3 id='" . $type . "' class='section-title'>" . $type . "</h3>";
    echo "<div class='row mb-3'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card mx-4 col-md-4 col-lg-3'>";
        echo "<img src='" . $row['URL'] . "'class='card-img-top' alt=''>";
        echo "<div class='card-body'> <h5 class='card-title'>" . $row['Name'] . "</h5>";
        echo "<p class='card-text'>$" . $row['Price'] . "</p></div></div>";
    }
    echo "</div>";

    if (!$result) {
        echo "ERROR: Could not execute $sql. " . "<br><br>" .  mysqli_error($connection);
    }
}

function displayEntireMenu()
{

    echo "<div class='container'>";

    openDatabase();

    $type = 'Sweet';
    displayMenuSection($type);

    $type = 'Savory';
    displayMenuSection($type);

    $type = 'Drink';
    displayMenuSection($type);

    closeDatabase();

    echo "</div>";
}

// Display the menu items based on the type of item: Sweet, Savory or Drink
function displayShoppingSection($type)
{

    global $connection;

    // query select from menu-items
    $sql = "SELECT * FROM menu_items WHERE Type = '$type'";

    // run query
    $result = mysqli_query($connection, $sql);

    echo "<h3 id='" . $type . "' class='section-title'>" . $type . "</h3>";
    echo "<div class='row mb-3'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card mx-4 col-md-4 col-lg-3'>";
        echo "<img src='" . $row['URL'] . "'class='card-img-top' alt=''>";
        echo "<div class='card-body'> <h5 class='card-title'>" . $row['Name'] . "</h5>";
        echo "<p class='card-text shopping-price'>$" . $row['Price'] . "</p>";

        echo "<form class='item-form' method='post' action=''>";
        echo "<input type='number' name='item-quantity' value='1' min='1' max='5' placeholder='quantity' required/>";
        echo "<input type='hidden' name='item-name' value='" . $row['Name'] . "' />";
        echo "<button type='submit' class='add-to-cart-btn'>Add to Cart</button></form></div></div>";
    }
    echo "</div>";

    if (!$result) {
        echo "ERROR: Could not execute $sql. " . "<br><br>" .  mysqli_error($connection);
    }
}

function displayEntireShoppingMenu()
{

    echo "<div class='container'>";

    openDatabase();

    $type = 'Sweet';
    displayShoppingSection($type);

    $type = 'Savory';
    displayShoppingSection($type);

    $type = 'Drink';
    displayShoppingSection($type);

    closeDatabase();

    echo "</div>";
}

function displayCartItem($itemName, $itemQuantity)
{

    global $connection;

    // query select from menu-items
    $sql = "SELECT * FROM menu_items WHERE Name = '$itemName'";

    // run query
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($itemQuantity > 1) {
            echo "<p>You added " . $itemQuantity . " " . $row['Name'] . "s to your Cart!</p>";
        } else {
            echo "<p>You added " . $itemQuantity . " " . $row['Name'] . " to your Cart!</p>";
        }
    }
}
