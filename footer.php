			<!-- start footer -->
			<footer>
				<div class="row">
					<div class="medium-12 text-center columns">
						<?php if (ot_get_option( 'kulebe_logo' )) { ?>
						
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo ot_get_option( 'kulebe_logo' ); ?>" alt="<?php bloginfo('name'); ?>" /></a>

						<?php } elseif (ot_get_option( 'kulebe_logotext' )) { ?>

						<h1 class="logo"><a title="<?php bloginfo('name'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo ot_get_option( 'kulebe_logotext' ); ?></a></h1>

						<?php } else { ?>
					 
						<h1 class="logo"><a title="<?php bloginfo('name'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Kulebe','kulebe'); ?></a></h1>
						
						<?php } ?>
			   <?php 
				$clients = ot_get_option( 'kulebe_socialicons' );
				$clientslist = ot_get_option( 'kulebe_socialicons' );
				 if ($clientslist) { ?>
						<div class="medium-4 columns medium-centered">
							<ul class="medium-block-grid-5 small-block-grid-5 social-links">
					   <?php foreach($clientslist as $key => $value) {
						  if ($value['kulebe_socialicon']) { 
						   echo '<li><a href="'.esc_url($value['kulebe_sociallink']).'" target="_blank"><i class="fa fa-'.$value['kulebe_socialicon'].'"></i></a></li>';
						  } else {
		
						  }
						   
					   } ?>
							</ul>
						</div>
			   <?php } ?>	

						<p class="white">
						  <?php  $allowed_html = array(
								'a' => array(
									'href' => array(),
									'title' => array(),
									'class' => array(),
								), );	?>						
						  <?php echo  wp_kses(ot_get_option( 'kulebe_copyright1' ),$allowed_html); ?></p>
					</div>
				</div>
			</footer>
			<!-- end footer -->

		<!-- end #wrapper -->

         <style type="text/css">
        <?php echo ot_get_option( 'kulebe_css' ); ?>
        </style>

      
        <script type="text/javascript">
        <?php echo ot_get_option( 'kulebe_js' ); ?>
        </script>

        <?php wp_footer(); ?>

	</body>
</html>