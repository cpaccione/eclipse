<?php

/*

Template Name: Solutions

*/

?>

<?php get_header(); ?>

<section class="solutions-hero">
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

  <section class="home-solutions">
    <div class="container">
      <div class="row icon-row">
        <div class="col-sm-4">
          <div class="wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/heart-handshake-icon.svg" alt="Eclispce Global Resources heart handshake icon">
            <div class="copy-wrap">
              <h3>Staffing Solutions</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
              <a class="link-button" href="#">learn more</a>
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
  </section>

<?php get_footer(); ?>
