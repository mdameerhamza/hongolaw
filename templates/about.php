<?php /*Template Name: About */ get_header(); ?>
        <section class="sub-banner bg-property">

            <div class="container">
                <div class="flex-area  align-item-center">
                    <div class="hero-banner-heading">
						 <?php if ( $banner_sub_heading = get_field( 'banner_sub_heading' ) ) : ?>
                        <span class="small-heading"><?php echo  $banner_sub_heading ?></span>
						<?php endif; ?>
						<?php if ( $banner_heading = get_field( 'banner_heading' ) ) : ?>
                        <h1 class="itc400"><?php echo  $banner_heading ?></h1>
						<?php endif; ?>
						<?php if ( $banner_para = get_field( 'banner_para' ) ) : ?>
                        <p><?php echo  $banner_para ?></p>
						<?php endif; ?>
                    </div>

                </div>
            </div>

        </section>
        
        <section class="about-meet-yuka">
            <div class="about-yuka-name">
                <div class="marquee-container">
					<?php if ( $about_meet_yuka_scroll_text = get_field( 'about_meet_yuka_scroll_text' ) ) : ?>
                    <marquee class="itc400" scrollamount="3"><?php echo  $about_meet_yuka_scroll_text ?></marquee>
					<?php endif; ?>
                </div>
            </div>
            <div class="container">
                
                <div class="flex-area align-item-center justify-content-sb">
                    <div class="coll-55">
                        <div class="meet-yuka-content">
							<?php if ( $about_meet_yuka_heading = get_field( 'about_meet_yuka_heading' ) ) : ?>
                            <h2 class="itc400"> <?php echo  $about_meet_yuka_heading ?></h2>
							<?php endif; ?>
							<?php if( have_rows('about_meet_yuka_text_repeater') ):  while ( have_rows('about_meet_yuka_text_repeater') ) : the_row(); ?>
                            <p>
                                <?php the_sub_field('about_meet_yuka_para'); ?>
                            </p>
							<?php endwhile; endif; ?>
                          


                        </div>
                    </div>
                    <div class="coll-45">
                        <div class="yuka-img-content">
                            <div class="yuka-img-box">
								<?php if ( $about_meet_yuka_image = get_field( 'about_meet_yuka_image' ) ) : ?>
                                <img src="<?php echo  $about_meet_yuka_image ?>" alt="image">
								<?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="law-honors">
            <div class="container">
				<?php if ( $law_honor_heading = get_field( 'law_honor_heading', '5' ) ) : ?>
                <h2 class="itc400"><?php echo  $law_honor_heading ?></h2>
				<?php endif; ?>
                <div class="coll-80">
                    <div class="law-honor-images">
						<?php if( have_rows('law_honor_repeater', '5') ):  while ( have_rows('law_honor_repeater', '5') ) : the_row(); ?>
                        <div class="law-honor-imag">
                            <img src="<?php the_sub_field('law_image', '5'); ?>" alt="badge">
                        </div>
						<?php endwhile; endif; ?>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="legal-service-sec">
            <div class="container">
                <div class="flex-area align-item-center justify-content-sb">
                    <div class="coll-45">
                        <div class="legal-img">
							<?php if ( $legal_service_image = get_field( 'legal_service_image' ) ) : ?>
                            <img src="<?php echo  $legal_service_image ?>" alt="image">
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="coll-50">
                        <div class="ahead-content">
							<?php if ( $legal_service_heading = get_field( 'legal_service_heading' ) ) : ?>
                            <h2 class="itc400"><?php echo  $legal_service_heading ?></h2>
							<?php endif; ?>
							<?php if( have_rows('legal_service_repeater') ):  while ( have_rows('legal_service_repeater') ) : the_row(); ?>
                            <p>
                                <?php the_sub_field('legal_service_para'); ?>
                            </p>
							<?php endwhile; endif; ?>
                          
                        </div>
                    </div>

                </div>
                <div class="office-help-client">
					<?php if ( $office_help_client_heading = get_field( 'office_help_client_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $office_help_client_heading ?></h2>
					<?php endif; ?>
                    <div class="flex-area">
                       <?php if( have_rows('help_client_repeater') ):  while ( have_rows('help_client_repeater') ) : the_row(); ?>
                        <div class="coll-50">
                            <div class="card-content">
                                <div class="card-info">
                                    <h3 class="itc400"><?php the_sub_field('help_client_card_heading'); ?></h3>
                                <p>
                                    <?php the_sub_field('help_client_card_para'); ?>
                                </p>
									<?php 
$link = get_sub_field('help_client_btn');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="card-hover" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/black-btn-arrow.svg" alt="arrow"></a>
<?php endif; ?>
                              
                                </div>
                                
                            </div>
                        </div>
						<?php endwhile; endif; ?>
                       
    
                    </div>
                </div>
            </div>
        </section>


        <?php get_footer(); ?>