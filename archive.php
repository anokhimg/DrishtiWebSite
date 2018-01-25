<?php

/**
 * archive.php
 * @package WordPress
 * @subpackage Kulebe
 * @since Kulebe 1.0
 * 
 */

?>

<?php get_header(); ?>

		<div id="wrapper">

         <?php $current_blog_page_id = get_option('page_for_posts'); ?>

			<section id="blog">
				<div class="row">
				
			<h2 class="klb-search">
			  <?php if (is_category()) { ?>
			  <?php esc_html_e('Category Archive for:', 'kulebe') ?> <?php single_cat_title(); ?>

			  <?php } elseif( is_tag() ) { ?>
				  <?php esc_html_e('Posts Tagged:', 'kulebe') ?><?php single_tag_title(); ?>
  
			  <?php } elseif (is_day()) { ?>
				  <?php esc_html_e('Archive for:', 'kulebe') ?> <?php the_time('F jS, Y'); ?>
  
			  <?php } elseif (is_month()) { ?>
				  <?php esc_html_e('Archive for:', 'kulebe') ?> <?php the_time('F, Y'); ?>
  
			  <?php } elseif (is_year()) { ?>
				  <?php esc_html_e('Archive for:', 'kulebe') ?> <?php the_time('Y,'); ?>
  
			  <?php } elseif (is_author()) { ?>
				  <?php esc_html_e('Author Archive:', 'kulebe') ?>
  
			  <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				  <?php esc_html_e('Blog Archives:', 'kulebe') ?>
			  <?php } ?>
			</h2>
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