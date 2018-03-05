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
				<?php

				$page_icon = get_field('page_icon');

				if( !empty($page_icon) ): ?>

					<img src="<?php echo $page_icon['url']; ?>" alt="<?php echo $page_icon['alt']; ?>">

				<?php endif; ?>

				<?php the_title('<h1>', '</h1>'); ?>
				<div class="wrap">
					<p class="sub-sections"><?php the_field('solutions_sub_sections'); ?></p>
					<p><?php the_field('solutions_section_intro'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="solutions-info">
	<div class="container">

		<?php if( have_rows('solutions_repeater_body') ):  ?>

			<?php while( have_rows('solutions_repeater_body') ): the_row();

				//vars
				$title = get_sub_field('title');
				$body = get_sub_field('body');
				$image = get_sub_field('image');

				?>

				<section class="header_solutions">
					<div class="row">
						<div class="col-12">
							<div class="wrap">
								<h3><span class="h_solutions_icons"><i class="fas fa-check"></i></span> <?php echo $title; ?></h3>
							</div>
						</div>
					</div>
				</section>

				<section class="body_solutions">
						<div class="row">
								<div class="col-md-8">
									<div class="wrap">
										<p><?php echo $body; ?></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wrap">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
									</div>
								</div>
						</div>
				</section>

			<?php endwhile; ?>

		<?php endif; ?>
	</div>
</section>

					<?php if(have_rows('solutions_repeater_links')): ?>
  <section class="solutions-single-icons">
    <div class="container">
      <div class="row icon-row">
				<div class="col-12">
					<!-- single solutions list -->
					<ul class="single-solutions-list">
						<?php while(have_rows('solutions_repeater_links')): the_row();

							// vars
							$icon_s = get_sub_field('icon');
							$title_s = get_sub_field('title');
							$body_s = get_sub_field('body');
							$link_s = get_sub_field('link');


						?>

						<li>
							<div class="icon-wrap">
								<img src="<?php echo $icon_s['url'] ?>" alt="<?php echo['alt']; ?>">
							</div>
							<div class="wrap">
								<div class="copy-wrap">
									<h3><?php echo $title_s; ?></h3>
									<p><?php echo $body_s; ?></p>
									<a class="link-button" href="<?php echo $link_s; ?>">learn more</a>
								</div>
							</div>
						</li>
					<?php endwhile ?>

					</ul>
				</div>
      </div>
    </div>
  </section>
					<?php endif; ?>


  <section class="solutions-questions">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>have questions?</h2>
          <a class="link-button-two" href="<?php the_field('questions_link'); ?>">contact us today</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
