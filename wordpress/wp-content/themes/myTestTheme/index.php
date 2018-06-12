<?php define( 'WP_USE_THEMES', false); get_header(); ?>




  <body>

    <!--header 1-->
    <h1>
      <?php
        //return site title
        echo get_bloginfo('title');
       ?>
    </h1>

    <!--header 2-->
    <h2>
      <?php
        //return site description
        echo get_bloginfo('description');
       ?>
    </h2>


    <p>
      <?php ?>
    </p>

    <?php
      //if any posts
      if(have_posts()):
        //while has posts, begin while loop
        while(have_posts()): the_post();
        $count = 0;
    ?>

    <!-- Loop Contents Here -->
    <h3> <?php the_title() ?>Loop number  </h3>
    <?php
      the_content();
    ?>

  <?php
    //end while loop
    endwhile; else: ?>
    <p><?php
    //if no posts matched
    esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  </body>
</html>
