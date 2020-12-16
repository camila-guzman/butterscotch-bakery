<!DOCTYPE html>
<html>

<!--include head section and navbar-->
<?php

include('templates/header.php'); ?>

<!--welcome heading-->
<h1 class=" home-heading m-3 mt-0">Welcome to Butterscotch Bakery!</h1>

<!--heading-->
<img src="images/prakash-meghani-banner.jpg" class="img-fluid home-img" />

<!--container-->
<div class="container-fluid">

  <!--row for blurb-->
  <div class="row spacer-and-blurb">

    <!--spacer-->
    <div class="col-lg-1"></div>

    <!--welcome blurb-->
    <div class="blurb py-5 ml-lg-1 col-lg-6">
      <div class="blurb-text">
        <h2 class="mb-4"> We are two friends with an obsession for baking who finally decided: it's time to share our obsession with everyone! </h2>
        <p>We offer seasonal baked good and drinks, so make sure to check out our selection before they change! This lets us try out new recipes and perfect them, just for you.</p>

        <p>We offer baked goods for any occasion for pick-up and delivery.</p>

        <p>We're committed to making the art of baking a fun and successible skill to learn. We've decided (finally) to offer virtual courses for our most popular recipes like our fluffy pancakes and the famous pear tart! Course dates will be released soon so stay posted.</p>
      </div>
    </div>
  </div>

  <!--row for special bake and newsletter-->
  <div class="row">
    <div class="col-lg-1"></div>
    <!--newsletter-->
    <div class="newsletter col-lg-4 my-5">
      <h4>Stay up-to-date with our newsletter!</h4>

      <img src="images/lana-graves-lemon-cake-window.jpg" class="img-fluid newsletter-img mb-lg-0 mt-0" />

      <p class="mt-2">Want to be the first to know what amazing bakes and drinks will be available this season? Sign up for our newsletter! We'll send you an exclusive first-look at what we've been baking, special discounts, and more!</p>

      <!--sign-up form-->
      <div class="sign-up-newsletter mt-4 mb-5">

        <?php
        if (isset($_POST["name"])) {
          $_SESSION['name'] = $_POST['name'];
        ?>
          <h4 class="ml-3">Welcome to the club, <?php echo $_POST["name"] ?>!</h4>
        <?php } else { ?>
          <form class="newsletter-form px-3 py-4" action="index.php" method="post">
            <h4>Subscribe to our newsletter</h4>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="name" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <button type="submit" class="btn">Subscribe</button>
          </form>
          <p>Don't worry, we know email spam is annoying. We only send the necessary goods</p>
        <?php } ?>

      </div>
    </div>
    <div class="col-lg-1"></div>
    <!--special bake section-->
    <div class="special-bake my-5 mb-lg-0 col-md-12 col-lg-6">
      <h4>The special bake we're proud of this season is:<br> <strong>Lemon Rosemary Focaccia</strong></h4>

      <!--special bake image-->
      <img src="images/savory-images/amber-engle-lemon-rosemary-focaccia-square.jpg" class="img-fluid special-bake-img" />

      <!--button-->
      <a class="special-bake-a mt-3 d-block" href="menu.php">Take a Look at Our Menu!</a>
    </div>
  </div>
</div>
<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>

</html>