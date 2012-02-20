<?php
function ppm_fluid_header() { 
?>
    <header id="site-header">
    <div class="site-header-wrapper">
    	<nav class="primary"> <a href="/prairievista">Prairie Vista Apartments</a> </nav>
    	<div id="site-logo">
	    	<h1>
	    		<a href="http://www.principleproperty.dev/">
	    			<img src="/wp-content/themes/Principle-Property-Management/img/logo.png" alt="Principle Property Management" title="Return to the Principle Property Management homepage">
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

?>