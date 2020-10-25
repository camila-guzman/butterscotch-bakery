<?php
if (isset($_COOKIE["placeOrder"])) {

    include 'menu-logged-in.php';
} else { ?>

    <!DOCTYPE html>
    <html>
    <!--include head section and navbar-->
    <?php include('templates/header.php'); ?>


    <h1 class=" m-3">Place Order</h1>


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h4>Please log in to place an order</h4>
                <form action="login-verification.php" method="post" class="login-form mb-4">
                    <div class="form-group">
                        Username
                        <input type="text" name="username" class="form-control">
                        Password
                        <input type="password" name="password" class="form-control">
                        <button type="submit" class="btn">Log In</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-6">
                <h4>Don't have an account?</h4>
                <span class="error">* required field</span>
                <form action="place-order.php" method="post" class="login-form mb-4">
                    <div class="form-group">
                        Name *
                        <input type="text" name="name" class="form-control">
                        Email *
                        <input type="text" name="email" class="form-control">
                        Username *
                        <input type="text" name="username" class="form-control">
                        Password *
                        <input type="password" name="password" class="form-control">
                        <button type="submit" class="btn">Create Account</button>
                    </div>
                </form>
                <?php
                if ($_POST["name"] && $_POST["email"] && $_POST["username"] && $_POST["password"]) {

                    $filename = "account-info.txt";

                    $fileHandle = fopen($filename, "w");

                    fwrite($fileHandle, $name);
                    fwrite($fileHandle, $email);
                    fwrite($fileHandle, $username);
                    fwrite($fileHandle, $password);

                    fclose($fileHandle); ?>

                    <h4>You have successfully created an account, <?php echo $_POST["name"] ?>!</h4>
                    <h4>Try logging in now<h4>
                        <?php
                    } else {
                        ?>
                            <h4>Please enter all information to create an account.</h4>
                        <?php
                    }
                        ?>
            </div>
        </div>
    </div>

    <!--include logo and hours section-->
    <?php include('templates/footer.php'); ?>

    </html>
<?php }
?>