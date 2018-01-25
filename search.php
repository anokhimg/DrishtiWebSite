<?php

/**
 * search.php
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
				
			<h2 class="klb-search"><?php printf( esc_html__( 'Search Results for: %s', 'kulebe' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

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