<!DOCTYPE html>
<html>

<!--include head section and navbar-->
<?php include('templates/header.php');

//include database functions
include('database/functions.php');
include('database/accounts-functions.php');

if (isset($_POST['delete-acc-submit']) && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // encrypt the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    openDatabase();

    $correctLogIn = checkLogIn($username, $password);

    if ($correctLogIn) {
        deleteAccount($username);
    } else {
        echo "<div class='div-wrong-login'><h3>Your information was wrong :(</h3>";
        echo "<a href='confirm-delete.php'>Please try again.</a></div>";
    }
} else {
?>
    <div class="container div-delete-acc mb-4">
        <h1>Delete Account</h1>

        <p>Are you sure you want to delete your account? Enter your username and password to confirm.</p>

        <form class="delete-acc-form mb-3" action="" method="post">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" name="delete-acc-submit">Delete Account</button>
        </form>

        <a href="account.php"> Return to Account</a>
    </div>
<?php
}

include('templates/footer.php');
?>


</html>