<?php get_header(); the_post(); ?>

    <?php get_sidebar(); ?>

    <!-- Wrap is the content to shift when toggling the sidebar. We wrap the
         content to avoid any CSS collisions with our real content. -->
    <div class="wrap">

      <?php get_template_part('masthead'); ?>

      <div class="container content">

        <?php if (is_single()||is_front_page()) { ?>

          <div class="post">
            <h1 class="post-title">
              <a href="<?php esc_url( get_permalink() );?>">
                <?php the_title(); ?>
              </a>
            </h1>
            
            <span class="post-date">
              <?php the_time( get_option( 'date_format' ) ); ?>
            </span>
            
            <?php the_content(); ?>
          
          </div>

          <hr>

          <?php 
              if ( comments_open() ) :

                comments_template(); 
              
              endif; 
          ?>

          <div class="pagination">
            <?php previous_post_link('%link', 'Older'); ?>
            <?php next_post_link('%link', 'Newer'); ?>
          </div>
          
        <?php }else{ ?>

          <div class="page">
            <h1 class="page-title">
              <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
          </div>

        <?php } ?>

      </div>
    </div>

<?php get_footer();