<?php /*Template Name: Estate */ get_header(); ?>
        <section class="sub-banner bg-property">

            <div class="container">
                <div class="flex-area  align-item-center">
                    <div class="hero-banner-heading">
						<?php if ( $banner_heading = get_field( 'banner_heading' ) ) : ?>
                        <h1 class="itc400"><?php echo  $banner_heading ?></h1>
<?php endif; ?>
                    </div>

                </div>
            </div>

        </section>
        <section class="probate-sec">
            <div class="container">
                <div class="probate-heading">
					<?php if ( $probate_para = get_field( 'probate_para' ) ) : ?>
                    <p><?php echo  $probate_para ?></p>
					<?php endif; ?>
                </div>
                <div class="flex-area align-item-center justify-content-sb">
                    <div class="coll-50">
                        <div class="probate-img">
							<?php if ( $probate_image = get_field( 'probate_image' ) ) : ?>
                            <img src="<?php echo  $probate_image ?>" alt="image">
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="coll-45">
                        <div class="Taxpayer-Identification-content">
							<?php if( have_rows('probate_para_repeater') ):  while ( have_rows('probate_para_repeater') ) : the_row(); ?>
                            <p>
                                <?php the_sub_field('probate_inner_para'); ?>
                            </p>
							<?php endwhile; endif; ?>
                         

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="revocable-trust">
            <div class="container">
                <div class="flex-area align-item-center justify-content-sb revocable-sec">

                    <div class="coll-50">
                        <div class="revocable-content">
							<?php if ( $revocable_trust_heading = get_field( 'revocable_trust_heading' ) ) : ?>
                            <h2 class="itc400"><?php echo  $revocable_trust_heading ?></h2>
							<?php endif; ?>
							<?php if( have_rows('revocable_trust_repeater') ):  while ( have_rows('revocable_trust_repeater') ) : the_row(); ?>
                            <p>
                                 <?php the_sub_field('revocable_trust_para'); ?>
                            </p>
							<?php endwhile; endif; ?>
                           

                        </div>
                    </div>
                    <div class="coll-50">
                        <div class="revocable-img">
							<?php if ( $revocable_trust_image = get_field( 'revocable_trust_image' ) ) : ?>
                            <img src="<?php echo  $revocable_trust_image ?>" alt="image">
							<?php endif; ?>
                        </div>
                    </div>
					<?php if( have_rows('recoverable_trust2') ):  while ( have_rows('recoverable_trust2') ) : the_row(); ?>
                    <div class="coll-50">
                        <div class="revocable-content">
                            <h2 class="itc400"><?php the_sub_field('recoverable_trust2_headong'); ?></h2>
							<?php if( have_rows('recoverable_trust2_para_repeater') ):  while ( have_rows('recoverable_trust2_para_repeater') ) : the_row(); ?>
                            <p>
                               <?php the_sub_field('recoverable_trust2_para'); ?>
                            </p>
							<?php endwhile; endif; ?>
                        


                        </div>
                    </div>
					<?php endwhile; endif; ?>
                 
                </div>

                <div class="durable-power">
					<?php if ( $durable_power_heading = get_field( 'durable_power_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $durable_power_heading ?></h2>
					<?php endif; ?>
                    <div class="flex-area align-item-center justify-content-sb revocable-sec">
                        <div class="coll-50">
                            <div class="durable-power-img">
								<?php if ( $durable_power_image = get_field( 'durable_power_image' ) ) : ?>
                                <img src="<?php echo  $durable_power_image ?>" alt="image">
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="coll-50">
                            <div class="durable-power-content">
<?php if( have_rows('durable_power_para_repeater') ):  while ( have_rows('durable_power_para_repeater') ) : the_row(); ?>
                                <p>
                                    <?php the_sub_field('durable_power_para'); ?>
                                </p>
                              <?php endwhile; endif; ?>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>
        <section class="estate-faq">
            <div class="container">
                <div class="probate-option-heading">
					<?php if ( $estate_faq_heading = get_field( 'estate_faq_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $estate_faq_heading ?></h2>
					<?php endif; ?>
                </div>
                <div class="apps_faq clearfix apps_lightBg apps_sectionGap" id="faq">
                    <div class="apps_container">
                        <div class="apps_row">

                            <div class="apps_col12">
                                <div class="apps_accordion" id="accordion1">
									<?php if( have_rows('estate_faq_repeater') ):  while ( have_rows('estate_faq_repeater') ) : the_row(); ?>
                                    <div class="apps_panel"> <!-- first panel -->
                                        <div class="apps_panel_header itc400"><?php the_sub_field('estate_faq_inner_heading'); ?></div>
                                        <div class="apps_panel_content"><?php the_sub_field('estate_faq_inner_para'); ?></div>
                                    </div><!-- end of apps_panel -->
									<?php endwhile; endif; ?>

                                    
                                </div><!-- end of accordion1 -->
                            </div><!-- end of accordion1 -->
                        </div><!-- end of apps_row -->
                    </div><!-- end of apps_container -->
                </div><!-- end of apps_faq -->



            </div>
        </section>
     

        <?php get_footer(); ?>