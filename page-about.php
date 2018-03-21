<?php

/*

Template Name: About Page

*/

?>
<?php $counter = 0; ?>

<?php get_header(); ?>

			<header class="about d-md-flex align-items-md-center">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<h1>about</h1>
							<p class="sub-sections">We offer and support contract, contract-to-hire, and direct hire staffing needs.</p>
							<p>Eclipse is a Small-Women owned business with Executive staff providing a combined 25+ years of experience in the wireless and technology industries. Our range includes staffing, services, and vendor management with a focus on IT, Engineering, and Project/Program Management.</p>
							<p>We offer flexible solutions and place significant emphasis on automation to keep our rates and fees in line with the industry (or lower). We understand and agree that each business is unique and will work hard to not only earn, but maintain your business.</p>
						</div>
						<div class="col-md-5 d-md-flex align-items-md-center">
							<img class="mx-auto d-block wob-logo" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/sba_wosb_vertical.svg" alt="SBA Women owned business logo">
						</div>
					</div>
				</div>
			</header>
					<!-- team section start -->
					<div class="meet-the-team">
						<div class="container">

							<div class="row">
								<div class="col-12">
									<h2 class="team-heading">meet the team</h2>
								</div>
							</div>

							<?php if(have_rows('team_repeater')): ?>

				            <?php while(have_rows('team_repeater')): the_row();

											// vars
											$photo_t = get_sub_field('photo');
											$name_t = get_sub_field('name');
											$title_t = get_sub_field('title');
											$about_t = get_sub_field('about');
											$link_t = get_sub_field('modal_name');

				            ?>

									<?php if($counter % 3 === 0) : echo '<div class="row icon-row">'; endif; ?>

										<div class="col-md-4">
											<div class="wrap">
												<img src="<?php echo $photo_t['url'] ?>" alt="<?php echo['alt']; ?>">
												<div class="copy-wrap">
													<h3><?php echo $name_t; ?></h3>
													<h4><?php echo $title_t; ?></h4>
													<p><?php echo $about_t; ?></p>
													<!-- modal button -->
													<a class="link-button" data-toggle="modal" data-target="#<?php echo $link_t; ?>">learn more</a>
												</div>
											</div>
										</div>

										<!-- Modal -->
										<div class="modal fade" id="<?php echo $link_t; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h3 class="modal-title"><?php echo $name_t; ?></h3>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<div class="container">
															<div class="row">
																<div class="col-5">
																	<img src="<?php echo $photo_t['url'] ?>" alt="<?php echo['alt']; ?>">
																</div>
																<div class="col-7">
																	<h4><?php echo $title_t; ?></h4>
																	<p><?php echo $about_t; ?></p>
																</div>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div> <!-- modal end -->
									<?php $counter++; if($counter % 3 == 0) :  echo '</div>'; endif; ?>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>

		</div> <!-- container -->
	</div> <!-- meet the team -->

	<div class="our-partners d-sm-flex align-items-sm-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>our partners</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="image-wrap mx-auto d-flex">
						<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/verizon.svg" alt="Verizon logo" />
					</div>
				</div>
				<div class="col-4">
					<div class="image-wrap mx-auto d-flex">
						<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/samsung.svg" alt="Verizon logo" />
					</div>
				</div>
				<div class="col-4">
					<div class="image-wrap mx-auto d-flex">
						<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/sprint.svg" alt="Verizon logo" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="image-wrap mx-auto d-flex">
						<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/extenet.svg" alt="Verizon logo" />
					</div>
				</div>
				<div class="col-4">
					<div class="image-wrap mx-auto d-flex">
						<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/teleworld.svg" alt="Verizon logo" />
					</div>
				</div>
				<div class="col-4">
					<div class="image-wrap mx-auto d-flex">
						<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/crowncastle.svg" alt="Verizon logo" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="highlights d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>success highlights</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="wrap mx-auto">
									<h3>Successfully staffed and managed 150 engineers, project managers and drive test resources for a Tier I OEM.</h3>
								</div>
							</div>
							<div class="carousel-item">
								<div class="wrap mx-auto">
									<h3>Successfully staffed and managed 150 engineers, project managers and drive test resources for a Tier I OEM.</h3>
								</div>
							</div>
							<div class="carousel-item">
								<div class="wrap mx-auto">
									<h3>Successfully staffed and managed 150 engineers, project managers and drive test resources for a Tier I OEM.</h3>
								</div>
							</div>
						</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
