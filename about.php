<!DOCTYPE html>
<html>

<head>

  <!--include head section and navbar-->
  <?php include('templates/header.php'); ?>

  <h1 class=" m-3">About</h1>
  <img src="images/roman-kraft-bread.jpg" class="img-fluid about-img" />

  <div class="container-fluid">
    <!--row-->
    <div class="row spacer-and-article">

      <!--spacer-->
      <div class="col-md-2 col-lg-3"></div>

      <!--article for about-->
      <article class="my-5 col-md-7 col-lg-8">
        <h3 class="display-4">
          We are a family-owned bakery run by life-long two friends.
        </h3>
        <p>
          Butterscotch Bakery was inspired by our family's long histories with
          baking in the Cotswolds in the 1930’s. We are presently raising the
          6th era of yearning bakers.We trust that handcrafted baked goods
          ought to be accessible to everybody. And a unique seasonal drink
          couldn't hurt. At our pastry kitchen in Chipping Sodbury our master
          group of dough punchers deliver an excellent scope of brilliant
          breads, baked goods and sweet shop. Brought into the world with
          flour on their fingers, neighbors and life-long friends Sabina and
          Amelia convey their instilled energy for learning and teaching the
          art of bakery, to keep on being at the front line of creative
          advancement in our community, and guarantee that there is a strong
          future for genuine baked goods made by genuine bakers!
        </p>
      </article>
    </div>

    <!--newsletter-->
    <div class="newsletter row my-5">
      <div class="col-1"></div>
      <div class="newsletter-content col-lg-5 mx-2 mb-4">
        <h2>Stay up-to-date with our newsletter</h2>

        <img src="images/lana-graves-lemon-cake-window.jpg" class="img-fluid newsletter-img my-3" />

        <p>
          Want to be the first to know what amazing bakes and drinks will be
          available this season? Sign up for our newsletter! We'll send you an
          exclusive first-look at what we've been baking, special discounts,
          and more!
        </p>
        <p>
          Dont worry, we know email spam is annoying. We only send out the
          necessary goods.
        </p>
      </div>

      <!--sign-up form-->
      <div class="sign-up-newsletter col-md-5 col-lg-4 mx-4">
        <form class="newsletter-form px-3 py-4" action="about.php" method="post">
          <h4>Subscribe to our newsletter</h4>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control">
          </div>
          <button type="submit" class="btn">Subscribe</button>
        </form>

        <?php
        if (isset($_POST["name"])) { ?>
          <h4 class="ml-3">Welcome to the club, <?php echo $_POST["name"] ?>!</h4>
        <?php } else { ?>
          <p>Don't worry, we know email spam is annoying. We only send the necessary goods</p>
        <?php } ?>
      </div>
    </div>
  </div>

  <!--include logo and hours section-->
  <?php include('templates/footer.php'); ?>

</html>