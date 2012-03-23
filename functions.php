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
</div> <!-- REMOVE THIS DIV -->

<?php 
}
add_action('headway_entry_open', 'ppm_homepage');
























