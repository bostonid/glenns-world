<?php define('WP_USE_THEMES', true); get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="content-wrapper">


    <div class="inner-wrap darkbg shadow cf">

      <div class="pad20">
        <h1><?php the_title(); ?></h1>
      </div>

    </div>

    <div class="inner-wrap whitebg shadow pad20">

      <article class="article-wrap cf">

          <?php the_content();?>

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      </article> <!-- /.article-wrap -->

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
