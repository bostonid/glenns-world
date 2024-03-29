 <?php /*
Template Name: Blog Landing Page
*/ ?>
<?php define('WP_USE_THEMES', true); get_header(); ?>

  <div class="content-wrapper">


    <div class="inner-wrap darkbg shadow cf">

      <div class="pad20">
        <h1>Blog</h1>
      </div>

    </div>

    <div class="inner-wrap whitebg shadow pad20">
      <?php get_search_form(); ?>

    <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-excerpt cf">
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt('read more'); ?>
      </article> <!-- /.article-excerpt -->
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      <!-- Pager navigation starts here -->
      <div id="blog-pager">
        <span class="left"><?php previous_posts_link('&laquo; newer posts'); ?></span>
        <span class="right"><?php next_posts_link('older posts &raquo;'); ?></span>
      </div>
      <p class="mobile-only align-right"><a href="#page-header">back to top</a></p>

    </div> <!-- /.inner-wrap -->

  </div> <!-- /.content-wrapper -->

  <div id="page-footer" class="inner-wrap">
    <?php wp_footer(); ?>
    <p class="align-center">&copy;2014 Glenn Hodgkinson</p>
  </div>

  <script>
      jQuery(".menu-trigger").click(function () {
        jQuery(".mob-menu").slideToggle("fast");
      });
  </script>

</body>

</html>
