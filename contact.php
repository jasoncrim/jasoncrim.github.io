<?php include 'includes/header.php';?>

<section class="contact">


      <!-- Contact Form -->
  <div id="contact-form" class="dark clearfix">
    <div class="container">
      <div class="contact-heading grid-full">
        <h3>Get in touch</h3>
        <span class="border"></span>
      </div>
    </div>

    <form method="post" action="post.php" name="contactform" id="contactform" class="container">
      <fieldset>
        <div class="form-field grid">
          <div class="col-1-2">
          <label for="name">Name</label>
          <span><input type="text" name="name" id="name" /></span>
          </div>

        <div class="col-1-2">
          <label for="email">Email</label>
          <span><input type="email" name="email" id="email" /></span>
        </div>
      </div><!--ends .grid-->
        <div class="form-field grid">
          <div class="col-1-1">
          <label for="message">Message</label>
          <span><textarea name="message" id="message"></textarea></span>
        </div>
      </div><!--ends .grid-->
      </fieldset>
      <div class="form-click grid">
        <div class="col-1-1">
        <span><input type="submit" name="submit" value="Send" id="submit" /></span>
      </div>
    </div><!--ends .grid-->
      <div id="alert" class="grid-full"></div>
    </form>
  </div><!--ends .contact-form-->
</div><!--ends .container-->


</section>

<?php include 'includes/footer.php';?>
