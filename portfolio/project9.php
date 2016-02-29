<?php include '../includes/header-portfolio.php';?>

<section class="project-container">

  <div class="project-hero grid">
    <div class="col-1-1">



    <!-- Slider -->
    <ul class="bxslider clearfix">
      <li>
        <img src="../images/projects/pinterest-contest-12dod1.jpg" alt="">
      </li>
      <li>
        <img src="../images/projects/pinterest-contest-12dod2.jpg" alt="">
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
      <h4>Pinterest contest, 12 Days of Deals</h4>
			<h6><em>Web design / Web Development</em></h6>
  </div>
</div><!--ends project title-->

  <div class="project-info grid">
    <div class="col-1-3">
      <h6>Challenge</h6>
      <p>The contest page was being blocked by our third party mobile site and would take close to a month of lead-time for them to get it optimized for our mobile platform.</p>
    </div>
    <div class="col-1-3">
      <h6>Solution</h6>
      <p>Hosting the contest through our social media vendor instead of Home Decorators Collection servers, I was able to create a contest page that was responsive for mobile users.</p>
    </div>
    <div class="col-1-3">
      <h6>Result</h6>
      <p>Optimizing the contest for mobile users helped double the amount of entries into the contest.</p>
      <a class="siteLink social" href="https://api.curalate.com/v1/contests/828761353/versions/1047/preview" target="_blank">Visit the site →</a>
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
