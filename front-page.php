<?php
/*
 * Theme Front Page 
*/


get_header(); ?>

  <section id="slider_area">
    <div class="slider">

    <!-- 
       <img src="<?php echo get_template_directory_uri(); ?>/img/coffee1.jpg" title="Funky roots"></div>
  <div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/coffee2.jpg" title="The long and winding road"></div>
  <div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/coffee3.jpg" title="Happy trees"></div> -->

    <?php 
        query_posts('post_type=slider&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div>
          <?php echo the_post_thumbnail('slider') ?>
        </div>

        <?php 
          endwhile;
          endif;
        ?>

    </div>

  </section>

  <section id="service_area">
    <div class="container">
      <div class="row">
        <?php 
        query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div class="col-md-4">
          <div class="child_service">
          <h2><?php the_title(); ?></h2>
          <?php echo the_post_thumbnail('service') ?>
          <?php the_excerpt(  ); ?>
          </div>
        </div>

        <?php 
          endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>



<?php get_footer(); ?>