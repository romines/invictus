<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Invictus Woods | <?php if ( $title == 'Home') {
			echo "Central Illinois Sober Living/Extended Care";
		} else echo $title; ?></title>



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">

    <!-- Custom styles for this template -->
    <link href="style/style.css" rel="stylesheet">

	<link href="style/jquery.fancybox.css" rel="stylesheet">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-58618211-1', 'auto');
	  ga('send', 'pageview');

	</script>

  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

		  <a href="/" id="brandLogo" class="navbar-brand"><img alt="Invictus Woods Logo" id="brandImg" src="images/invictus_woods_logo.svg" onerror="this.onerror=null; this.src='images/invictus_woods_logo.png'"></a>

        </div>
		<div id="navbar" class="collapse navbar-collapse">
          <ul id="theNav" class="nav navbar-nav">
            <li id="philosophy"><a href="philosophy.php">Philsophy</a></li>
            <li id="services"><a href="services.php">What We Offer</a></li>
			<li id="facility"><a href="facility.php">Our Facility</a></li>
			<li id="admission"><a href="admission.php">Admission</a></li>
			<li id="about"><a href="about.php">About Us</a></li>
			<li id="donations"><a href="donations.php">Donations</a></li>
			<li id="resources"><a href="resources.php">Resources</a></li>
			<li id="contact"><a href="contact.php">Contact Us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
