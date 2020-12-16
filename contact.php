<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
    <?php include('templates/header.php'); ?>

    <h1 class=" m-3">Contact Us</h1>

    <img
      src="images/lana-graves-landscape-bakery.jpg"
      class="img-fluid contact-img"
    />

    <!--contact section-->
    <div class="container">
      <?php 
        if(isset($_POST["Fname"])){ ?>
          <div class="my-5">
            <h4>Thanks for your message, <?php echo $_POST["Fname"] ?>!</h4>
            <p>We'll contact you shortly.</p>
          </div>
        <?php } 

        else { ?>

      <!--article-->
      <article class="mt-5">
        <h2>Have any burning questions?</h2>
        <p>Send us a message and we'll get back to you as soon as we can!</p>
      </article>

      <!--contact form-->
      <form class="contact-form pb-5 pt-4 mb-5" action="contact.php" method="post">
        <div class="form-group">
          <label for="Fname">First Name</label>
          <input type="text" class="form-control" name="Fname">
        </div>
        <div class="form-group">
          <label for="Lname">Last Name</label>
          <input type="text" class="form-control" name="Lname">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" name="subject">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" class="form-control"></textarea>
        </div>
        <input type="submit" class="contact-submit btn mb-2" value="Submit">
      </form>
      <?php 
        } ?>

    </div>

    <!--include logo and hours section-->
    <?php include('templates/footer.php'); ?>
</html>
