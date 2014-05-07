<?php define('WP_USE_THEMES', true); get_header(); ?>

  <div class="content-wrapper">

    <div class="inner-wrap darkbg shadow cf">

      <div class="col8 pad20">
        <h2 class="big">I <span class="strike fade25">am a developer, designer, author, ninja,</span> make stuff on the web.</h2>
      </div>

      <div class="col4 last">
        <img src="<?php bloginfo('template_directory'); ?>/images/glenn-ikea.jpg" alt="Glenn at Ikea" class="force-block">
      </div>

    </div>

    <div class="inner-wrap whitebg shadow pad20">

      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="article-wrap cf">
          <?php the_content(); ?>
        </article> <!-- /.article-wrap -->

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

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
