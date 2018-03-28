<?php

/*

Template Name: Opportunities

*/

?>

<?php get_header(); ?>

<section class="solutions-hero d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_title('<h1>', '</h1>'); ?>
                <h4>We'd love to hear from you!</h4>
				<p>When you apply for a job opening with Eclipse, you’re getting the attention you deserve. Whether or not you’re chosen for the opening, we will continue to work with you to find a spot for you!</p>
                <h4>Don't see the right opening for you?</h4>
                <p>Send us your resume and we will be in touch! <a href="#">Contact Us Today</a></p>
			</div>
		</div>
	</div>
</section>

<section class="opp-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
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
</section>


<?php get_footer(); ?>
