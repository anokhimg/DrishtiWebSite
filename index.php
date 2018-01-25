<?php

/**
 * index.php
 * @package WordPress
 * @subpackage Kulebe
 * @since Kulebe 1.0
 * 
 */

?>

<?php get_header(); ?>

		<div id="wrapper">

         <?php $current_blog_page_id = get_option('page_for_posts'); ?>



          <?php if (ot_get_option( 'kulebe_blog_background' )) { ?>
			<div class="blog-header" style="background-image:url(<?php echo ot_get_option( 'kulebe_blog_background' ); ?>); background-size:cover; ">
				<div class="overlay"></div>
				<div class="slider-caption slider-caption-center">
					<h2 data-caption-animate="fadeInUp"><?php if(get_post_meta( $current_blog_page_id, 'klb_alt_title', true )){ echo get_post_meta( $current_blog_page_id, 'klb_alt_title', true ); } else { echo get_the_title($current_blog_page_id); } ?></h2>
                    <?php if(get_post_meta( $current_blog_page_id, 'klb_subtitle', true )){ echo '<p class="white">'.get_post_meta( $current_blog_page_id, 'klb_subtitle', true ).'</p> '; } ?>
				</div>

			</div>
         <?php } else { ?>

         <?php } ?>

			<section id="blog">
				<div class="row">
 <?php if( get_option_tree( 'kulebe_layout_set' ) == 'left-sidebar') { ?>
 
 

					<div class="medium-3 columns">
			           <?php get_sidebar(); ?>
			        </div>

					<div class="medium-9 columns">
                   <?php if (have_posts()) : while (have_posts()) : the_post();  

                        get_template_part( 'post-format/content', get_post_format() ); 

                    endwhile; 

                     get_template_part( 'post-format/pagination' ); 

                     else : ?>

                    <h2><?php esc_html_e('No Posts Found', 'kulebe') ?></h2>

                    <?php endif; ?> 
                    </div>
					
 <?php } elseif( get_option_tree( 'kulebe_layout_set' ) == 'full-width') { ?>
					
					
					<div class="medium-12 columns">
                   <?php if (have_posts()) : while (have_posts()) : the_post();  

                        get_template_part( 'post-format/content', get_post_format() ); 

                    endwhile; 

                     get_template_part( 'post-format/pagination' ); 

                     else : ?>

                    <h2><?php esc_html_e('No Posts Found', 'kulebe') ?></h2>

                    <?php endif; ?> 
                    </div>
 <?php } else { ?>
					
					<div class="medium-9 columns">
                   <?php if (have_posts()) : while (have_posts()) : the_post();  

                        get_template_part( 'post-format/content', get_post_format() ); 

                    endwhile; 

                     get_template_part( 'post-format/pagination' ); 

                     else : ?>

                    <h2><?php esc_html_e('No Posts Found', 'kulebe') ?></h2>

                    <?php endif; ?> 
					
                    </div>

					<div class="medium-3 columns">
			           <?php get_sidebar(); ?>
			        </div>

<?php } ?>


				</div>

			</section>

<?php get_footer(); ?>