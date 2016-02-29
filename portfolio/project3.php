<?php include '../includes/header-portfolio.php';?>

<section class="project-container">

  <div class="project-hero grid">
    <div class="col-1-1">



    <!-- Slider -->
    <ul class="bxslider clearfix">
      <li>
        <img src="../images/projects/my-account1.jpg" alt="">
      </li>
      <li>
        <img src="../images/projects/my-account2.jpg" alt="">
      </li>
      <li>
        <img src="../images/projects/my-account3.jpg" alt="">
      </li>
    </ul>



    <!-- Pager -->
    <div class="slider-pager"></div>
    <div class="small-border"></div>

    <!-- Prev/Next -->
    <div class="project-gallery-next"></div>
    <div class="project-gallery-prev"></div>

  </div>
</div><!--ends project-hero-->

  <div class="project-title grid">
    <div class="col-1-1">
      <h4>My Account, 2015</h4>
      <h6><em>UX design</em></h6>
  </div>
</div><!--ends project title-->

  <div class="project-info grid">
    <div class="col-1-3">
      <h6>Challenge</h6>
      <p>Once logged in it was difficult to navigate to my account because there is no clear account label. Simple tasks like checking order status, adding billing info and checking their wish list is a chore for most users.</p>
    </div>
    <div class="col-1-3">
      <h6>Solution</h6>
      <p>Adding an account icon in the header makes it clear to the user where to go to find their account information. Creating a drop down navigation gives the user easy access to their account information with less clicks.</p>
    </div>
    <div class="col-1-3">
      <h6>Result</h6>
      <p>The finished high fidelity prototype shows a vast improvement to the my account experience.</p>
      <a class="siteLink" href="http://lhp6v1.axshare.com/overview.html" target="_blank">Visit the site →</a>
      <p class="mobileMessage">Live site examples available on desktop &amp; tablet devices</p>
    </div>
  </div><!--ends project info -->
</section><!--ends .project-container-->

<section class="latest-work">
  <div class="grid header-center">
    <h3 class="">Some of my latest work</h3>
  </div>
  <div class="grid thumbs">
    <div class="col-1-3">
      <div class="portfolio-thumbs">
        <a href="project5.php">
          <img src="../images/thumbnails/deals2013-thumb.jpg" alt="">
          <span class="caption">
            <i class="fa fa-angle-right"></i>
            <h4>12 Days of Deals</h4>
            <p>Brand &amp; Web Design</p>
          </span>
        </a>
      </div><!--ends portfolio thumbs-->
    </div>
    <div class="col-1-3">
      <div class="portfolio-thumbs">
        <a href="project1.php">
          <img src="../images/thumbnails/PIP-thumb.jpg" alt=""><img src="" alt="">
          <span class="caption">
            <i class="fa fa-angle-right"></i>
            <h4>Product Page</h4>
            <p>UX Design</p>
          </span>
        </a>
      </div><!--ends portfolio thumbs-->
    </div>
    <div class="col-1-3 hide-on-mobile">
      <div class="portfolio-thumbs">
        <a href="project4.php">
          <img src="../images/thumbnails/deals2014-thumb.jpg" alt=""><img src="" alt="">
          <span class="caption">
            <i class="fa fa-angle-right"></i>
            <h4>12 Days of Deals</h4>
            <p>Brand &amp; Web Design</p>
          </span>
        </a>
      </div><!--ends portfolio thumbs-->
    </div>
  </div>
</section><!-- ends latest-work -->


<script>
$( document ).ready(function() {

 $('.bxslider').bxSlider();


});

</script>

<?php include '../includes/footer-portfolio.php';?>
