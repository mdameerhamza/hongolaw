<?php /*Template Name: Probate */ get_header(); ?>
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
					<?php if ( $probate_heading = get_field( 'probate_heading' ) ) : ?>
                    <p><?php echo  $probate_heading ?></p>
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
                                <?php the_sub_field('probate_para'); ?>
                            </p>
							<?php endwhile; endif; ?>
                         

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="probate-option">
            <div class="container">
                <div class="probate-option-heading">
					<?php if ( $probate_option_heading = get_field( 'probate_option_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $probate_option_heading ?></h2>
					<?php endif; ?>
                </div>
				<?php if( have_rows('probate_option_repeater') ):  while ( have_rows('probate_option_repeater') ) : the_row(); ?>
                <div class="flex-area justify-content-sb">
                    <div class="coll-30">
                        <h4 class="itc400"><?php the_sub_field('probate_option_repeater_heading'); ?></h4>
                    </div>
                    <div class="coll-70 probate-option-content">
						<?php if( have_rows('probate_option_para_repeater') ):  while ( have_rows('probate_option_para_repeater') ) : the_row(); ?>
                        <p><?php the_sub_field('probate_option_para'); ?></p>
						<?php endwhile; endif; ?>
                        
                    </div>
                </div>
				<?php endwhile; endif; ?>
               
            </div>

        </section>
        <section class="probate-faq">
            <div class="container">
                <div class="probate-option-heading">
					<?php if ( $probate_faq_heading = get_field( 'probate_faq_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $probate_faq_heading ?></h2>
					<?php endif; ?>
                </div>
                <div class="apps_faq clearfix apps_lightBg apps_sectionGap" id="faq">
                    <div class="apps_container">
                        <div class="apps_row">

                            <div class="apps_col12">
                                <div class="apps_accordion" id="accordion1">
									<?php if( have_rows('probate_faq_repeater') ):  while ( have_rows('probate_faq_repeater') ) : the_row(); ?>
                                    <div class="apps_panel"> <!-- first panel -->
                                        <div class="apps_panel_header itc400"><?php the_sub_field('probate_faq_heading'); ?></div>
                                        <div class="apps_panel_content"><?php the_sub_field('probate_faq_para'); ?></div>
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