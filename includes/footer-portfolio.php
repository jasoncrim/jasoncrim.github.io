<footer>
   <div class="grid footer">
    <div class="col-1-1">
      <span class="copywright">&copy; 2016 Jason Crim</span>
      <ul class="footer-nav">
        <li><a href="/fewd7/about.php">about</a></li>
        <li><a href="/fewd7/portfolio.php">portfolio</a></li>
        <li><a href="/fewd7/top-movies.php">top movies</a></li>
        <li><a href="/fewd7/contact.php">contact</a></li>
      </ul>
    </div>
  </div><!-- ends .grid.footer -->
</footer><!-- ends footer -->
</div><!-- ends container -->
<script>
$( document ).ready(function() {

  $( ".main-nav .icon a" ).click(function() {
     $( ".main-nav" ).toggleClass("responsive");
  });

  $('.portfolio-thumbs').hoverThumb();


});

</script>

</body>
</html>
