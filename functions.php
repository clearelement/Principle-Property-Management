<?php

add_action('wp_head', 'load_fonts');

function load_fonts() {?>

        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700|Vollkorn:400italic,400,700' rel='stylesheet' type='text/css'>

<!-- Fluid Header Markup -->
<?php

}

function ppm_fluid_header() { 
?>
    <header class="site-header">
    <div class="fluid-wrapper group">
    	
    	<div class="site-logo group">
	    	<h1>
	    		<a href="http://www.principleproperty.dev/">
	    			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Principle Property Management" title="Return to the Principle Property Management homepage">
	    		</a>
	    	</h1>
	    	<p class="vcard"><span class="tel value">309.686.1122</span></p>
    	</div>
    	<nav class="primary prairie-vista"> <a href="/prairievista">Prairie Vista Apartments</a> </nav>
	    <nav class="primary woodsage"> <a href="/woodsage">Woodsage Apartments</a> </nav>
    </div>
    </header>   
<?php 
}
add_action('headway_before_wrapper', 'ppm_fluid_header'); 



/* Fluid Footer Markup */

function ppm_fluid_footer() { 
?>
	<footer class="site-footer group">
	<div class="fluid-wrapper group">
		<div class="footer-apartments">
			<a href="/prairievista"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/prairie-vista-footer.png" alt="Prairie Vista Luxury Apartments" title="Prairie Vista Luxury Apartments"> </a>
			<a href="/woodsage"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/woodsage-footer.png" alt="Woodsage Apartments" title="Woodsage Apartments"> </a>
		</div>
		<div class="footer-rentals">
			<a href="http://principle.managebuilding.com/">See All of Our <b>Available Rentals</b></a>
		</div>
		<div class="footer-social">
			<p>Connect With Us</p>
			<a href="http://www.facebook.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook-footer.png" alt="Facebook" title="Facebook"> </a>
			<a href="http://plus.google.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/gplus-footer.png" alt="Google Plus" title="Google Plus"> </a>
			<a href="http://www.youtube.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/youtube-footer.png" alt="YouTube" title="YouTube"> </a>
		</div>
		<div class="footer-contact" class="vcard">
			 <div class="adr">
			  <div class="street-address">2401 W Alta Rd</div>
			  <span class="locality">Peoria</span>
			, 
			  <span class="region">IL</span>
			, 
			  <span class="postal-code">61615</span>
			
			 </div>
			 <div class="tel"><span class="type">phone<br></span>309.686.1122<br></div>
			 <div class="tel"><span class="type">fax<br></span>309.688.7001<br></div>
			 <div class="type">email<br><a class="email" href="mailto:info@principleproperty.net">info@principleproperty.net</a></div>
		</div>
		<div class="fine-print">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/eho-logo.png" alt="Equal Housing Opportunity" title="Equal Housing Opportunity" width="50" height="52" />
		<div class="copyright">&copy; <?php echo date('Y'); ?> Principle Property Management</div>
		</div>
	</div>
	</footer>   
<?php 
}
add_action('headway_after_wrapper', 'ppm_fluid_footer'); 

