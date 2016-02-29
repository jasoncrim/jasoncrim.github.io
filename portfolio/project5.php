<?php include '../includes/header-portfolio.php';?>

<section class="project-container">

  <div class="project-hero grid">
    <div class="col-1-1">



    <!-- Slider -->
    <ul class="bxslider clearfix">
      <li>
        <img src="../images/projects/deals2013-day1.jpg" alt="">
      </li>
      <li>
        <img src="../images/projects/deals2013-day9.jpg" alt="">
      </li>
      <li>
        <img src="../images/projects/deals2013-day12.jpg" alt="">
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
      <h4>12 Days of Deals, 2013</h4>
			<h6><em>Web design / Web Development</em></h6>
  </div>
</div><!--ends project title-->

  <div class="project-info grid">
    <div class="col-1-3">
      <h6>Challenge</h6>
      <p>To reveal the daily deal with a door animation and include a countdown timer to illustrate the urgency of the time left to purchase. This animation could not be animated with flash or video, but using html5/javaScript.</p>
    </div>
    <div class="col-1-3">
      <h6>Solution</h6>
      <p>Customizing a page turning script normally used for online catalogs, I was able to give the effect of a door opening to reveal the deal without too much stress on the CPU. Using an html5/javaScript timeline tool, I created the zoom into the house effect.</p>
    </div>
    <div class="col-1-3">
      <h6>Result</h6>
      <p>The director over marketing and the GM over Home Decorators Collection where pleased with the effect and we met most of the daily deals demand goals.</p>
      <a class="siteLink" href="http://www.homedecorators.com/index.php?folder=home_page/20131121" target="_blank">Visit the site →</a>
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
