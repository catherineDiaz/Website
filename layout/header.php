<!DOCTYPE html>
<html>

	<head profile="http://gmpg.org/xfn/11">
		<meta charset="UTF-8">
		
		<title>
			Women in Computing | CU-Boulder | <?php echo $title; ?>
		</title>
		
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		 <link rel="stylesheet" href="css/dgstyle.css" />

		
	</head>
	
	<body>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
		<script src="javascript/jquery.easing.min.js"></script>
		<script src="javascript/modernizr.custom.53451.js"></script>

		<!-- Script for Sticky Header-->
		<script>
		$(document).ready( function () {
		
			// Check the initial Position of the Sticky Header
			var stickyHeaderTop = $('#navwrapper').offset().top;
			
			
			$(window).scroll(function(){
			
					if( $(window).scrollTop() > stickyHeaderTop ) {
							$('#navwrapper').css({position: 'fixed', top: '0px'});
							$('#stickyalias').css('display', 'block');
					} else {
							$('#navwrapper').css({position: 'static', top: '0px'});
							$('#stickyalias').css('display', 'none');
					}

					
			});
			
		
			  $('a[href*=#]:not([href=#])').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					  var target = $(this.hash);
					  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					  if (target.length) {
						$('html,body').animate({
						  scrollTop: target.offset().top
						}, 1000);
						return false;
					  }
					}
				  });
			  });
		</script>
		<!--End Script for Sticky Header-->
	
		<!--For Facebook Plugin (Extra Scripts)-->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0&amp;wmode=transparent";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<!--End Facebook Plugin (Extra Scripts)-->
	
	
		<div id="container">
			<div id="header">
				<div id="banner">
					<h1>
						<a href="#">
							Women in Computing</a>
					</h1>
					<div id="search" class="white">
						<div id="culinks">
							
							<a href="http://www.colorado.edu/">
								<strong>
									CU:
								</strong>
								Home
							</a>
							&bull; 
							<a href="http://www.colorado.edu/atoz/">
								A to Z
							</a>
							&bull; 
							<a href="http://www.colorado.edu/campusmap">
								Campus Map</a>
						</div>
						<div id="searchform">
							<form action="http://www.colorado.edu/search/custom/searchdirect.cgi" method="post">
								<input type="hidden" name="searchtype" value="SITE URL" />
								<div id="inputwrapper">
									<label for="searchfield">Search</label>
                    				<input type="text" class="text" name="searchstring" value="Search CU-Boulder" onfocus="this.value='';" id="searchfield"/>
								</div>
								<input type="image" src="images/submit.png" value="Submit" size="22,23"  alt="Submit" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="skiplink">
				<a href="#page">
					Skip to Content</a>
			</div>
			<div id="navwrapper">
				<div id="navigation">
					<div class="menu">
						<ul>
							<li>
								<a href="index.php#banner">
									Home</a>
							</li>
							<li>
								<a href="index.php#section2">
									About</a>
							</li>
							<li>
								<a href="index.php#section3">
									Officers</a>
							</li>
							<li>
								<a href="events.php">
									Events</a>
							</li>
							<li>
								<a href="scholarships.php">
									Scholarships</a>
							</li>
							<li>
								<a href="index.php#section4" id="mailingListButton">
									Sign Up</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!--Required to make sticky navigation -->
			<div id="stickyalias"></div>
			
			<!--Gold banner strip beneath the links -->
			<div id="subpage-color" class="featurecolor">
			</div>
			
			<!--Banner image section -->
			<section id="main-image">
			</section>