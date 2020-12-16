        <!DOCTYPE html>
        <html>

        <!--include head section and navbar-->
        <?php include('templates/header.php'); ?>

        <!--include database functions-->
        <?php include('database/functions.php'); ?>

        <h1 class=" m-3">Place Order</h1>

        <?php
        if ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"])) {

            include('shopping.php');
        } else { ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h4>Log In</h4>
                        <form action="account.php" method="post" class="login-form mb-4">
                            <div class="form-group">
                                Username
                                <input type="text" name="username" class="form-control">
                                Password
                                <input type="password" name="password" class="form-control">
                                <button type="submit" class="btn">Log In</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-4">
                        <?php

                        if ((isset($_POST["firstname"])) && (isset($_POST["lastname"])) && (isset($_POST["email"])) && (isset($_POST["username"])) && (isset($_POST["password"]))) {

                            $firstname = $_POST["firstname"];
                            $lastname = $_POST["lastname"];
                            $email = $_POST["email"];
                            $username = $_POST["username"];
                            $password = $_POST["password"];

                            // password hash
                            $password_hash = password_hash($password, PASSWORD_DEFAULT);

                            openDatabase();

                            insertAccountInfo($firstname, $lastname, $email, $username, $password_hash);

                            closeDatabase();

                            echo "<h4>You have successfully created an account, " . $firstname . "! Try logging in now.</h4>";
                        } else {
                        ?>
                            <h4>Don't have an account?</h4>
                            <p>Sign up and recieve 20% off your first order!</p>

                            <span class="error">* required field</span>
                            <form action="account.php" method="post" class="login-form mb-4">
                                <div class="form-group">
                                    First Name *
                                    <input type="text" name="firstname" class="form-control">
                                    Last Name *
                                    <input type="text" name="lastname" class="form-control">
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