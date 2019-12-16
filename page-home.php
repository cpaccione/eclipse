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
  			<div class="col-12" data-aos="fade-up">
          <svg class="hero-logo" title="Eclipse Global Resources" alt="Eclipse Global Resources inline SVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-5855 202.579 794.007 182.458"><defs><style>.a{fill:#fff;}.b{fill:url(#a);}</style>
            <linearGradient id="a" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#00c0f2"/><stop offset="0.132" stop-color="#0bc0e2"/><stop offset="0.389" stop-color="#28c0b9"/><stop offset="0.742" stop-color="#56c077"/>
            <stop offset="1" stop-color="#7bc043"/>
            </linearGradient></defs>
            <g transform="translate(-5855.044 202.539)"><g transform="translate(0.044 0.041)"><g transform="translate(74.244 15.069)"><path class="a" d="M125.447,79.755H61.372C63,93.993,73.238,105.414,89.4,105.414c10.382,0,18.392-4.45,21.8-11.569h12.014c-4.45,12.756-17.5,21.062-34.114,21.062-22.841,0-39.008-17.354-39.008-39.6C50.1,53.354,66.267,36,89.108,36c21.358,0,36.339,16.612,36.487,39.157C125.6,76.788,125.6,78.271,125.447,79.755Zm-64.075-8.6h53.1c-1.335-15.129-10.827-25.659-25.659-25.659C72.941,45.493,63,57.062,61.372,71.152Z" transform="translate(-50.1 2.267)"/><path class="a" d="M197.64,87.912h11.569c-3.115,16.019-17.205,27.143-35.152,27.143-22.693,0-39.157-17.354-39.157-39.6C134.9,53.354,151.364,36,174.057,36,192,36,206.242,46.976,209.209,63.143H197.64c-2.373-10.234-11.569-16.909-23.731-16.909-16.909,0-27.884,13.2-27.884,29.219,0,16.167,10.976,29.367,27.884,29.367C186.071,104.821,195.118,98.146,197.64,87.912Z" transform="translate(-9.124 2.267)"/><path class="a" d="M233.124,125.445H222V10.2h10.976V125.445Z" transform="translate(32.963 -10.2)"/>
              <path class="a" d="M270,20.516a7.719,7.719,0,0,1,15.425,0c0,4.45-3.411,7.416-7.861,7.416A7.2,7.2,0,0,1,270,20.516Zm13.052,103.528H272.077V48.994h10.976Z" transform="translate(56.157 -8.799)"/><path class="a" d="M397.678,75.453c0,22.1-17.205,39.6-38.86,39.6-10.976,0-20.32-3.856-27.143-10.531v48.649H320.7V37.928h10.976v8.6C338.5,39.856,347.694,36,358.818,36,380.473,36,397.678,53.5,397.678,75.453Zm-10.976,0c0-16.019-12.607-29.664-29.071-29.664-10.382,0-19.43,4.6-25.808,13.942V91.324c6.378,9.344,15.425,13.942,25.808,13.942C374.1,105.266,386.7,91.62,386.7,75.453Z" transform="translate(80.656 2.267)"/><path class="a" d="M416.182,89.837c2.225,10.234,10.234,16.464,24.77,16.464,12.162,0,20.468-5.191,20.468-13.349,0-6.674-5.34-10.679-13.052-11.866L431.311,78.12c-12.459-1.928-22.248-7.416-22.248-20.172,0-13.5,12.014-22.248,29.961-22.248,15.277,0,31.147,6.674,32.482,23.88H461.272c-1.483-9.789-9.641-14.98-22.248-14.98-11.866,0-19.133,5.191-19.133,12.459,0,5.636,4,10.086,14.832,11.717l14.98,2.67c10.827,1.78,22.4,6.526,22.4,20.765,0,14.535-13.2,23.138-31.444,23.138-19.43,0-32.482-8.6-34.855-25.659h10.382Z" transform="translate(121.777 2.122)"/><path class="a" d="M559.9,79.8l-.593-.3v.3h-63.63c1.632,14.239,11.866,25.659,28.033,25.659,10.382,0,18.392-4.45,21.8-11.569h12.014c-4.45,12.756-17.5,21.062-34.114,21.062-22.841,0-39.008-17.354-39.008-39.6,0-22.1,16.019-39.453,39.008-39.453,21.358,0,36.339,16.612,36.487,39.157A25.315,25.315,0,0,1,559.9,79.8Zm-64.223-8.6h53.1c-1.335-15.129-10.827-25.659-25.659-25.659C507.39,45.541,497.3,57.11,495.672,71.2Z" transform="translate(159.757 2.218)"/></g>
              <path class="b" d="M179.892,110.183a72.3,72.3,0,1,1-.148-39.008h.445a91.137,91.137,0,1,0,.3,39.008Z" transform="translate(-0.044 -0.041)"/></g></g></svg>
          <h2>global resources</h2>
  			</div>
  		</div>
  	</div>
  </section>

  <!-- intro -->

  <section class="intro-images">
    <!-- <div class="container"> -->
      <div class="hero-row">

        <?php if( have_rows('hero_images') ): ?>

          <?php while( have_rows('hero_images') ): the_row();
          
          $image = get_sub_field('circle_hero');
          $class = get_sub_field('circle_class');
          
          ?>

            <div class="circle">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>

          <?php endwhile; ?>

        <?php endif; ?>

      <!-- </div> -->
    </div>
  </section>

  <section class="intro d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wrap">
            <h2><?php the_field('hero_title'); ?></h2>
            <p><?php the_field('hero_subtitle'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if( get_field('solutions_background_image') ): ?>

    <section class="home-bg-one" style="background-image: url('<?php the_field('solutions_background_image'); ?>'); ?>"></section>

  <?php endif; ?>

<div class="home-solutions-background">
  <section class="home-solutions-copy d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wrap">
            <h2><?php the_field('our_solutions_title'); ?></h2>
            <p><?php the_field('our_solutions_subtitle');?></p>
          </div>
        </div>
      </div>
    </div>
  </section>


    <?php if( have_rows('services') ): ?>

      <section class="home-solutions">
        <div class="container">
          <div class="row icon-row">

      <?php while( have_rows('services') ): the_row();

        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $cta = get_sub_field('cta');

        ?>

          <div class="col-md-4">
              <div class="wrap">
                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                <div class="copy-wrap">
                  <h3><?php echo $title; ?></h3>
                  <p><?php echo $subtitle; ?></p>
                  <a class="link-button" href="<?php echo $cta; ?>">learn more</a>
                </div>
              </div>
            </div>

      <?php endwhile; ?>

          </div>
        </div>
      </section>

    <?php endif; ?>

</div>
<!-- <section class="home-bg-two"></section> -->

<?php if( get_field('opportunities_image_one') ): ?>

<section class="home-bg-two" style="background-image: url('<?php the_field('opportunities_image_one'); ?>'); ?>"></section>

<?php endif; ?>

<?php if( get_field('o_title') ): ?>

<section class="home-contact d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h2><?php the_field('o_title'); ?></h2>

        <div class="wrap">
          <?php the_field('o_cta_copy'); ?>
        </div>

        <a class="link-button-two" href="<?php the_field('o_cta'); ?>">view opportunities</a>

      </div>
    </div>
  </div>
</section>

<?php endif; ?>

<?php if( get_field('opportunities_image_two') ): ?>

<section class="home-bg-three" style="background-image: url('<?php the_field('opportunities_image_two'); ?>'); ?>"></section>

<?php endif; ?>

<?php get_footer(); ?>
