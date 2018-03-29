<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eclipse
 */

get_header(); ?>

	<section class="single-job-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="single-job-wrap">
						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_type() );

								the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
