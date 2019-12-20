<?php

/*

Template Name: Contact

*/

?>

<?php get_header(); ?>

<section class="solutions-hero">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_title('<h1>', '</h1>'); ?>
				<p>Have any questions or comments? Please get in touch. We'd love to hear from you!</p>
			</div>
		</div>
	</div>
</section>

<section class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="wrap">
					<?php if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

					the_content();

					endwhile;

				endif;

				?>
				</div>
			</div>
			<div class="col-md-6">
				<div style="height: 400px;" id="map"></div>
				<div class="eclipse-contact-info">
					<h4 style="color: #00c0f2; font-weight: bold; margin-top: 1rem;">Eclipse Global Resources</h4>
					<p>HQ: Chicago, IL</p>
					<p><i class="fas fa-mobile-alt"></i> 773-991-0818</p>
					<p><i class="fas fa-envelope"></i> <a href="mailto:sales@eclipsellc.com" target="_top">sales@eclipsellc.com</a></p>
				</div>

			</div>
		</div>
	</div>
</section>

<script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var chicago = {
			lat: 41.8781722,
			lng: -87.6649034,
			};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {
				zoom: 8,
				center: chicago,
				mapTypeControl: false,
				streetViewControl: false,
				scrollwheel: false,
				styles: [
						{
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#f5f5f5"
							}
							]
						},
						{
							"elementType": "labels.icon",
							"stylers": [
							{
								"visibility": "on"
							}
							]
						},
						{
							"elementType": "labels.text.fill",
							"stylers": [
							{
								"color": "#616161"
							}
							]
						},
						{
							"elementType": "labels.text.stroke",
							"stylers": [
							{
								"color": "#f5f5f5"
							}
							]
						},
						{
							"featureType": "administrative.land_parcel",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "administrative.land_parcel",
							"elementType": "labels.text.fill",
							"stylers": [
							{
								"color": "#bdbdbd"
							}
							]
						},
						{
							"featureType": "administrative.neighborhood",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "poi",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#eeeeee"
							}
							]
						},
						{
							"featureType": "poi",
							"elementType": "labels.text",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "poi",
							"elementType": "labels.text.fill",
							"stylers": [
							{
								"color": "#757575"
							}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#e5e5e5"
							}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "labels.text.fill",
							"stylers": [
							{
								"color": "#9e9e9e"
							}
							]
						},
						{
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#ffffff"
							}
							]
						},
						{
							"featureType": "road",
							"elementType": "labels",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "road.arterial",
							"elementType": "labels.text.fill",
							"stylers": [
							{
								"color": "#757575"
							}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#dadada"
							}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "labels.text.fill",
							"stylers": [
							{
								"color": "#616161"
							}
							]
						},
						{
							"featureType": "road.local",
							"elementType": "labels.text.fill",
							"stylers": [
							{
								"color": "#9e9e9e"
							}
							]
						},
						{
							"featureType": "transit.line",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#e5e5e5"
							}
							]
						},
						{
							"featureType": "transit.station",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#eeeeee"
							}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#c9c9c9"
							}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry.fill",
							"stylers": [
							{
								"color": "#00c0f2"
							}
							]
						},
						{
							"featureType": "water",
							"elementType": "labels.text",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "water",
							"elementType": "labels.text.fill",
							"stylers": [
							{
								"color": "#00c0f2"
							}
							]
						}
						]
				});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: chicago, map: map});
        }
</script>


<?php get_footer(); ?>
