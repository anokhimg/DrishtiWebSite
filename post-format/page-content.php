            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post">

					<?php the_content(); ?> 
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                </div>
             </article>