<?php get_header(); ?>

<!-- Add parallax back in -->
<!-- Convert the contact form into a PHP Partial that is retrieved -->

<style>
       #map {
        width: 100%;
        height: 100%;
       }
    </style>

	<div id="page" class="contact cf">
		
		<!-- MOTION PROJECTS -->
		<section class="parallax">
			<aside>
				<div class="content">
					<h3>How to get in touch:</h3>
					<p>We take alot of pride in our work and want to help you take pride in your work. We would love to talk to you and find out if maybe we can work together. Just like most pharmacudical drugs, Skymouse is not for everyone.</p>
					<p>We would love to give you a number to call, but we have to make sure we can help everyone and going through email to start helps us do that. Send us an email and we will do our best to get back to you as soon as we can.</p>
				</div>
				
			</aside>
		<div id="map"></div>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 12,
                    scrollwheel: false,
        			scaleControl: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(39.921058, -86.073125), // Skymse HQ

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"elementType":"labels","stylers":[{"visibility":"off"},{"color":"#f49f53"}]},{"featureType":"landscape","stylers":[{"color":"#f9ddc5"},{"lightness":-7}]},{"featureType":"road","stylers":[{"color":"#813033"},{"lightness":43}]},{"featureType":"poi.business","stylers":[{"color":"#645c20"},{"lightness":38}]},{"featureType":"water","stylers":[{"color":"#1994bf"},{"saturation":-69},{"gamma":0.99},{"lightness":43}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#f19f53"},{"weight":1.3},{"visibility":"on"},{"lightness":16}]},{"featureType":"poi.business"},{"featureType":"poi.park","stylers":[{"color":"#645c20"},{"lightness":39}]},{"featureType":"poi.school","stylers":[{"color":"#a95521"},{"lightness":35}]},{},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#813033"},{"lightness":38},{"visibility":"off"}]},{},{},{},{},{},{},{},{},{},{},{},{"elementType":"labels"},{"featureType":"poi.sports_complex","stylers":[{"color":"#9e5916"},{"lightness":32}]},{},{"featureType":"poi.government","stylers":[{"color":"#9e5916"},{"lightness":46}]},{"featureType":"transit.station","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","stylers":[{"color":"#813033"},{"lightness":22}]},{"featureType":"transit","stylers":[{"lightness":38}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#f19f53"},{"lightness":-10}]},{},{},{}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(39.921058, -86.073125),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ1_opw7Tn6FXMt_rtFpIM5nRQAWxo1Mo&callback=initMap">
</script>

		</section>

		<?php get_template_part('library/partials','google-maps'); ?>

		<section id="proposal" class="cf">

				<!-- PARALLAX Front -->
				<!-- <div class="cheese-left-focused px-fore"></div>
				<div class="cheese-left-blur px-base"></div>
				<div class="cheese-right-focused px-fore"></div>
				<div class="cheese-right-blur px-base"></div> -->
				
				<aside>
					<p>If you have a project you’d like to talk about or want to get some ideas about how we can help you, 
					fill out this fun little form and we will get back to you as soon as we can!</p>
					<p>Here are some quick links of stuff to do around the site!</p>
					<img alt="Ready For lift-off!" src="<?php echo get_template_directory_uri(); ?>/library/images/blastoff-rocket.png">

					<a class="blue-btn-2" title="Check Out Our Tutorials!" href="/index.php/tutorials">Tutorials</a>
					<a class="blue-btn-2" title="Read Something on Our Blog!">Blog</a>
				</aside>

				<aside>
					<h3>What's Your Cheese?</h3>
					<form>
						<label>First Name</label>
						<input type="text" name="First Name" placeholder="First Name" required="required">
						<label>Last Name</label>
						<input type="text" name="Last Name" placeholder="Last Name" required="required">
						<label>Email Address</label>
						<input type="email" name="Email Address" placeholder="Email Address" required="required">
						<label>Tell us about yourself?</label>
						<textarea name="Your Message Here" placeholder="What's going on?"></textarea>
						<label>Subscribe to our Newsletter!</label>
						<radio></radio>

						<button name="submit" type="submit" value="submit">
							<img src="<?php echo get_template_directory_uri();?>/library/images/sky-button.svg" alt="Let's Get Started!">
						</button>

					</form>
				</aside>
			</section>
		
	</div>

<?php get_footer(); ?>