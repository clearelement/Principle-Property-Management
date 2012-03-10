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
    	
    	<div id="site-logo" class="group">
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
	<footer id="site-footer" class="group">
	<div id="site-footer-wrapper" class="group">
		<div id="footer-apartments">
			<a href="/prairievista"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/prairie-vista-footer.png" alt="Prairie Vista Luxury Apartments" title="Prairie Vista Luxury Apartments"> </a>
			<a href="/woodsage"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/woodsage-footer.png" alt="Woodsage Apartments" title="Woodsage Apartments"> </a>
		</div>
		<div id="footer-rentals">
			<a href="http://principle.managebuilding.com/">See All of Our <b>Available Rentals</b></a>
		</div>
		<div id="footer-social">
			<p>Connect With Us</p>
			<a href="http://www.facebook.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook-footer.png" alt="Facebook" title="Facebook"> </a>
			<a href="http://plus.google.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/gplus-footer.png" alt="Google Plus" title="Google Plus"> </a>
			<a href="http://www.youtube.com"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/youtube-footer.png" alt="YouTube" title="YouTube"> </a>
		</div>
		<div id="footer-contact" class="vcard">
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
		<div id="fine-print">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/eho-logo.png" alt="Equal Housing Opportunity" title="Equal Housing Opportunity" width="50" height="52" />
		<div id="copyright">&copy; <?php echo date('Y'); ?> Principle Property Management</div>
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
    <section id="intro" class="group">
	  <div class="intro-copy">
	    <h1>Connecting Peoria With <b>Quality Rental Homes and Apartments</b></h1>
	    <p>Principle Property Management offers a great selection of properties and quality service for tenants. 
	    	Our technology makes it convenient for tenants to contact us. Automatic bill pay makes it easy to set up and pay rent.
	    </p>
	    <a class="button" href="http://principle.managebuilding.com/">Available Rentals</a>  
	  </div>
	  <div class="intro-images">
	    <img src="/wp-content/themes/Principle-Property-Management/img/home-photo.png" alt="Rental Home" title="Rental Home">
	    <div class="apartments">
	      <a href="/prairie-vista"><img src="/wp-content/themes/Principle-Property-Management/img/prairie-vista-intro.png" alt="Prairie Vista Luxury Apartments" title="Prairie Vista Luxury Apartments"></a>
	      <a href="/woodsage"><img src="/wp-content/themes/Principle-Property-Management/img/woodsage-intro.png" alt="Woodsage Apartments" title="Woodsage Apartments"></a>
	    </div>
	  </div>
	</section>
  <section class="social group">
      <h2>Connect with Principle Property</h2>
      <a href="http://www.facebook.com/"><img src="/wp-content/themes/Principle-Property-Management/img/facebook.png" alt="Facebook" title="Facebook"></a>
      <a href="http://plus.google.com/"><img src="/wp-content/themes/Principle-Property-Management/img/gplus.png" alt="Google Plus" title="Google Plus"></a>
      <a href="http://www.youtube.com/"><img src="/wp-content/themes/Principle-Property-Management/img/youtube.png" alt="YouTube" title="YouTube"></a>
   </section>
   <section id="leasing">
   		<h1>Our Leasing Process</h1>
   		<ol class="group">
   			<li><b>Apply Online</b> <a href="http://principle.managebuilding.com/Resident/PublicPages/Application.aspx">Complete our application.</a> We look for your income to be 3X your rent.</li>
   			<li><b>Schedule a Showing</b> We will contact you to schedule a showing if you meet the income requirements. We may require that you provide your last 2 pay stubs.</li>
   			<li><b>View the Property</b> We’ll show you around the property and answer any questions you have.</li>
   			<li><b>Process Your Application</b> We send you an email to get your consent to run a credit check. The results are delivered as soon as you finish the questionaire.</li>
   			<li><b>Hold the Property</b> If the background check and credit requirements are met, you will be able to hold the property with a security deposit.</li>
   			<li><b>Lease Signing</b> We sign a lease, give you a folder with all necessary rental information, and hand you the keys once we receive the 1st month’s rent.</li>
		</ol>
		<a class="button" href="http://principle.managebuilding.com/Resident/PublicPages/Application.aspx">Apply Today</a>
   </section>
</div> <!-- REMOVE THIS DIV -->

<?php 
}
add_action('headway_entry_open', 'ppm_homepage');
























