 <?php /*
Template Name: Blog Landing Page
*/ ?>
<?php define('WP_USE_THEMES', true); get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="content-wrapper">


    <div class="inner-wrap darkbg shadow cf">

      <div class="pad20">
        <h1><?php the_title(); ?></h1>
      </div>

    </div>

    <div class="inner-wrap whitebg shadow pad20">

      <article class="article-wrap">

          <?php the_content();?>

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      </article> <!-- /.article-wrap -->

      <section>
        <?php
          $args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'post_date' );
          $postslist = get_posts( $args );
          foreach ( $postslist as $post ) :
            setup_postdata( $post ); ?>
            <article class="article-excerpt">
              <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
              <?php the_excerpt('read more'); ?>
            </article> <!-- /.article-excerpt -->
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
      </section>

      <p class="mobile-only align-right"><a href="#page-header">back to top</a></p>

    </div> <!-- /.inner-wrap -->

  </div> <!-- /.content-wrapper -->

  <div id="page-footer" class="inner-wrap">
    <?php wp_footer(); ?>
    <p class="align-center">&copy2014 Glenn Hodgkinson</p>
  </div>

  <script>
    jQuery(function(){
      jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > 75) {
              jQuery(".back-to-top:hidden").css('visibility','visible');
              jQuery(".back-to-top:hidden").fadeIn('slow');
          }
          else {
              jQuery(".back-to-top:visible").fadeOut("slow");
          }
      });
  });
  </script>

  <script>
      jQuery(".menu-trigger").click(function () {
        jQuery(".mob-menu").slideToggle("fast");
      });
  </script>

</body>

</html>
