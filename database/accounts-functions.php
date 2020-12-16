<?php

/**     FUNCTIONS FOR ACCOUNTS      */

// Login Verificaiton
function checkLogIn($username, $password)
{
    global $connection;

    $correctLogIn = false;

    $sql = "SELECT Password FROM accounts where Username='" . $username . "'";

    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['Password'])) {
        $correctLogIn = true;
    } else {
        $correctLogIn = false;
    }

    return $correctLogIn;
}

// Display Account information from database
function displayAccountInfo()
{
    // global username from this session
    global $username;

    // query select column froms table
    $sql = "SELECT * FROM accounts WHERE Username = '$username'";

    // global 
    global $connection;

    // run query
    $result = mysqli_query($connection, $sql);

    // display first name
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='row account-info'>";
        echo "<p>Account ID:" . $row['ID'] . "</p>";
        echo "<p>First Name:" . $row['Firstname'] . "</p>";
        echo "<p>Last Name:" . $row['Lastname'] . "</p>";
        echo "<p>Username:" . $row['Username'] . "</p>";
        echo "<a href='delete-account.php'>Delete Account</a>";
        echo "<div>";
    }
}

// Insert new account information into database
function insertAccountInfo($firstname, $lastname, $email, $username, $password)
{
    // add connection variable
    global $connection;

    // create a random ID number between 1000 and 9999 inclusive
    $ID = rand(999, 10000);

    // query insert user input
    $sql = "INSERT INTO accounts (ID, FirstName, LastName, Email, Username, Password) VALUES ('" . $ID . "', '" . $firstname . "', '" . $lastname . "',  '" . $email . "', '" . $username . "', '" . $password . "')";

    // run query
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        echo "ERROR: Could not execute $sql. " . "<br><br>" .  mysqli_error($connection);
    }
}

// Delete account
function deleteAccount($username)
{
    global $connection;

    $sql = "DELETE FROM accounts WHERE FirstName = '$username'";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        session_destroy();
        echo "<div class='container my-2'><h1>Your account was successfully deleted.</h1>";
        echo "<a href='index.php'> Home</a></div>";
    } else {
        echo "ERROR: Could not execute $sql. " . "<br><br>" .  mysqli_error($connection);
    }
}
