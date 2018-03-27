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
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
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
