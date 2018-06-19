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


    <!--p>
      <?php ?>
    </p-->

    <!-- begin php loop -->
    <?php
      //if any posts
      if(have_posts()):
        //while has posts, begin while loop
        while(have_posts()): the_post();
    ?>

    <!-- Loop this -->
    <h3>
      <a href="<?php the_permalink(); ?>">
        <?php
          //title info on main page
          the_title();
        ?>
      </a>
    </h3>

  <!-- end php loop -->
  <?php
    //end while loop
    endwhile; else:
  ?>
  <p>
    <?php
      //if no posts matched
      esc_html_e('Sorry, no posts matched your criteria.');
    ?>
  </p>
  <?php endif; ?>
  <!--end php loop-->

  </body>
</html>
