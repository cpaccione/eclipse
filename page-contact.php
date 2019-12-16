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
				<div style="height: 75%;" id="map"></div>
				<p>Eclipse Global Resources</p>
				<p>HQ: Chicago, IL</p>
			</div>
		</div>
	</div>
</section>

<script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var chicago = {lat: 41.8781722, lng: -87.6649034};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 8, center: chicago});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: chicago, map: map});
        }
</script>


<?php get_footer(); ?>
