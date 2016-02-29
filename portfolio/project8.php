<?php include '../includes/header-portfolio.php';?>

<section class="project-container">

  <div class="project-hero grid">
    <div class="col-1-1">



    <!-- Slider -->
    <ul class="bxslider clearfix">
      <li>
        <img src="../images/projects/memorial-day.jpg" alt="">
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
      <h4>Memorial Day, 2014</h4>
			<h6><em>Web design / Web Development</em></h6>
  </div>
</div><!--ends project title-->

  <div class="project-info grid">
    <div class="col-1-3">
      <h6>Challenge</h6>
      <p>To show that the Memorial Day Free shipping offer was affecting all four of our core offers. Managers wanted the “saving event” script to animate in to draw attention to it.</p>
    </div>
    <div class="col-1-3">
      <h6>Solution</h6>
      <p>I added some custom css to our grid system so that the below the fold pods would hold four offers instead of our usual three offers. Using photoshop’s timeline tool, I created the writing effect for the “savings event” script.</p>
    </div>
    <div class="col-1-3">
      <h6>Result</h6>
      <p>The overall experience transferred well from desktop to mobile and we met our demand goals for the Memorial Day campaign.</p>
      <a class="siteLink" href="http://www.homedecorators.com/index.php?folder=home_page/20140522" target="_blank">Visit the site →</a>
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
