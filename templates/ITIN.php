<?php /*Template Name: ITIN */ get_header(); ?>
        <section class="sub-banner bg-property">

            <div class="container">
                <div class="flex-area  align-item-center">
                    <div class="hero-banner-heading">
						<?php if ( $banner_title = get_field( 'banner_title' ) ) : ?>
                        <h1 class="itc400"><?php echo  $banner_title ?></h1>
						<?php endif; ?>

                    </div>

                </div>
            </div>

        </section>
        <section class="Taxpayer-Identification-sec">
            <div class="container">
                <div class="Taxpayer-Identification-heading">
					<?php if ( $individual_taxpayer_heading = get_field( 'individual_taxpayer_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $individual_taxpayer_heading ?></h2>
					<?php endif; ?>
                </div>
                <div class="flex-area align-item-center justify-content-sb">
                    <div class="coll-45">
                        <div class="Taxpayer-Identification-img">
							<?php if ( $individual_taxpayer_image = get_field( 'individual_taxpayer_image' ) ) : ?>
                            <img src="<?php echo  $individual_taxpayer_image ?>" alt="image">
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="coll-50">
                        <div class="Taxpayer-Identification-content">
							<?php if( have_rows('individual_taxpayer_repeater') ):  while ( have_rows('individual_taxpayer_repeater') ) : the_row(); ?>
                            <p>
                                <?php the_sub_field('individual_taxpayer_para'); ?>
                            </p>
							<?php endwhile; endif; ?>
                         

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="certifying-acceptance">
            <div class="container">
                <div class="flex-area align-item-center justify-content-sb">

                    <div class="coll-50">
                        <div class="ahead-content">
							<?php if ( $certifying_acceptance_heading = get_field( 'certifying_acceptance_heading' ) ) : ?>
                            <h2 class="itc400"><?php echo  $certifying_acceptance_heading ?></h2>
							<?php endif; ?>
							<?php if ( $certifying_acceptance_para = get_field( 'certifying_acceptance_para' ) ) : ?>
                            <p>
                                <?php echo  $certifying_acceptance_para ?>
                            </p>
							<?php endif; ?>
                           
                        </div>
                    </div>
                    <div class="coll-45">
                        <div class="legal-img">
							<?php if ( $certifying_acceptance_image = get_field( 'certifying_acceptance_image' ) ) : ?>
                            <img src="<?php echo  $certifying_acceptance_image ?>" alt="image">
							<?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>




        <?php get_footer(); ?>