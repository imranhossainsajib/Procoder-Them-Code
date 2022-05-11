          <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>

              <div class="blog_area">
                  <div class="post_thumb">
                    <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                  </div>
                  <div class="post_details">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php  echo get_the_date(); ?></p>
                    <?php the_excerpt(); ?>
                  </div>
              </div>
          <?php endwhile;
            else :
              _e('No post found');
            endif; ?>
          <div id="page_nav">
            <?php if ('ali_pagenav') {ali_pagenav(); } else{ ?>
                <?php next_posts_link(); ?>
                <?php previous_posts_link(); ?>
            <?php } ?>
          </div>