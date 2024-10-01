<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

</head>

<body <?php body_class(); ?>>
	
	<?php
// Get the current language.
$current_lang = pll_current_language();

// Output different header elements based on the current language.
if ($current_lang === 'en') {
    // English header content
    ?>
	
    <header id="header">
        <div class="header-top-bar">
            <div class="fo-he-container marquee">
                <div class="header-tb flex-area align-items-center justify-content-sb">
					
                    <div class="coll-50">
                        <div class="flex-area align-items-center justify-content-start header-info-box">
                            <div class="header-num">
                                <a href="tel:<?php the_field('header_call_link','option');?>"><?php the_field('header_call_text','option');?></a>
                            </div>
                            <div class="header-address">
                                <a href="<?php the_field('header_adrs_link','option');?>"><?php the_field('header_adrs_text','option');?> </a>
                            </div>
                        </div>
                    </div>
					
                    <div class="coll-50">
                        <div class="flex-area align-items-center justify-content-end header-info-box">
                            <div class="header-num">
                                <a href="tel:<?php the_field('header_call_link2','option');?>"><?php the_field('header_call_text2','option');?></a>
                            </div>
                            <div class="header-address">
                                <a href="<?php the_field('header_adrs_link2','option');?>"><?php the_field('header_adrs_text2','option');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="main-header">
            <div class="fo-he-container">
                <div class="flex-area align-item-center justify-content-sb">
                    <div class="three col">
                        <div class="hamburger" id="hamburger-6">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="coll-20">
                        <div class="flex-area justify-content-start header-logo">
                        <?php if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        } ?>
                        </div>
                    </div>
                    <div class="coll-60 menusflex menuflex">
                        <div class="navbar">
                            <nav>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-menu',
                                        'Primary',
                                        'container' => false,
                                        'menu_class' => ''
                                    )
                                );
                                ?>
 								<div class="hamberger-footer">
                                    <ul class="flex-area align-item-center coll-40 justify-content-sb">
										<?php if ( have_rows( 'hamberger_social_icons_repeater','option' ) ) : ?>
										<?php while ( have_rows( 'hamberger_social_icons_repeater', 'option' ) ) :
										the_row(); ?>
                                        <li class="flex-area align-item-center"><img src="<?php the_sub_field('hamberger_social_icon', 'option');?>" alt="fb"><a
                                                href="<?php the_sub_field('social_link', 'option');?>"><?php the_sub_field('social_name', 'option');?></a></li>
                                        
										<?php endwhile; ?>
										<?php endif; ?>
                                    </ul>
                                    <p><?php the_field('header_copyright_text', 'option');?></p>

                                </div>
                            </nav>
                        </div>

                    </div>
                    <div class="coll-20">
                        <div class="flex-area justify-content-end">
                           
                            
                             <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'drop-menu',
                                        'dropPrimary',
                                        'container' => false,
                                        'menu_class' => ''
                                    )
                                );
                                ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	   <?php
} elseif ($current_lang === 'ja') {
    // Japanese header content
    ?>
	
	 <header id="header-jap">
        <div class="header-top-bar">
            <div class="fo-he-container marquee">
                <div class="header-tb flex-area align-items-center justify-content-sb">
					
                    <div class="coll-50">
                        <div class="flex-area align-items-center justify-content-start header-info-box">
                            <div class="header-num">
                                <a href="tel:<?php the_field('header_call_link','option');?>"><?php the_field('header_call_text','option');?></a>
                            </div>
                            <div class="header-address">
                                <a href="<?php the_field('header_adrs_link','option');?>"><?php the_field('header_adrs_text_japan','option');?> </a>
                            </div>
                        </div>
                    </div>
					
                    <div class="coll-50">
                        <div class="flex-area align-items-center justify-content-end header-info-box">
                            <div class="header-num">
                                <a href="tel:<?php the_field('header_call_link2','option');?>"><?php the_field('header_call_text2','option');?></a>
                            </div>
                            <div class="header-address">
                                <a href="<?php the_field('header_adrs_link2','option');?>"><?php the_field('header_adrs_text2_japan','option');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="main-header">
            <div class="fo-he-container">
                <div class="flex-area align-item-center justify-content-sb">
                    <div class="three col">
                        <div class="hamburger" id="hamburger-6">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="coll-20">
                        <div class="flex-area justify-content-start header-logo">
<a href="<?php the_field('japanese_logo_link', 'option');?>"><img src="<?php the_field('japanese_logo', 'option');?>" alt="logo"></a>
							
                        </div>
                    </div>
                    <div class="coll-60 menusflex menuflex">
                        <div class="navbar">
                            <nav>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-menu',
                                        'Primary',
                                        'container' => false,
                                        'menu_class' => ''
                                    )
                                );
                                ?>
 								<div class="hamberger-footer">
                                    <ul class="flex-area align-item-center coll-40 justify-content-sb">
										<?php if ( have_rows( 'hamberger_social_icons_repeater','option' ) ) : ?>
										<?php while ( have_rows( 'hamberger_social_icons_repeater', 'option' ) ) :
										the_row(); ?>
                                        <li class="flex-area align-item-center"><img src="<?php the_sub_field('hamberger_social_icon', 'option');?>" alt="fb"><a
                                                href="<?php the_sub_field('social_link', 'option');?>"><?php the_sub_field('social_name', 'option');?></a></li>
                                        
										<?php endwhile; ?>
										<?php endif; ?>
                                    </ul>
                                    <p><?php the_field('header_copyright_text', 'option');?></p>

                                </div>
                            </nav>
                        </div>

                    </div>
                    <div class="coll-20">
                        <div class="flex-area justify-content-end">
                           
                            
                             <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'drop-menu',
                                        'dropPrimary',
                                        'container' => false,
                                        'menu_class' => ''
                                    )
                                );
                                ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	   <?php
}
?>
	
	
    <main id="main">