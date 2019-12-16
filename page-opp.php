<?php

/*

Template Name: Opportunities

*/

?>

<?php get_header(); ?>

<section class="solutions-hero d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-12" >
                <?php the_title('<h1>', '</h1>'); ?>
                <div><?php the_field('hero_copy'); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="opp-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_field('job_search_editor'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
