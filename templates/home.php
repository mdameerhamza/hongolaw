<?php /*Template Name: Home */ get_header(); ?>
        <section class="hero-banner bg-property" style="background-image: url(<?php the_field('hero_banner_bg'); ?>);">
            <div class="flex-area  align-item-center">
                <div class="fo-he-container">
                    <div class="hero-banner-contact">
                        <ul>
                            <li class="banner-message"><a href="mailto:<?php the_field('banner_mesage_link');?>"><img src="<?php the_field('banner_message_image');?>" alt="image"></a></li>
                            <li class="banner-call"><a href="tel:<?php the_field('banner_call_link');?>"><img src="<?php the_field('banner_call_image');?>" alt="image"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="hero-banner-content flex-area flex-no-wrap justify-content-sb">
                        <div class="hero-banner-heading">
							<?php if ( $hero_banner_heading = get_field( 'hero_banner_heading' ) ) : ?>
                            <h1 class="itc400"><?php echo  $hero_banner_heading ?></h1>
							<?php endif; ?>
                        </div>
                        <div class="hero-banner-btn flex-area justify-content-end align-item-end">
                            
							<?php 
$link = get_field('hero_banner_btn');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="common-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/btn-arrow.svg"
                                    alt="arrow"></a>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="help-protect">
            <div class="container">
                <div class="flex-area align-item-start">
                    <div class="coll-30">
						<?php if ( $help_heading = get_field( 'help_heading' ) ) : ?>
                        <h3 class="itc400"><?php echo  $help_heading ?></h3>
						<?php endif; ?>
                    </div>
                    <div class="coll-70">
						<?php if ( $help_para1 = get_field( 'help_para1' ) ) : ?>
                        
                            <?php echo  $help_para1 ?>
                     
						<?php endif; ?>
						
                    </div>
                </div>
            </div>
        </section>
        <section class="helping">
            <div class="container">
                <div class="ahead">
                    <div class="flex-area align-item-center">
                        <div class="coll-50">
                            <div class="ahead-content">
								<?php if ( $helping_heading = get_field( 'helping_heading' ) ) : ?>
                                <h2 class="itc400"><?php echo  $helping_heading ?></h2>
								<?php endif; ?>
								
                               <?php if ( $helping_para1 = get_field( 'helping_para1' ) ) : ?>
                        		<?php echo  $helping_para1 ?>
								<?php endif; ?>
                              
                            </div>
                        </div>
                        <div class="coll-50">
                            <div class="ahead-img">
								<?php if ( $helping_image = get_field( 'helping_image' ) ) : ?>
                                <img src="<?php echo  $helping_image ?>" alt="image">
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ower-quote">
                    <h2 class="itc400">
                        <?php the_field('owner_quote');?>
                    </h2>
                    <h5 class="itc400"><?php the_field('quote_author');?></h5>
                </div>
                <div class="serving-client">
                    <div class="serving-client-heading">
						 <?php if ( $serving_client_heading = get_field( 'serving_client_heading' ) ) : ?>
                        <h2 class="itc400"><?php echo  $serving_client_heading ?></h2>
						<?php endif; ?>
                    </div>
                    <div class="flex-area align-item-center justify-content-sb">
                        <div class="coll-40">
                            <div class="serving-client-img">
								<?php if ( $serving_client_image = get_field( 'serving_client_image' ) ) : ?>
                                <img src="<?php echo  $serving_client_image ?>" alt="image">
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="coll-55">
                            <div class="serving-client-content">
								 <?php if ( $serving_client_para = get_field( 'serving_client_para' ) ) : ?>
                        		<?php echo  $serving_client_para ?>
								<?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="meet-yuka">
            <div class="yuka-name">
                <div class="marquee-container">
                    <marquee class="itc400" scrollamount="3"><?php the_field('meet_yuka_scroll_text'); ?></marquee>
                </div>
            </div>
            <div class="container">

							<?php if ( $meet_yuka_heading = get_field( 'meet_yuka_heading' ) ) : ?>
                            <h2 class="itc400 mobile-text"> <?php echo  $meet_yuka_heading ?></h2>
							<?php endif; ?>
                <div class="flex-area align-item-center">
                    <div class="coll-55">
                        <div class="meet-yuka-content">
							 <?php if ( $meet_yuka_heading = get_field( 'meet_yuka_heading' ) ) : ?>
                            <h2 class="itc400 desktop-text"> <?php echo  $meet_yuka_heading ?></h2>
							<?php endif; ?>
							<?php if ( $meet_yuka_para = get_field( 'meet_yuka_para' ) ) : ?>
                        		<?php echo  $meet_yuka_para ?>
								<?php endif; ?>
                           
                          
							<?php 
