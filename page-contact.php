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
			<div class="col-12">
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
		</div>
	</div>
</section>


<?php get_footer(); ?>
