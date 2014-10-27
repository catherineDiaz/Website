<?php 
        $title = "Home";
		include 'layout/header.php'; 
?>

<!-- Begin Events section with google calendar and facebook iframes -->
			<section id="section1" class="padded">
				<h2 class="title">EVENTS</h2>
				<div class="center">
				
					<!--Calendar-->
					<div class="block-iframe">
						<iframe src="http://www.google.com/calendar/embed?src=colorado.edu_fpvl2nes71ol6lo82jrd7uhn9o%40group.calendar.google.com&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;ctz=America%2FDenver&amp;wmode=transparent" style="border: 0" width="600" height="400" frameborder="0" scrolling="no"></iframe><br />
					</div>
			
					<!--Facebook-->
					<div class="block-iframe">
						<div class="fb-like-box" data-href="https://www.facebook.com/CUWomenInComputing" data-width="600" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>			
						</div>
					</div>
			</section>
			<!--End Events Section-->
	
			<!--Begin About Section-->
			<section id="section2" class="colored padded">
				<h2 class="title">ABOUT</h2>
				<div id="about-div" class="center">
					<div class="image-padding">
						<img src="images/homepage/wic-img.jpg">
					</div>
					<div class="about-text">
						<p>
						<span class="bold">CU Women in Computing (CUWIC)</span> is the <span class="bold">ACM-W</span> chapter within the Computer 
						Science Department at the University of Colorado at Boulder that is 
						dedicated to supporting women and diversity in computing.
						<p>We encourage
							interaction from all who are interested in issues regarding women and
							diversity in computing to create a forum in which to share information
						   about career, academic, and social opportunities.</p>
						<p>We are mainly
							funded by the department of Computer Science. 
						</p>
					</div>
				</div>
			</section>
			<!--End About Section -->
	
			<!--Begin Officers Section-->
			
			<section id="section3" class="padded">
			<h2 class="title">OFFICERS</h2>
				<section id="dg-container" class="dg-container">
					<div class="dg-wrapper">
						<span><img src="images/officers/heather.jpg" alt="image01">
							<div class="staff-info">
								<h3>HEATHER DYKSTRA</h3>
								<h4>CHAIR</h4>
								<p class="email">E-Mail: <a href="#">heather.dykstra@colorado.edu</a></p>
								<p class="staff-description">Heather is an undergraduate at CU Boulder, getting a BS in Computer Science, with a focus in Software Engineering. She will be graduating Spring 2015 and is excited to have a wonderful last year at CU. She has been working as the Chair of CUWIC since Fall 2013, and looks forward to working with everyone this year. </p>
	
							</div> 
						</span>
						<span><img src="images/officers/annie.jpg" alt="image02">
							<div class="staff-info">
								<h3>ANNIE KELLY</h3>
								<h4>SECRETARY</h4>
								<p class="email">E-Mail: <a href="#">annie.kelly@colorado.edu</a></p>
								<p class="staff-description">Annie is an undergraduate working towards a BS in Computer Science on the Software Engineering track.  She is new to CUWIC this year, but is extremely excited to work with the group this year. </p>
							</div>  
						</span>
						<span><img src="images/officers/lauren.jpg" alt="image02">
							<div class="staff-info">
								<h3>LAUREN</h3>
								<h4>HUMAN</h4>
								<p class="email">E-Mail: <a href="#">fredpenner@dayrep.com</a></p>
								<p class="staff-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
							</div>  
						</span>
						<span><img src="images/officers/brooke.jpg" alt="image02">
						<div class="staff-info">
								<h3>BROOKE ROBINSON</h3>
								<h4>UNDERGRADUATE MEMBERSHIP LEADER</h4>
								<p class="email">E-Mail: <a href="#">brooke.robinson@colorado.edu</a></p>
								<p class="staff-description">Brooke is a sophomore undergraduate BS Computer Science student focusing on Human Centered Computing. She is currently a Learning Assistant for the Computer Science department and is also in Army ROTC. This is her first year on the committee for WIC but is planning on setting up mentorship opportunities and getting people excited about diversity for computer disciplines. </p>
						</div> 
						</span>
						<span><img src="images/officers/officer2.jpg" alt="image02">
						<div class="staff-info">
									<h3>FILLER</h3>
									<h4>ROLE</h4>
									<p class="email">E-Mail: <a href="#">EMAIL</a></p>
									<p class="staff-description">DESCRIPTION</p>
								</div>  
						</span>
					</div>
					<nav>	
						<span class="dg-prev">&lt;</span>
						<span class="dg-next">&gt;</span>
					</nav>
				</section>
			</section>
			
			<!--End Officers Section-->
	
			<!--Begin Sign Up Section -->
			<section id="section4" class="colored padded center">
					<h2 class="title">SIGN UP</h2>
					<h3>Receive updates on our future events and meetings!</h3>
		
					<form action="MAILTO:listproc@lists.Colorado.EDU" method="post" enctype="text/plain">
					E-mail:<br>
					<input type="text" name="mail" size="50"><br>
					Comment:<br>
					<input type="text" name="message" value="subscribe cuwic FIRSTNAME LASTNAME" size="50"><br><br>
					<input type="submit" value="Sign Up">
					<input type="reset" value="Reset">
					</form>

			</section>
			<!-- End Sign Up Section-->
			
<?php include 'layout/footer.php'; ?>