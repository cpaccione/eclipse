<?php

/*

Template Name: Single Solutions

*/

?>

<?php get_header(); ?>

<section class="single-solutions-hero">
	<div class="container">
		<div class="row">
			<div class="col-12">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/heart-handshake-icon.svg" alt="Eclispce Global Resources heart handshake icon">
				<?php the_title('<h1>', '</h1>'); ?>
        <p>Contract / Contract-to-Direct / Direct Hire</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
			</div>
		</div>
	</div>
</section>

<section class="solutions-info">

</section>


  <section class="solutions-single-icons">
    <div class="container">
      <div class="row icon-row">
        <div class="col-sm-6">
          <div class="icon-wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/heart-handshake-icon.svg" alt="Eclispce Global Resources heart handshake icon">
          </div>
          <div class="wrap">
            <div class="copy-wrap">
              <h3>Staffing Solutions</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
              <a class="link-button" href="#">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="icon-wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gear-icon.svg" alt="Eclipse Global Resources gear icon">
          </div>
          <div class="wrap">
            <div class="copy-wrap">
              <h3>Service Solutions</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
              <a class="link-button" href="#">learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="solutions-questions">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>have questions?</h2>
          <a class="link-button-two" href="#">contact us today</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
