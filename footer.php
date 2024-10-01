	<?php
// Get the current language.
$current_lang = pll_current_language();

// Output different header elements based on the current language.
if ($current_lang === 'en') {
    // English header content
    ?>
        <section class="hongo-law-office-contact">
            <div class="container">
                <div class="hongo-law-heading">
                    <h2 class="itc400"><?php the_field('law_office_heading','option');?></h2>
                </div>
                <div class="flex-area">
					<?php if( have_rows('law_office_repeater','option') ):  while ( have_rows('law_office_repeater','option') ) : the_row(); ?>
                    <div class="coll-50">
                        <div class="office-box">
                            <h3 class="itc400"><?php the_sub_field('law_office_name','option'); ?></h3>
                            <ul>
								<?php if( have_rows('law_office_location_repeater','option') ):  while ( have_rows('law_office_location_repeater','option') ) : the_row(); ?>
                                <li>
                                    <img src="<?php the_sub_field('law_location_image','option'); ?>" alt="image"> <a
                                        href="<?php the_sub_field('law_location_link','option'); ?>" target="_blank"><?php the_sub_field('law_location_text','option'); ?></a>
                                </li>
								<?php endwhile; endif; ?>
                                
                            </ul>
                        </div>
                    </div>
					<?php endwhile; endif; ?>
                   
                </div>
            </div>
        </section>
 <section class="contact-form-sec" id="booking">
            <div class="container">
                <div class="hongo-law-heading">
					<?php if ( $contact_form_heading = get_field( 'contact_form_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $contact_form_heading ?></h2>
					<?php endif; ?>
                </div>
                <div class="contact-form">
                   <?php echo do_shortcode( '[cf7form cf7key="contact-us-form"]' ); ?>
                </div>

            </div>
        </section>


</main>
<footer id="footer">
    <div class="fo-he-container">
        <div class="flex-area top-footer">
            <div class="coll-30">
                <div class="footer-logo">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        } ?>
                </div>
            </div>
            <div class="coll-30">
                <div class="footer-menu">
					<?php if ( $prectice_area_text = get_field( 'prectice_area_text','option' ) ) : ?>
                    <h6 class="itc400"><?php echo  $prectice_area_text ?></h6>
					<?php endif; ?>
                   <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'practice-menu',
                                        'PracticeSecondary',
                                        'container' => false,
                                        'menu_class' => ''
                                    )
                                );
                                ?>
                </div>
            </div>
            <div class="coll-40">
                <div class="footer-menu">

                    <?php if ( $company_text = get_field( 'company_text','option' ) ) : ?>
                        <h6 class="itc400"><?php echo  $company_text ?></h6>
					<?php endif; ?>
                       <?php
	wp_nav_menu(array('theme_location' => 'footer-menu', 'Secondary',
					  'container' => false,
					  'menu_class' => ''
					 ));
								?> 
                </div>
            </div>
        </div>
        <div class="bottom-footer flex-area justify-content-sb">
            <p><?php the_field('bottom_footer_text','option');?></p>
            <ul class="flex-area align-item-center coll-30 justify-content-sb">
				<?php if( have_rows('social_icons_repeater','option') ):  while ( have_rows('social_icons_repeater','option') ) : the_row(); ?>
                <li class="flex-area align-item-center"><img src="<?php the_sub_field('social_icon_image','option'); ?>" alt="image"><a
                        href="<?php the_sub_field('social_icon_link','option'); ?>"><?php the_sub_field('social_icon_text','option'); ?></a></li>
				<?php endwhile; endif; ?>
                
            </ul>

        </div>
    </div>
</footer>

	   <?php
} elseif ($current_lang === 'ja') {
    // Japanese header content
    ?>
        <section class="hongo-law-office-contact">
            <div class="container">
                <div class="hongo-law-heading">
                    <h2 class="itc400"><?php the_field('law_office_heading_japanese','option');?></h2>
                </div>
                <div class="flex-area">
					<?php if( have_rows('law_office_repeater','option') ):  while ( have_rows('law_office_repeater','option') ) : the_row(); ?>
                    <div class="coll-50">
                        <div class="office-box">
                            <h3 class="itc400"><?php the_sub_field('law_office_name_japanes','option'); ?></h3>
                            <ul>
								<?php if( have_rows('law_office_location_repeater','option') ):  while ( have_rows('law_office_location_repeater','option') ) : the_row(); ?>
                                <li>
                                    <img src="<?php the_sub_field('law_location_image','option'); ?>" alt="image"> <a
                                        href="<?php the_sub_field('law_location_link','option'); ?>" target="_blank"><?php the_sub_field('law_location_text_japanese','option'); ?></a>
                                </li>
								<?php endwhile; endif; ?>
                                
                            </ul>
                        </div>
                    </div>
					<?php endwhile; endif; ?>
                   
                </div>
            </div>
        </section>
 <section class="contact-form-sec" id="booking">
            <div class="container">
                <div class="hongo-law-heading">
					<?php if ( $contact_form_heading = get_field( 'contact_form_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $contact_form_heading ?></h2>
					<?php endif; ?>
                </div>
                <div class="contact-form">
                   <?php echo do_shortcode( '[cf7form cf7key="contact-us-form"]' ); ?>
                </div>

            </div>
        </section>


</main>
<footer id="footer-jap">
    <div class="fo-he-container">
        <div class="flex-area top-footer">
            <div class="coll-30">
                <div class="footer-logo">
                    <a href="<?php the_field('japanese_logo_link', 'option');?>"><img src="<?php the_field('japanese_logo', 'option');?>" alt="logo"></a>
                </div>
            </div>
            <div class="coll-30">
                <div class="footer-menu">
                    <?php if ( $prectice_area_japanese_text = get_field( 'prectice_area_japanese_text','option' ) ) : ?>
                    <h6 class="itc400"><?php echo  $prectice_area_japanese_text ?></h6>
					<?php endif; ?>
                   <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'practice-menu',
                                        'PracticeSecondary',
                                        'container' => false,
                                        'menu_class' => ''
                                    )
                                );
                                ?>
                </div>
            </div>
            <div class="coll-40">
                <div class="footer-menu">

                    
                        <?php if ( $company_japanese_text = get_field( 'company_japanese_text','option' ) ) : ?>
                    <h6 class="itc400"><?php echo  $company_japanese_text ?></h6>
					<?php endif; ?>
                       <?php
	wp_nav_menu(array('theme_location' => 'footer-menu', 'Secondary',
					  'container' => false,
					  'menu_class' => ''
					 ));
								?> 
                </div>
            </div>
        </div>
        <div class="bottom-footer flex-area justify-content-sb">
            <p><?php the_field('bottom_footer_text_japanese','option');?></p>
            <ul class="flex-area align-item-center coll-30 justify-content-sb">
				<?php if( have_rows('social_icons_repeater','option') ):  while ( have_rows('social_icons_repeater','option') ) : the_row(); ?>
                <li class="flex-area align-item-center"><img src="<?php the_sub_field('social_icon_image','option'); ?>" alt="image"><a
                        href="<?php the_sub_field('social_icon_link','option'); ?>"><?php the_sub_field('social_icon_text_japanese','option'); ?></a></li>
				<?php endwhile; endif; ?>
                
            </ul>

        </div>
    </div>
</footer>





	   <?php
}
?>

<?php wp_footer(); ?>



</body>

</html>