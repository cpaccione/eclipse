<?php

/*

Template Name: Eclipse Home

*/


/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eclipse
 */
 ?>

<?php get_header(); ?>

  <!-- home hero -->
  <section class="home-hero d-flex align-items-center">
  	<div class="container">
  		<div class="row">
  			<div class="col-12">
  				<img class="hero-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hero-logo.svg" alt="Eclipse Global Resources">
  				<h2>global resources</h2>
  			</div>
  		</div>
  	</div>
  </section>

  <!-- intro -->

  <section class="intro-images">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul>
            <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/circle-home-one.png" alt="Eclipse Global Resources"></li>
            <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/circle-home-two.png" alt="Eclipse Global Resources"></li>
            <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/circle-home-three.png" alt="Eclipse Global Resources"></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="intro d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wrap">
            <h2>headline</h2>
            <p>With a combined 25+ years of experience in the wireless and technology industries, our range includes staffing, services, and vendor management with a focus on IT, Engineering, and Project/Program Management.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="home-bg-one"></section>

<div class="home-solutions-background">
  <section class="home-solutions-copy d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>our solutions</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="home-solutions">
    <div class="container">
      <div class="row icon-row">
        <div class="col-sm-4">
          <div class="wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/heart-handshake-icon.svg" alt="Eclispce Global Resources heart handshake icon">
            <h3>Staffing Solutions</h3>
            <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gear-icon.svg" alt="Eclipse Global Resources gear icon">
            <h3>Service Solutions</h3>
            <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/lightbulb-icon.svg" alt="Eclipse Global Resources lightbulb icon">
            <h3>Strategic Solutions</h3>
            <p>Consectetur adipiscing elit, sed do eiusmod tempor lorem ipsum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<section class="home-bg-two"></section>

<section class="home-contact d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>ready to work with us?</h2>
        <p>Let's get started on building great things. Browse our list of current opening or <a href="#">contact us today!</a></p>
        <a href="#">view opportunities</a>
      </div>
    </div>
  </div>
</section>

<section class="home-bg-three"></section>

<?php get_footer(); ?>
