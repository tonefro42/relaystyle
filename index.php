<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="utf-8">
	<title>Relay portal style guide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#000000">
	<!-- Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">
	<!-- Style Guide Boilerplate Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/sg-style.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

	<!-- Replace below stylesheet with your own stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/spinner.css">

	<!-- prism Syntax Highlighting Styles -->
	<link rel="stylesheet" href="vendor/prism/prism.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
		.back-to-top {
			bottom: -80px;
		}
	</style>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script>
		$( document ).ready(
			function () {
				var offset = 250;
				var duration = 300;
				$( '.back-to-top' ).hide();
				$( '.back-to-top' ).css( 'bottom', '15px' )
				$( window ).scroll( function () {
					if ( $( this ).scrollTop() > offset ) {
						$( '.back-to-top' ).fadeIn( duration );
					} else {
						$( '.back-to-top' ).fadeOut( duration );
					}
				} );
				$( '.back-to-top' ).click( function ( event ) {
					event.preventDefault();
					$( 'html, body' ).animate( {
						scrollTop: 0
					}, duration );
					return false;
				} )
				overlayOut();
			}
		)
	</script>

</head>

<body>
	<a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

	<div id="top" class="sg-header" role="banner">
		<div class="sg-container">
			<span class="sg-logo-initials">SG</span>
			<img src="images/logo/0.5x/Relay-Rev@0.5x.png" width="60" height="auto">




			<button type="button" class="sg-nav-toggle">Menu</button>
		</div>
	</div>
	<!--/.sg-header-->

	<div class="sg-wrapper sg-clearfix">
		<nav id="nav" class="sg-sidebar" role="navigation">
			<h2 class="sg-h2 sg-subnav-title">About</h2>
			<ul class="sg-nav-group">
				<li>
					<a href="#sg-about">Getting Started</a>
				</li>
				<li>
					<a href="#sg-colors">Colors</a>
				</li>
				<li>
					<a href="#sg-fontStacks">Fonts</a>
				</li>
			</ul>

			<?php listFilesInFolder('markup'); ?>
		</nav>
		<!--/.sg-sidebar-->

		<div id="main" class="sg-main" role="main">
			<div class="sg-container">
				<div class="sg-info">
					<div class="sg-about sg-section">
						<h1 id="sg-about" class="sg-h1">Relay Portal Styleguide</h1>
						<p> </p>
					</div>
					<section class="sg-colors sg-section">
						<?php renderFilesInFolder('markup/colors'); ?>
					</section>
					<div class="sg-content-left">
						<?php renderFilesInFolder('markup/typography'); ?>
						<?php renderFilesInFolder('markup/components'); ?>
					</div>
					<!--/.sg-font-stacks-->
					<div class="sg-content-right">
						<?php renderFilesInFolder('markup/logos'); ?>
						<?php renderFilesInFolder('markup/buttons'); ?>
						<?php renderFilesInFolder('markup/icons'); ?>
					</div>
				</div>
				<!--/.sg-info-->
			</div>
			<!--/.sg-container-->
		</div>
		<!--/.sg-main-->
	</div>
	<div class="overlay"></div>
	<a class="back-to-top" style="display: inline;" href="#">Back to Top</a>
	<!--/.sg-wrapper-->
	<!--[if gt IE 8]><!-->
	<script src="vendor/prism/prism.js"></script>
	<!--<![endif]-->
	<script src="js/sg-scripts.js"></script>
</body>

</html>