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
                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
                       <div class="blog-img">
					      <?php the_post_thumbnail('post-thumb'); ?>
                       </div>
				     <?php } ?>

                        <?php the_excerpt(); ?> 
                        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                </div>
             </article>