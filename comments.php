<?php
/**
 * Comments.php
 * The template for displaying Comments.
 * @package WordPress
 * @subpackage Kulebe
 * @subpackage Kulebe 1.0
 */
?>

<?php
	/*
	 * If the current post is protected by a password and
	 * the visitor has not yet entered the password we will
	 * return early without loading the comments.
	 */
	if ( post_password_required() )
		return;
?>

	<!-- Comments -->


	<?php if ( have_comments() ) : ?>
<section id="comments" class="opacityRun">
           <div class="white-space-30"></div>
           <h3 class="text-center">
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'kulebe' ),
					number_format_i18n( get_comments_number() ),  '<strong>'. get_the_title() .'</strong>'  );
			?>
          </h3>
		  <div class="titleline"></div>
          <div class="white-space-10"></div>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation">
			<h1 class="assistive-text"><?php esc_html_e( 'Comment navigation', 'kulebe' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'kulebe' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'kulebe' ) ); ?></div>
		</nav><!-- #comment-nav-before .site-navigation .comment-navigation -->
		<?php endif; // check for comment navigation ?>

         <ul class="user-comments">
		
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use kulebe_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define kulebe_comment() and that will be used instead.
				 * See kulebe_comment() in inc/template-tags.php for more.
				 */
				wp_list_comments( array( 'callback' => 'kulebe_comment' ) );
			?>
         </ul>
		<!-- .commentlist -->


		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav role="navigation" id="comment-nav-below" class="site-navigation comment-navigation">
			<h1 class="assistive-text"><?php esc_html_e( 'Comment navigation', 'kulebe' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'kulebe' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'kulebe' ) ); ?></div>
		</nav> 
		<?php endif; // check for comment navigation ?>
 </section>
	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments text-center"><?php esc_html_e( 'Comments are closed.', 'kulebe' ); ?></p>
	<?php endif; ?>

	<?php if ( comments_open() ) : ?>
 		

   
		<div class="clearfix">
			<div class="pull-right"><small><?php cancel_comment_reply_link(); ?></small></div>
		</div>
		 
		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p class="alert">You must be <a href="<?php echo esc_url(wp_login_url( get_permalink() )); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>


          <div id="respond" class="opacity">
             <?php comment_form(); ?>
		  </div>
		<?php endif; // If registration required and not logged in ?>
		
	 
	<?php endif; // if you delete this the sky will fall on your head ?>

	<!-- Comments -->