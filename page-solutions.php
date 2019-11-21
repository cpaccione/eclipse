<?php

/*

Template Name: Solutions

*/

?>

<?php get_header(); ?>

<section class="solutions-hero d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_title('<h1>', '</h1>'); ?>

          <?php the_content(); ?>

          <?php endwhile; else: ?>

          <h1>Oh no!</h1>
          <p>No content is appearing on this page!</p>

        <?php endif; ?>

			</div>
		</div>
	</div>
</section>

<?php if(get_field('background') ): ?>

<section class="home-bg-one" style="background-image: url('<?php the_field('background'); ?>');"></section>

<?php endif; ?>

  <?php if(have_rows('our_solutions_links')): ?>
     <section class="solutions">
        <div class="container">
          <div class="row icon-row">
            <?php while(have_rows('our_solutions_links')): the_row();

              // vars
              $icon_s = get_sub_field('icon');
              $title_s = get_sub_field('title');
              $body_s = get_sub_field('body');
              $link_s = get_sub_field('link');

            ?>
							<div class="col-md-4">
								<div class="wrap">
									<img src="<?php echo $icon_s['url'] ?>" alt="<?php echo['alt']; ?>">
									<div class="copy-wrap">
										<h3><?php echo $title_s; ?></h3>
										<p><?php echo $body_s; ?></p>
										<a class="link-button" href="<?php echo $link_s; ?>">learn more</a>
									</div>
								</div>
              </div>
              
              <?php endwhile; ?>
          </div>
        </div>
     </section>
  <?php endif; ?>

<?php get_footer(); ?>
