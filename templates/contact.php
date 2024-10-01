<?php /*Template Name: Contact */ get_header(); ?>
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
                    <div class="hero-banner-btn">
						<?php 
$link = get_field('banner_contct_btn');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="common-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="https://wp.stagingserverinc.com/hongolaw/wp-content/uploads/2024/04/btn-arrow.svg" alt="image"></a>
<?php endif; ?>
                     
                    </div>
                </div>
            </div>

        </section>
        <section class="serving-us">
            <div class="container">
                <div class="serving-us-heading">
					<?php if ( $serving_us_heading = get_field( 'serving_us_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $serving_us_heading ?></h2>
					<?php endif; ?>
                </div>
                <div class="flex-area align-item-center justify-content-sb">
                    <div class="coll-45">
                        <div class="serving-us-img">
							<?php if ( $serving_us_image = get_field( 'serving_us_image' ) ) : ?>
                            <img src="<?php echo  $serving_us_image ?>" alt="image">
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="coll-50">
                        <div class="serving-us-content">
							<?php if ( have_rows( 'serving_us_para_repeater' ) ) : ?>
							<?php while ( have_rows( 'serving_us_para_repeater' ) ) :
							the_row(); ?>
							<?php if ( $serving_us_para = get_sub_field( 'serving_us_para' ) ) : ?>
                            <p><?php echo $serving_us_para ?></p>
							<?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        <?php get_footer(); ?>