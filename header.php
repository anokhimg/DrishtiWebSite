<?php
/**
 * The template for displaying the header
 * @subpackage Kulebe
 * @since Kulebe 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>>

		<!-- Preloader -->
		<div class="mask">
			<div id="loader" class="rotating"></div>
		</div>
		<!--/Preloader -->

		<!-- start header -->
		<header>
			<div class="row">
				<div class="large-2 medium-2 small-6 columns text-align-left">
					<?php if (ot_get_option( 'kulebe_logo' )) { ?>
					
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo ot_get_option( 'kulebe_logo' ); ?>" alt="<?php bloginfo('name'); ?>" /></a>

					<?php } elseif (ot_get_option( 'kulebe_logotext' )) { ?>

					<h1 class="logo"><a title="<?php bloginfo('name'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo ot_get_option( 'kulebe_logotext' ); ?></a></h1>

					<?php } else { ?>
				 
					<h1 class="logo"><a title="<?php bloginfo('name'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Kulebe','kulebe'); ?></a></h1>
					
					<?php } ?>
				
				</div>  
				<div class="medium-8 small-3 columns show-for-small-only text-right ">  
					<div class="menu-toggle-button" data-menu-id="navigation"><i class="fa fa-navicon"></i></div>
				</div>

				<?php 
					wp_nav_menu(array(
					  'theme_location' => 'main-menu',
					  'container' => '',
					  'fallback_cb' => 'show_top_menu',					  
					  'menu_class' => 'large-9 medium-8 small-12 columns medium-text-right menu-list',
					  'menu_id'    => 'navigation',
					  'walker' => new kulebe_main_menu(),
					  'echo' => true,
					  'depth' => 0 
					)); 
				   ?>
                 <?php if( get_option_tree( 'donate_button' ) == 'on') { ?>
                   <?php if( get_option_tree( 'donate_button_type' ) == 'default_type') { ?>
						<div class="donate-btn large-1 medium-2 small-3 columns medium-text-right">
							<a href="<?php echo esc_url(ot_get_option('kulebe_donate_button_url')); ?>"><?php echo esc_html(ot_get_option('kulebe_donate_button_text')); ?></a>
						</div>
                    <?php } else { ?>  
						<div class="donate-btn large-1 medium-2 small-3 columns medium-text-right">
							<a href="<?php echo esc_url(ot_get_option('kulebe_donate_button_url')); ?>" data-reveal-id="donate-modal"><?php echo esc_html(ot_get_option('kulebe_donate_button_text')); ?></a>
						</div>
                    <?php } ?>
					<?php $content = ''; ?>
					<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
					   <?php $content .= get_the_content(); ?>
					<?php  endwhile; ?>
					<?php endif; ?> 

                         <?php if( has_shortcode( $content, 'campaign_box' ) || has_shortcode( $content, 'campaign_form' ) ) { ?>

                     	 <?php } else { ?>

							<div id="donate-modal" class="reveal-modal" data-reveal aria-hidden="false" role="dialog">
							   <div class="container">
								  <div class="row">
		
			                         <?php echo do_shortcode(get_option_tree('kulebe_donate_modal_content')); ?>  
		
									<a class="close-reveal-modal" aria-label="Close">&#215;</a>
								   </div>   <!--end row -->
								</div> <!-- end container -->
							</div><!-- end donate modal -->

						<?php } ?>
                 <?php } ?>
			</div>
		</header>
		<!-- end header -->

		<!-- start site overlay -->
		<div class="site-overlay"></div>
		<!-- end site overlay -->