// Homepage Content 
function ppm_homepage() { 
?>
<div class="entry-content"> <!-- REMOVE THIS DIV -->
	<section class="intro group">
		<div class="intro-copy">
			<p class="intro-top">
				More than just another apartment complex, Prairie Vista is a carefully planned community – thoughtfully created with dozens of amenities to make your life easier. 
			</p>

			<p>
				Our professional, friendly, and conscientious on-site management team is comprised of people you will come to know and like. People who are dedicated to ensuring the time you spend at Prairie Vista is one of the best, carefree times of your life.
			</p>

			<p>
				A Prairie Vista apartment offers you much more than an apartment. It’s a home. A home within a wonderful community. Find out for yourself. Come and explore Prairie Vista Luxury Apartments in Peoria.
			</p>
			<a class="button" href="http://principle.managebuilding.com/Resident/PublicPages/Application.aspx">Apply Today</a>
		</div>
		<div class="intro-images">
			<img src="/wp-content/themes/Principle-Property-Management/img/prairie-vista-large.png" alt="Prairie Vista Apartments" title="Prairie Vista Apartments">
			 <div class="adr">
				  <span class="street-address">2401 W Alta Rd</span> <span class="locality">Peoria</span> <span class="region">IL</span> <span class="postal-code">61615</span>
			 </div>
			 <img src="/wp-content/themes/Principle-Property-Management/img/pv-clubhouse.png" alt="Prairie Vista Clubhouse" title="Prairie Vista Clubhouse">
			 <div class="social group">
			  	<div class="block-wrapper group">
				      <h2>Connect with Prairie Vista</h2>
				      <div class="icons block-wrapper group">
					      <a href="http://www.facebook.com/"><img src="/wp-content/themes/Principle-Property-Management/img/facebook.png" alt="Facebook" title="Facebook"></a>
					      <a href="http://plus.google.com/"><img src="/wp-content/themes/Principle-Property-Management/img/gplus.png" alt="Google Plus" title="Google Plus"></a>
					      <a href="http://www.youtube.com/"><img src="/wp-content/themes/Principle-Property-Management/img/youtube.png" alt="YouTube" title="YouTube"></a>
				  	  </div>
			    </div>
			   </div>
		</div>
	</section>

	<section class="apts-include separator">
		<img class="polaroid" src="/wp-content/themes/Principle-Property-Management/img/pv-pool.jpg" alt="Prairie Vista Pool" title="Prairie Vista Pool">
		<img class="polaroid middle" src="/wp-content/themes/Principle-Property-Management/img/pv-hottub.jpg" alt="Prairie Vista Hot Tub" title="Prairie Vista Hot Tub">
		<img class="polaroid" src="/wp-content/themes/Principle-Property-Management/img/pv-workout.jpg" alt="Prairie Vista Workout Room" title="Prairie Vista Workout Room">
		<h1>Our Luxury Apartments Include:</h1>
		<ul class="amenities-list">
			<li>Spacious Living Area</li>
			<li>Private Entrances</li>
			<li>Individually Controlled A/C & Heat</li>
			<li>Deluxe Appliances (incl. microwave)</li>
			<li>Washer & Dryer</li>
			<li>Satellite TV Available</li>
			<li>Free Internet Access</li>
			<li>Ceramic Tile in Kitchen & Bath</li>
			<li>Walk-In Closets</li>
			<li>Ceiling Fans</li>
			<li>Balcony & Patio Areas</li>
		</ul>
	</section>

	<section class="layout separator">
		<h1>Three Great Layouts to Choose From</h1>
		<div class="layout-descrip group">
			<img class="layout-col-1" src="/wp-content/themes/Principle-Property-Management/img/pv-1br.png" alt="Prairie Vista One Bedroom" title="Prairie Vista One Bedroom">
			<h2>One Bedroom</h2>
			<ul class="layout-specs">
				<li>650 sq. ft.</li>
				<li>One Bath</li>
				<li>Living Room 11’x15’</li>
				<li>Dining Area: 7.7’x5’</li>
				<li>Bedroom: 11’x13’</li>
			</ul>
			<ul class="plain-list">
				<li>Monthly Rent-Upper:</li> 
				<li>Monthly Rent-Lower:</li>
			</ul>
			<a class="button" href="http://principle.managebuilding.com/Resident/PublicPages/Application.aspx">Apply Today</a>
		</div>
		<div class="layout-descrip group">
			<img class="layout-col-1" src="/wp-content/themes/Principle-Property-Management/img/pv-2br.png" alt="Prairie Vista Two Bedroom" title="Prairie Vista Two Bedroom">
			<h2>Two Bedroom</h2>
			<ul class="layout-specs">
				<li>1020 sq. ft.</li>
				<li>Two Bath</li>
				<li>Living Room 15’x15’</li>
				<li>Kitchen: 11.5’x9’</li>
				<li>Master Bedroom: 12’x12.5’</li>
				<li>Bedroom: 11'x12.5'</li>
			</ul>
			<ul class="plain-list">
				<li>Monthly Rent-Upper:</li> 
				<li>Monthly Rent-Lower:</li>
			</ul>
			<a class="button" href="http://principle.managebuilding.com/Resident/PublicPages/Application.aspx">Apply Today</a>
		</div>
		<div class="layout-descrip group">
			<img class="layout-col-1" src="/wp-content/themes/Principle-Property-Management/img/pv-loft.png" alt="Prairie Vista Two Bedroom" title="Prairie Vista Two Bedroom">
			<h2>Loft</h2>
			<ul class="layout-specs">
				<li>1280 sq. ft.</li>
				<li>Two Bedroom w/Loft</li>
				<li>Two and 1/2 Bath</li>
				<li>Living Room 14’x18’</li>
				<li>Kitchen: 13’x13.5’</li>
				<li>Master Bedroom: 12’x12.5’</li>
				<li>Bedroom: 11'x12.5'</li>
				<li>Loft: 25'x12.5'</li>
			</ul>
			<ul class="plain-list">
				<li>Monthly Rent:</li> 
			</ul>
			<a class="button" href="http://principle.managebuilding.com/Resident/PublicPages/Application.aspx">Apply Today</a>
		</div>
	</section>

	<section class="amenities separator">
		<h1>Amenities</h1>
		<ul class="amenities-list">
			<li>On-Site Management Staff</li>
			<li>24-Hour Emergency Maintenance</li>
			<li>New Brick Construction</li>
			<li>Private Garages</li>
			<li>Professionally Landscaped</li>
			<li>Pond with Fountain</li>
			<li> Irrigation System</li>
			<li>Trash Removal</li>
			<li>Free High Speed Interne</li>
			<li>All Major GE Appliances</li>
			<li>2” Faux Blind on All Windows</li>
			<li>Snow Removal & Lawn Care</li>
			<li>Monitored Sprinkler System</li>
			<li>Clubhouse</li>
			<li>Social Room</li>
			<li>Fitness Center</li>
			<li>All Major GE Appliances</li>
			<li>Outdoor Heated Pool with Sundeck</li>
			<li>Jacuzzi</li>
			<li>Dunlap School District</li>
			<li>Close to Rock Island Trail</li>
		</ul>
			<a class="button" href="http://principle.managebuilding.com/Resident/PublicPages/Application.aspx">Apply Today</a>
	</section>
</div> <!-- REMOVE THIS DIV -->

<?php 
}
add_action('headway_entry_open', 'ppm_homepage');
























