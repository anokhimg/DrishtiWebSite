            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post">
							<div class="medium-12 text-center">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
								<ul class="tags">
									<li><i class="fa fa-user"></i><?php the_author(); ?> </li>
									<li><a href="<?php the_permalink(); ?>"><i class="fa fa-clock-o"></i><?php the_time('F j, Y'); ?></a> </li>
									<?php if ( has_category() ) { ?>
									<li><i class="fa fa-folder-o"></i><?php the_category(', '); ?> </li>
									<?php } ?>
									<li><?php the_tags( ' <i class="fa fa-tags"></i>', ',', ' '); ?></li>

								</ul>
							</div>
						    <div class="flex-video"> 
								<?php  
								if (get_post_meta( get_the_ID(), 'klb_blog_video_type', true ) == 'vimeo') {  
								  echo '<iframe src="http://player.vimeo.com/video/'.get_post_meta( get_the_ID(), 'klb_blog_video_embed', true ).'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="350" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';  
								}  
								else if (get_post_meta( get_the_ID(), 'klb_blog_video_type', true ) == 'youtube') {  
								  echo '<iframe width="350" height="200" src="http://www.youtube.com/embed/'.get_post_meta( get_the_ID(), 'klb_blog_video_embed', true ).'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>';  
								}  
								else {  
									echo ' '.get_post_meta( get_the_ID(), 'klb_blog_video_embed', true ).' '; 
								}  
								?> 
						    </div>

                        <?php the_excerpt(); ?> 
                        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                </div>
             </article>