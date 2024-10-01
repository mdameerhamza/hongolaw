<?php /*Template Name: Preparing */ get_header(); ?>
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
        <section class="non-residence">
            <div class="container">
				<?php if ( $non_residents_heading = get_field( 'non_residents_heading' ) ) : ?>
                <h2 class="itc400"><?php echo  $non_residents_heading ?></h2>
				<?php endif; ?>
				<?php if ( $non_residents_small_para = get_field( 'non_residents_small_para' ) ) : ?>
                <p><?php echo  $non_residents_small_para ?></p>
				<?php endif; ?>
				<?php if( have_rows('non_residents_repeater') ):  while ( have_rows('non_residents_repeater') ) : the_row(); ?>
                <div class="flex-area justify-content-sb">
                    <div class="coll-30">
                        <h4 class="itc400"><?php the_sub_field('non_residents_repeater_title'); ?></h4>
                    </div>
                    <div class="coll-70 non-residenc-content">
                        <p><?php the_sub_field('non_residents_repeater_para'); ?></p>
                    </div>
                </div>
				<?php endwhile; endif; ?>
               
            </div>
        </section>
        <section class="non-residenc-note">
            <div class="container">
				<?php if ( $note_heading = get_field( 'note_heading' ) ) : ?>
                <span class="small-heading"><?php echo  $note_heading ?></span>
				<?php endif; ?>
				<?php if ( $note_para = get_field( 'note_para' ) ) : ?>
                <h4 class="itc400"><?php echo  $note_para ?></h4>
				<?php endif; ?>
            </div>
        </section>
        <section class="non-residence">
            <div class="container">
				<?php if( have_rows('non_residents_repeater2') ):  while ( have_rows('non_residents_repeater2') ) : the_row(); ?>
                <div class="flex-area justify-content-sb">
                    <div class="coll-30">
                        <h4 class="itc400"><?php the_sub_field('non_residents_repeater2_heading'); ?></h4>
                    </div>
                    <div class="coll-70 non-residenc-content">
                        <p><?php the_sub_field('non_residents_repeater2_para'); ?></p>
                    </div>
                </div>
				<?php endwhile; endif; ?>
               
            </div>
        </section>
        <section class="file-sec">
            <div class="container">
                <div class="flex-area">
					<?php if( have_rows('file_sec_repeater') ):  while ( have_rows('file_sec_repeater') ) : the_row(); ?>
                    <div class="coll-50">
                        <div class="file-info">
                            <h2 class="itc400"><?php the_sub_field('file_sec_repeater_heading'); ?></h2>
							<?php if( have_rows('file_sec_para_repeater') ):  while ( have_rows('file_sec_para_repeater') ) : the_row(); ?>
                            <p><?php the_sub_field('file_sec_para'); ?></p>
							<?php endwhile; endif; ?>
                          
                        </div>

                    </div>
					<?php endwhile; endif; ?>
                 
                </div>
            </div>
        </section>
        <section class="gross-estate">
            <div class="container">
                <div class="gross-estate-text">
					<?php if ( $schedule_a_heading = get_field( 'schedule_a_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo  $schedule_a_heading ?></h2>
					<?php endif; ?>
					<?php if ( $schedule_a_para = get_field( 'schedule_a_para' ) ) : ?>
                    <p><?php echo  $schedule_a_para ?></p>
					<?php endif; ?>
                </div>

                <div class="entire-gross">

                    <div class="entire-gross-text">
						<?php if ( $entire_gross_estate_heading = get_field( 'entire_gross_estate_heading' ) ) : ?>
                        <h3 class="itc400"><?php echo  $entire_gross_estate_heading ?></h3>
						<?php endif; ?>
						<?php if ( $entire_gross_estate_para = get_field( 'entire_gross_estate_para' ) ) : ?>
                        <p><?php echo  $entire_gross_estate_para ?></p>
						<?php endif; ?>
                    </div>
                    <div class="flex-area justify-content-sb">
                        <div class="coll-45">
                            <div class="entire-gross-image">
								<?php if ( $entire_gross_estate_image = get_field( 'entire_gross_estate_image' ) ) : ?>
                                <img src="<?php echo  $entire_gross_estate_image ?>" alt="image">
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="coll-50">
                            <ul class="entire-gross-content">
								<?php if( have_rows('entire_gross_estate_list_repeater') ):  while ( have_rows('entire_gross_estate_list_repeater') ) : the_row(); ?>
                                <li><?php the_sub_field('entire_gross_estate_list'); ?></li>
								<?php endwhile; endif; ?>
                                
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="determine-assets">
                    <div class="flex-area justify-content-sb">
                        <div class="coll-50">
                            <div class="determine-image">
								<?php if ( $determining_assets_image = get_field( 'determining_assets_image' ) ) : ?>
                                <img src="<?php echo  $determining_assets_image ?>" alt="image">
								<?php endif; ?>
                            </div>

                        </div>
                        <div class="coll-45 flex-area align-item-center">
                            <div class="determine-content">
								<?php if ( $determining_assets_heading = get_field( 'determining_assets_heading' ) ) : ?>
                                <h3 class="itc400"><?php echo  $determining_assets_heading ?></h3>
								<?php endif; ?>
								<?php if ( $determining_assets_para = get_field( 'determining_assets_para' ) ) : ?>
                                <p><?php echo  $determining_assets_para ?></p>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
					<?php if ( have_rows( 'determining_assets_repeater' ) ) : ?>
					<?php while ( have_rows( 'determining_assets_repeater' ) ) :
		the_row(); ?>
                    <div class="determine-main-content">
						<?php if ( $determining_assets_repeater_heading = get_sub_field( 'determining_assets_repeater_heading' ) ) : ?>
                        <h3 class="itc400"><?php echo $determining_assets_repeater_heading ?></h3>
						<?php endif; ?>
						<?php if ( $determining_assets_repeater_para = get_sub_field( 'determining_assets_repeater_para' ) ) : ?>
                        <p><?php echo $determining_assets_repeater_para ?></p>
						<?php endif; ?>
						<?php if ( $determining_assets_repeater_small_heading = get_sub_field( 'determining_assets_repeater_small_heading' ) ) : ?>
                        <h4 class="itc400"><?php echo $determining_assets_repeater_small_heading ?></h4>
						<?php endif; ?>
						<?php if ( $determining_assets_repeater_para2 = get_sub_field( 'determining_assets_repeater_para2' ) ) : ?>
                        <p><?php echo $determining_assets_repeater_para2 ?></p>
						<?php endif; ?>
                        <ul>
							<?php if ( have_rows( 'determining_assets_repeater_list' ) ) : ?>
					<?php while ( have_rows( 'determining_assets_repeater_list' ) ) :
		the_row(); ?>
							<?php if ( $determining_assets_list = get_sub_field( 'determining_assets_list' ) ) : ?>
                            <li><?php echo $determining_assets_list ?></li>
							<?php endif; ?>
							<?php endwhile; ?>
					<?php endif; ?>
                            
                        </ul>
                    </div>
					<?php endwhile; ?>
					<?php endif; ?>
                    
                </div>
            </div>
        </section>
        <section class="qualified-conversation">
            <div class="container">
				<?php if ( $qualified_conservation_heading = get_field( 'qualified_conservation_heading' ) ) : ?>
                <h2 class="itc400"><?php echo  $qualified_conservation_heading ?></h2>
				<?php endif; ?>
                <div class="flex-area justify-content-sb">
                    <div class="coll-45">
                        <div class="conversation-image">
							<?php if ( $qualified_conservation_image = get_field( 'qualified_conservation_image' ) ) : ?>
                            <img src="<?php echo  $qualified_conservation_image ?>" alt="image">
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="coll-50 align-item-center flex-area">
                        <div class="conversation-content">
							<?php if ( $qualified_conservation_para = get_field( 'qualified_conservation_para' ) ) : ?>
                            <p><?php echo  $qualified_conservation_para ?></p>
							<?php endif; ?>
                            <ul>
								<?php if ( have_rows( 'qualified_conservation_list_repeater' ) ) : ?>
								<?php while ( have_rows( 'qualified_conservation_list_repeater' ) ) :
								the_row(); ?>
                                <?php if ( $qualified_conservation_list = get_sub_field( 'qualified_conservation_list' ) ) : ?>
								<li><?php echo $qualified_conservation_list ?></li>
								<?php endif; ?>
                                
								<?php endwhile; ?>
								<?php endif; ?>
                            </ul>
							<?php if ( $qualified_conservation_para2 = get_field( 'qualified_conservation_para2' ) ) : ?>
                            <p><?php echo  $qualified_conservation_para2 ?></p>
							<?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="estate-relief">
            <div class="container">
				<?php if ( have_rows( 'estate_relief_repeater' ) ) : ?>
				<?php while ( have_rows( 'estate_relief_repeater' ) ) :
				the_row(); ?>
                <div class="estate-relief-contnt">
					<?php if ( $estate_relief_heading = get_sub_field( 'estate_relief_heading' ) ) : ?>
                    <h2 class="itc400"><?php echo $estate_relief_heading ?></h2>
					<?php endif; ?>
					<?php if ( have_rows( 'estate_relief_para_repeater' ) ) : ?>
				<?php while ( have_rows( 'estate_relief_para_repeater' ) ) :
				the_row(); ?>
					<?php if ( $estate_relief_para = get_sub_field( 'estate_relief_para' ) ) : ?>
                    <p><?php echo $estate_relief_para ?></p>
					<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
                  
                </div>
				<?php endwhile; ?>
				<?php endif; ?>
               
            </div>
        </section>
        <section class="schedule-b">
            <div class="container">
                <div class="flex-area align-item-center justify-content-sb schedule-b-contnt">
                    <div class="coll-45">
                        <div class="schedule-b-image">
							<?php if ( $schedule_b_image = get_field( 'schedule_b_image' ) ) : ?>
                            <img src="<?php echo  $schedule_b_image ?>" alt="image">
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="coll-50">
						<?php if ( $schedule_b_heading = get_field( 'schedule_b_heading' ) ) : ?>
                        <h2 class="itc400"><?php echo  $schedule_b_heading ?></h2>
						<?php endif; ?>
						<?php if ( $schedule_b_para = get_field( 'schedule_b_para' ) ) : ?>
                        <p><?php echo  $schedule_b_para ?></p>
						<?php endif; ?>
                    </div>

                </div>
               
				<?php if ( have_rows( 'schedule_b_content_repeater' ) ) : ?>
				<?php while ( have_rows( 'schedule_b_content_repeater' ) ) :
				the_row(); ?>
                <div class="schedule-b-main-contnt">
					<?php if ( $schedule_b_content_heading = get_sub_field( 'schedule_b_content_heading' ) ) : ?>
                    <h3 class="itc400"><?php echo $schedule_b_content_heading ?></h3>
					<?php endif; ?>
					<?php if ( have_rows( 'schedule_b_content_para_repeater' ) ) : ?>
					<?php while ( have_rows( 'schedule_b_content_para_repeater' ) ) :
					the_row(); ?>
					<?php if ( $schedule_b_content_para1 = get_sub_field( 'schedule_b_content_para1' ) ) : ?>
                    <p><?php echo $schedule_b_content_para1 ?></p>
					<?php endif; ?>
					<?php endwhile; ?>
					<?php endif; ?>
                    <ul>
						<?php if ( have_rows( 'schedule_b_content_list_repeater' ) ) : ?>
						<?php while ( have_rows( 'schedule_b_content_list_repeater' ) ) :
						the_row(); ?>
						<?php if ( $schedule_b_content_list = get_sub_field( 'schedule_b_content_list' ) ) : ?>
                        <li><?php echo $schedule_b_content_list ?></li>
						<?php endif; ?>
						<?php endwhile; ?>
						<?php endif; ?>
                        
                    </ul>
					<?php if ( have_rows( 'schedule_b_content_para2_repeater' ) ) : ?>
						<?php while ( have_rows( 'schedule_b_content_para2_repeater' ) ) :
						the_row(); ?>
					<?php if ( $schedule_b_content_para2 = get_sub_field( 'schedule_b_content_para2' ) ) : ?>
                    <p><?php echo $schedule_b_content_para2 ?></p>
					<?php endif; ?>
					<?php endwhile; ?>
						<?php endif; ?>
                 
                </div>
				<?php endwhile; ?>
				<?php endif; ?>
                <div class="schedule-b-main-contnt">
					<?php if ( $schedule_b_content_line6_heading = get_field( 'schedule_b_content_line6_heading' ) ) : ?>
                    <h3 class="itc400"><?php echo  $schedule_b_content_line6_heading ?></h3>
					<?php endif; ?>
					<?php if ( $schedule_b_content_line6_para = get_field( 'schedule_b_content_line6_para' ) ) : ?>
                    <p><?php echo  $schedule_b_content_line6_para ?></p>
					<?php endif; ?>
                    <div class="flex-area main-contnt-card">
						<?php if ( have_rows( 'schedule_b_content_line6_repeater' ) ) : ?>
						<?php while ( have_rows( 'schedule_b_content_line6_repeater' ) ) :
						the_row(); ?>
                        <div class="coll-50 in-main-contnt-card">
                            <div class="in-main-contnt-card-line-6">
								<?php if ( $schedule_b_content_line6_repeater_heading = get_sub_field( 'schedule_b_content_line6_repeater_heading' ) ) : ?>
                                <h4 class="itc400"><?php echo $schedule_b_content_line6_repeater_heading ?></h4>
								<?php endif; ?>
								<?php if ( have_rows( 'schedule_b_content_line6_para_repeater' ) ) : ?>
								<?php while ( have_rows( 'schedule_b_content_line6_para_repeater' ) ) :
								the_row(); ?>
								<?php if ( $schedule_b_content_line6_repeater_para = get_sub_field( 'schedule_b_content_line6_repeater_para' ) ) : ?>
                                <p><?php echo $schedule_b_content_line6_repeater_para ?></p>
								<?php endif; ?>
								<?php endwhile; ?>
								<?php endif; ?>
                              
                            </div>
                        </div>
						<?php endwhile; ?>
						<?php endif; ?>
                      
                    </div>
                </div>
					<?php if ( have_rows( 'schedule_b_content_repeater2' ) ) : ?>
				<?php while ( have_rows( 'schedule_b_content_repeater2' ) ) :
				the_row(); ?>
                <div class="schedule-b-main-contnt">
					<?php if ( $schedule_b_content_heading2 = get_sub_field( 'schedule_b_content_heading2' ) ) : ?>
                    <h3 class="itc400"><?php echo $schedule_b_content_heading2 ?></h3>
					<?php endif; ?>
					<?php if ( have_rows( 'schedule_b_content_para_repeater2' ) ) : ?>
					<?php while ( have_rows( 'schedule_b_content_para_repeater2' ) ) :
					the_row(); ?>
					<?php if ( $schedule_b_content_para22 = get_sub_field( 'schedule_b_content_para22' ) ) : ?>
                    <p><?php echo $schedule_b_content_para22 ?></p>
					<?php endif; ?>
					<?php endwhile; ?>
					<?php endif; ?>
                    <ul>
						<?php if ( have_rows( 'schedule_b_content_list_repeater2' ) ) : ?>
						<?php while ( have_rows( 'schedule_b_content_list_repeater2' ) ) :
						the_row(); ?>
						<?php if ( $schedule_b_content_list2 = get_sub_field( 'schedule_b_content_list2' ) ) : ?>
                        <li><?php echo $schedule_b_content_list2 ?></li>
						<?php endif; ?>
						<?php endwhile; ?>
						<?php endif; ?>
                        
                    </ul>
					<?php if ( have_rows( 'schedule_b_content_para2_repeater2' ) ) : ?>
						<?php while ( have_rows( 'schedule_b_content_para2_repeater2' ) ) :
						the_row(); ?>
					<?php if ( $schedule_b_content2_para2 = get_sub_field( 'schedule_b_content2_para2' ) ) : ?>
                    <p><?php echo $schedule_b_content2_para2 ?></p>
					<?php endif; ?>
					<?php endwhile; ?>
						<?php endif; ?>
                 
                </div>
				<?php endwhile; ?>
				<?php endif; ?>
              
               
            </div>
        </section>


  

        <?php get_footer(); ?>