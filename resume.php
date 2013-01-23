<?php
/*
Template Name: Resume
*/
?>
<?php get_header(); ?>
<body><!-- index.php -->
	<div id="cont"><!-- I think that this is useless -->
		<?php get_sidebar(); ?>
		<?php //if(have_posts()): ?>
			<?php //while (have_posts()): the_post();?>
				<section id="content" class="resume">
					<div class="section">
						<div class="right">
							<div class="heading">
								<h3 class="company">AD:60 - DUMBO, NY</h3>
								<h3 class="date">Sept. '12 - Present</h3>
								<h3 class="position">Junior Web Developer</h3>
							</div>
							<p class="description">Primarily worked maintaining <a href="http://mybanktracker.com">mybanktracker.com</a>, a bank news and reviews website, implementing new features and layouts using HTML, jQuery, Sass andCakePHP. Also involved in coding HTML newsletters and features for outside clients.</p>
						</div>
					</div>
					<div class="section">
						<div class="right">
							<div class="heading">
								<h3 class="company">(UN) Common Visions - Queens, NY</h3>
								<h3 class="date">March '12 - May '12</h3>
								<h3 class="position">Assistant Organizer</h3>
							</div>
							<p class="description">Coordinated between professors and graphic design students to participate in the first exhibition in which the students of the Arts MFA program presented their work along side graduating graphic design majors.</p>
						</div>
					</div>
					<div class="section">
						<div class="right">
							<div class="heading">
								<h3 class="company">Control Electropolishing Corp.</h3>
								<h3 class="date">Jul. '11 - Sept. '11</h3>
								<h3 class="position">Freelance Web Designer & Developer</h3>
							</div>
							<p class="description">Worked along side the Senior front-end developer and the in house Graphic Designer creating websites for brands from the ground up. Implemented various interactive features through the use of the latest techniques, including CSS3, HTML5, and Jquery.</p>
						</div>
					</div>
					<div class="section">
						<div class="right">
							<div class="heading">
								<h3 class="company">OPT Central - Manhattan, NY</h3>
								<h3 class="date">March '12 - May '12</h3>
								<h3 class="position">Junior Web Developer</h3>
							</div>
							<p class="description">Worked along side the Senior front-end developer and the in house Graphic Designer creating websites for brands from the ground up. Implemented various interactive features through the use of the latest techniques, including CSS3, HTML5, and Jquery.</p>
						</div>
					</div>
					<div class="section">
						<div class="right">
							<div class="heading">
								<h3 class="company">Total Aquariums - Lynbrook, NY</h3>
								<h3 class="date">Jul '07 - Nov. '08</h3>
								<h3 class="position">Assistant Manager</h3>
							</div>
							<p class="description">Primarily worked maintaining a news and reviews website, implementing new features and layouts using HTML, jQuery, Sass andCakePHP. Also involved in coding HTML newsletters and features for outside clients.</p>
						</div>
					</div>
					<div class="section">
						<div class="left">
							<h2>Languages</h2>
						</div>
						<div class="right">
							<ul>
								<li>Fluent in Spanish</li>
								<li>Proficient in Italian</li>
							</ul>
						</div>
					</div>
					<div class="section">
						<div class="left">
							<h2>Education</h2>
						</div>
						<div class="right">
							<ul>
								<li>Queens College, City College of New York</li>
								<li>Bachelor of Science in Graphic Design</li>
								<li>Minor: Business and Liberal Arts Honors Program</li>
								<li>September 2008 - June 2012</li>
							</ul>
						</div>
					</div>
					<div class="section">
						<div class="left">
							<h2>Skills</h2>
						</div>
						<div class="right">
							<ul>
								<li>Queens College, City College of New York</li>
								<li>Bachelor of Science in Graphic Design</li>
								<li>Minor: Business and Liberal Arts Honors Program</li>
								<li>September 2008 - June 2012</li>
							</ul>
						</div>
					</div>
				</section>
			<?php //endwhile; ?>
		<?php //endif; ?>
	</div>
<?php get_footer(); ?>