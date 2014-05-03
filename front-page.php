<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Glenn Hodgkinson - Developer, Designer, Educator, Speaker, Coffee Drinker.</title>
  <meta name="author" content="Glenn Hodgkinson">
  <link rel="shortcut icon" type="image/ico" href="favicon.ico">
</head>

<body>

  <header id="page-header" class="cf">
    <div class="inner-wrap pad20">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo-long.png" class="logo float-left">

      <div class="mobile-only align-right">
        <span class="menu-trigger"></span>
      </div>

      <nav id="top-nav" class="mob-menu">
        <ul>
          <li><a href="/about">About</a></li>
          <li><a href="/design">Design</a></li>
          <li><a href="/develop">Develop</a></li>
          <li><a href="/educate">Educate</a></li>
          <li><a href="/speak">Speak</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </div> <!-- /.inner-wrap -->
  </header> <!-- /#page-header -->

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

      <article class="article-wrap">
        <p>Oh, hello!</p>
        <p>How embarrassing, this website is not complete as yet and so the content is really just placeholder content. Not particularly interesting, but seeing as though nobody reads anyway it probably doesn't really matter a great deal. In fact, if you are reading this sentence you should probably pause for a moment and congratulate yourself.</p>
        <p>Okay, so you are still reading huh? Quite the overachiever aren't you.</p>
        <p>Have you not discovered Google Images? It's pretty cool, you can look at pretty pictures and there are no words to get in the way. It's real nice.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, sequi, aliquid magnam temporibus iste assumenda vitae nihil consequatur minus recusandae rerum praesentium neque animi qui quo natus unde tempora reiciendis!</p>
        <p>There we go! That put a stop to all that reading nonsense...didn't it???</p>
        <p>Still don't believe me? Have a look around and read some of this stuff. It took just a few minutes to put together and is only skin deep.</p>
        <p><a href="https://twitter.com/bostonid">Hassle me on Twitter</a> and I will try to get this done. <strong>#finishitglenn</strong></p>
        </article> <!-- /.article-wrap -->

    </div> <!-- /.inner-wrap -->

  </div> <!-- /.content-wrapper -->

  <div id="page-footer" class="inner-wrap">
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
