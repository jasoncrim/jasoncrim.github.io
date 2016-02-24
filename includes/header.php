<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Jason Crim</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,300,600,800" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  		<link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/simplegrid.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
      <link rel="stylesheet" href="css/style.css">



  <script src="http://code.jquery.com/jquery-2.0.0.js"></script>
  <script src="js/jquery.bxslider.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/main.js"></script>

  <?php
    $file = dirname($_SERVER['PHP_SELF']);
  $server =  $_SERVER['PHP_SELF'];
  ?>
</head>
<body>
  <div class="container">
    <header>
      <div class="grid header">
        <div class="col-1-1">
          <!--<div class="logo">
            <a href=""><img src="images/logo-64px.gif" alt=""></a>
          </div>-->

          <ul class="main-nav">
            <li class="logo" <?php if($server == "/fewd7-localdev/portfolio-2.1.16/index.php") echo 'class="active"'; ?>>
              <a href="/fewd7-localdev/portfolio-2.1.16/index.php"><img src="images/logo-64px.png" alt=""></a>
            </li>
            <span class="sub-nav">
              <li <?php if($server == "/fewd7-localdev/portfolio-2.1.16/about.php" || $file == "/about") echo 'class="active"'; ?>>
                <a href="/fewd7-localdev/portfolio-2.1.16/about.php">about</a>
              </li>
              <li <?php if($server == "/fewd7-localdev/portfolio-2.1.16/portfolio.php" || $file == "/portfolio") echo 'class="active"'; ?>>
                <a href="/fewd7-localdev/portfolio-2.1.16/portfolio.php">portfolio</a>
              </li>
              <li <?php if($server == "/fewd7-localdev/portfolio-2.1.16/top-movies.php") echo 'class="active"'; ?>>
                <a href="top-movies.php">top movies</a>
              </li>
              <li <?php if($server == "/fewd7-localdev/portfolio-2.1.16/contact.php") echo 'class="active"'; ?>>
                <a href="contact.php">contact</a>
              </li>
            </span>
            <li class="icon">
              <a href="javascript:void(0);">&#9776;</a>
            </li>
          </ul>

          <ul class="social-nav">
            <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
            <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
            <!--<li><a href=""><i class="fa fa-dribbble fa-2x"></i></a></li>-->
            <li><a href=""><i class="fa fa-linkedin fa-2x"></i></a></li>
          </ul>

        </div>
      </div><!-- ends .grid.header -->
    </header><!-- ends header -->
