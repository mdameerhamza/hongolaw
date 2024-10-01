<?php /*Template Name: Testimonial */ get_header(); ?>
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
        <section class="testimonials-sec">
            <div class="container">
				<?php if ( $testimonials_para = get_field( 'testimonials_para' ) ) : ?>
                <p><?php echo  $testimonials_para ?></p>
				<?php endif; ?>
                <div class="flex-area align-item-center testi-inner-boxes">
					<?php if ( have_rows( 'testimonial_repeater' ) ) : ?>
					<?php while ( have_rows( 'testimonial_repeater' ) ) :
					the_row(); ?>
                    <div class="coll-50">
                        <div class="testimonial-card">
							<?php if ( $testimonial_image = get_sub_field( 'testimonial_image' ) ) : ?>
                            <img src="<?php echo $testimonial_image ?>" alt="image">
							<?php endif; ?>
							<?php if ( $testimonial_inner_para = get_sub_field( 'testimonial_inner_para' ) ) : ?>
                            <p class="itc400"><?php echo $testimonial_inner_para ?></p>
							<?php endif; ?>
							<?php if ( $testimonial_sub_title = get_sub_field( 'testimonial_sub_title' ) ) : ?>
                            <span class="itc400"><?php echo $testimonial_sub_title ?></span>
							<?php endif; ?>
                        </div>
                    </div>
					<?php endwhile; ?>
					<?php endif; ?>
                   
                </div>
				<?php 
$link = get_field('testimonial_btn');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a id="loadMore" class="common-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/btn-arrow.svg" alt="arrow"></a>
<?php endif; ?>
                
            </div>
        </section>






  

        <?php get_footer(); ?>