$link = get_field('meet_yuka_btn');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/black-btn-arrow.svg" alt="arrow"></a>
<?php endif; ?>
                        </div>
                    </div>
                    <div class="coll-45">
                        <div class="yuka-img-content">
                            <div class="home-yuka-img-box">
								<?php if ( $meet_yuka_image = get_field( 'meet_yuka_image' ) ) : ?>
                                <img src="<?php echo  $meet_yuka_image ?>" alt="image">
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="yuka-quote">
                            <img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/quote.svg" alt="">
							<?php if ( $yuk_quote_para = get_field( 'yuk_quote_para' ) ) : ?>
                            <p>
                                <?php echo  $yuk_quote_para ?>
                            </p>
							<?php endif; ?>
                            <span class="itc400"><?php the_field('yuk_quote_name'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="law-honors">
            <div class="container">
				<?php if ( $law_honor_heading = get_field( 'law_honor_heading' ) ) : ?>
                <h2 class="itc400"><?php echo  $law_honor_heading ?></h2>
				<?php endif; ?>
                <div class="coll-80">
                    <div class="law-honor-images">
						<?php if( have_rows('law_honor_repeater') ):  while ( have_rows('law_honor_repeater') ) : the_row(); ?>
                        <div class="law-honor-imag">
                            <img src="<?php the_sub_field('law_image'); ?>" alt="badge">
                        </div>
						<?php endwhile; endif; ?>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="home-testimonilas">
            <div class="container">
                <div class="home-testi-heading">
					<?php if ( $testimonial_heading = get_field( 'testimonial_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $testimonial_heading ?></h2>
					<?php endif; ?>
					<?php if ( $testimonial_para = get_field( 'testimonial_para' ) ) : ?>
                    <p><?php echo  $testimonial_para ?></p>
					<?php endif; ?>
                </div>
                <div class="home-testi-slider-box">
                    <img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/black-coma.svg" alt="image">
                    <div class="home-testi-slider owl-carousel owl-theme">
						<?php if( have_rows('slider_repeater') ):  while ( have_rows('slider_repeater') ) : the_row(); ?>
                        <div class="item">
                            <p class="itc400"><?php the_sub_field('review'); ?></p>
                            <span class="itc400"><?php the_sub_field('location'); ?> </span>
                        </div>
						<?php endwhile; endif; ?>
                       
                    </div>
                </div>

                <div class="home-testi-btn">
					<?php 
$link = get_field('testimonial_btn');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/black-btn-arrow.svg" alt="arrow"></a>
<?php endif; ?>
                    
                </div>
            </div>
        </section>
        <section class="consultation">
            <div class="container">
                <div class="flex-area align-item-start justify-content-sb">
                    <div class="coll-45">
                        <div class="consultation-heading">
							<?php if ( $consultation_heading = get_field( 'consultation_heading' ) ) : ?>
                            <h2 class="itc400"><?php echo  $consultation_heading ?></h2>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="coll-50">
                        <div class="consultation-content">
							 <?php if ( $consultation_para = get_field( 'consultation_para' ) ) : ?>
                            <p>
                                <?php echo  $consultation_para ?>
                            </p>
                            <?php endif; ?>
							<?php 
$link = get_field('consultation_btn');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="common-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/btn-arrow.svg" alt="arrow"></a>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hongo-law-office">
            <div class="container">
                <div class="hongo-law-heading">
					<?php if ( $hongo_law_office_heading = get_field( 'hongo-law-office_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $hongo_law_office_heading ?></h2>
					<?php endif; ?>
                </div>
                <div class="flex-area">
					<?php if( have_rows('office_box_repeater') ):  while ( have_rows('office_box_repeater') ) : the_row(); ?>
                    <div class="coll-50">
                        <div class="office-box">
                            <h3 class="itc400"><?php the_sub_field('office_box_heading'); ?></h3>
                            <ul>
								<?php if( have_rows('office_address_repeater') ):  while ( have_rows('office_address_repeater') ) : the_row(); ?>
                                <li>
                                    <img src="<?php the_sub_field('office_address_image'); ?>" alt="image"> <a
                                        href="<?php the_sub_field('office_address_link'); ?>" target="_blank"><?php the_sub_field('office_address_text'); ?> </a>
                                </li>
								<?php endwhile; endif; ?>
                                
                            </ul>
                        </div>
                    </div>
					<?php endwhile; endif; ?>
                   
                </div>
            </div>
        </section>
        <?php get_footer(); ?>