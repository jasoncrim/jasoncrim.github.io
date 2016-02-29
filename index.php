<?php include 'includes/header.php';?>
<div id="content">
    <section id="section" class="hero">
      <div id="face" class="grid face">


      <div class="col-1-1">
        <a href="#">
          <div id="designer" class="designer">
            <div id="designer-desc" class="description">
              <h1>designer</h1>
              <p>UI/UX Designer with a passion for designing beautiful and functional user experiences.</p>
            </div>
          </div><!--end .designer-->
        </a>
        <a href="#">
          <div id="coder" class="coder">
            <div id="coder-desc" class="description">
              <h1> &lt;coder&gt; </h1>
              <p>Front End Developer who focuses on writing clean, elegant and efficient code.</p>
            </div>
          </div><!--end .coder-->
        </a>
        <img id="face-img" class="face-img" src="images/jason-crim-designer-coder.jpg" alt="" >

        <div id="designer-img" class="designer-img"></div>
				<div id="coder-img" class="coder-img"></div>
				<div id="designer-bg" class="designer-bg"></div>
				<div id="coder-bg" class="coder-bg"></div>

      </div><!--ends col-1-1-->
      </div><!--ends face-->
    </section>
    <section class="latest-work">
      <div class="grid header-center">
        <h3 class="">Some of my latest work</h3>
      </div>
      <div class="grid thumbs">
        <div class="col-1-3">
          <div class="portfolio-thumbs">
            <a href="portfolio/project5.php">
              <img src="images/thumbnails/deals2013-thumb.jpg" alt="">
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
            <a href="portfolio/project1.php">
              <img src="images/thumbnails/PIP-thumb.jpg" alt=""><img src="" alt="">
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
            <a href="portfolio/project4.php">
              <img src="images/thumbnails/deals2014-thumb.jpg" alt=""><img src="" alt="">
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

    </div><!--this ens #content-->

<script>
    /*$( document ).ready(function() {

      // Function to fade in image sprites
        	$('.sprite').fadeSprite();

          $('#face').animateHome();
			       $('#face').resizeFace();

    });*/

    $(document).ready(function() {





	// Function to fade in image sprites
  	$('.sprite').fadeSprite();

    //Function for thumbnail hover effect
    $('.thumbs li').hoverThumb();

	// Function to animate when leaving page
	$('.transition, #nav a, #nav-footer a, #thumbs a, #next a, #prev a, #logo, #face a').leavePage();


	// Preload the page with jPreLoader
	$('body').jpreLoader({

		showSplash: true

	}, function() {

		//Show the page once images are loaded

			$('#face').animateHome();
			$('#face').resizeFace();


	});

});

  </script>

<?php include 'includes/footer.php';?>
