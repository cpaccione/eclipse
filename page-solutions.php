<?php

/*

Template Name: Solutions

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

<section class="home-bg-one"></section>

  <?php if(have_rows('our_solutions_links')): ?>
     <section class="solutions">
        <div class="container">
          <div class="row icon-row">
        <!-- <div class="col-12"> -->
          <!-- single solutions list -->
          <!-- <ul class="single-solutions-list"> -->
            <?php while(have_rows('our_solutions_links')): the_row();

              // vars
              $icon_s = get_sub_field('icon');
              $title_s = get_sub_field('title');
              $body_s = get_sub_field('body');
              $link_s = get_sub_field('link');

            ?>
              <!-- <li> -->
							<div class="col-md-4">
								<!-- <div class="icon-wrap"> -->

								<!-- </div> -->
								<div class="wrap">
									<img src="<?php echo $icon_s['url'] ?>" alt="<?php echo['alt']; ?>">
									<div class="copy-wrap">
										<h3><?php echo $title_s; ?></h3>
										<p><?php echo $body_s; ?></p>
										<a class="link-button" href="<?php echo $link_s; ?>">learn more</a>
									</div>
								</div>
							</div>
              <!-- </li> -->
            <?php endwhile ?>
          <!-- </ul> -->
        <!-- </div> -->
          </div>
        </div>
     </section>
  <?php endif; ?>

<!--   <section class="solutions">
    <div class="container">
      <div class="row icon-row">
        <div class="col-sm-4">
          <div class="wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/heart-handshake-icon.svg" alt="Eclispce Global Resources heart handshake icon">
            <div class="copy-wrap">
              <h3>Staffing Solutions</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
              <a class="link-button" href="http://localhost/eclipse/staffing-solutions/">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gear-icon.svg" alt="Eclipse Global Resources gear icon">
            <div class="copy-wrap">
              <h3>Service Solutions</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
              <a class="link-button" href="#">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/lightbulb-icon.svg" alt="Eclipse Global Resources lightbulb icon">
            <div class="copy-wrap">
              <h3>Strategic Solutions</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
              <a class="link-button" href="#">learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

<?php get_footer(); ?>
