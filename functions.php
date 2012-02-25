<?php

add_action('wp_head', 'load_fonts');

function load_fonts() {?>

        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700|Vollkorn:400italic,400,700' rel='stylesheet' type='text/css'>

<!-- Fluid Header Markup -->
<?php

}

function ppm_fluid_header() { 
?>
    <header id="site-header">
    <div class="site-header-wrapper group">
    	<nav class="primary"> <a href="/prairievista">Prairie Vista Apartments</a> </nav>
    	<div id="site-logo">
	    	<h1>
	    		<a href="http://www.principleproperty.dev/">
	    			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Principle Property Management" title="Return to the Principle Property Management homepage">
	    		</a>
	    	</h1>
	    	<p class="vcard"><span class="tel value">309.686.1122</span></p>
    	</div>
    	<nav class="primary"> <a href="/woodsage">Woodsage Apartments</a></nav>
    </div>
    </header>   
<?php 
}
add_action('headway_before_wrapper', 'ppm_fluid_header'); 



/* Fluid Footer Markup */

function ppm_fluid_footer() { 
?>
	<footer id="site-footer">
	<div class="site-footer-wrapper">
		<div class="apartment-links">
			<a href="/prairievista"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/prairie-vista-footer.png" alt="Prairie Vista Luxury Apartments" title="Prairie Vista Luxury Apartments"> </a>
			<a href="/woodsage"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/woodsage-footer.png" alt="Woodsage Apartments" title="Woodsage Apartments"> </a>
		</div>
		<div class="rentals-footer">
			<a href="http://principle.managebuilding.com/">See All of Our <b>Available Rentals</b></a>
		</div>
		<div class="social-footer">
			Connect With Us
			<a href="http://www.facebook.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook-footer.png" alt="Facebook" title="Facebook"> </a>
			<a href="http://plus.google.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/gplus-footer.png" alt="Google Plus" title="Google Plus"> </a>
			<a href="http://www.youtube.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/youtube-footer.png" alt="YouTube" title="YouTube"> </a>
		</div>
		<div id="" class="vcard">
			 <div class="adr">
			  <div class="street-address">2401 W Alta Rd</div>
			  <span class="locality">Peoria</span>
			, 
			  <span class="region">IL</span>
			, 
			  <span class="postal-code">61615</span>
			
			 </div>
			 <span class="tel"><span class="type">phone</span>309.686.1122</span>
			 <span class="tel"><span class="type">fax</span>309.688.7001</span>
			 <span class="type">email<a class="email" href="mailto:info@principleproperty.net">info@principleproperty.net</a></span>
		</div>
	</div>
	</footer>   
<?php 
}
add_action('headway_after_wrapper', 'ppm_fluid_footer'); 

