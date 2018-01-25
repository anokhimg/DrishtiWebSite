<?php
/**
 * page.php
 * @package WordPress
 * @subpackage Kulebe
 * @since Kulebe 1.0
 */
?>

<?php get_header(); ?>
      <div id="wrapper">
	  	  <section id="blog">
			 <div class="row">
					<div class="medium-12 columns">
                   <?php if (have_posts()) : while (have_posts()) : the_post();  

                        get_template_part( 'post-format/page-content', get_post_format() ); 

                    endwhile; 

                     else : ?>

                    <h2><?php esc_html_e('No Posts Found', 'kulebe') ?></h2>

                    <?php endif; ?> 
					
					<?php comments_template(); ?>
                    </div>
			  </div>
		  </section>
	  </div>
<?php get_footer(); ?>
