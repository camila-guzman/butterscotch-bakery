<!--hours-->
<div class="hours">
  <div class="row">
    <img src="images/bb-logo.png" class="img-fluid col-sm-4 logo-img" />
    <div class="mt-4">
      <h4>Butterscotch Bakery</h4>

      <?php if ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"])) {
      ?>
        <ul class="footer-nav d-flex">
          <li>
            <a href="index.php" class="footer-a mr-2">Home</a>
          </li>
          <li>
            <a href="menu.php" class="footer-a mr-2">Menu</a>
          </li>
          <li>
            <a href="about.php" class="footer-a mr-2">About</a>
          </li>
          <li>
            <a href="contact.php" class="footer-a mr-2">Contact</a>
          </li>
          <li>
            <a href="shopping.php" class="footer-a mr-2">Place Order</a>
          </li>
          <li>
            <a href="account.php" class="footer-a mr-2">My Account</a>
          </li>
          <li>
            <a href="log-out.php" class="footer-a mr-2">Log Out</a>
          </li>
        </ul>

      <?php } else { ?>
        <ul class="footer-nav d-flex">
          <li>
            <a href="index.php" class="footer-a mr-2">Home</a>
          </li>
          <li>
            <a href="menu.php" class="footer-a mr-2">Menu</a>
          </li>
          <li>
            <a href="about.php" class="footer-a mr-2">About</a>
          </li>
          <li>
            <a href="contact.php" class="footer-a mr-2">Contact</a>
          </li>
          <li>
            <a href="place-order.php" class="footer-a mr-2">Place Order</a>
          </li>
        </ul>
      <?php } ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>