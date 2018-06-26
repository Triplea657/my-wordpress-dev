<?php

//function to create post ((post as in page/post/data)) type
function create_post_type() {
  //wp function to register post of type 'postType'
  register_post_type(
    //post type
    'customPostType',
    //wp function of arrays
    array(
      //assign arrays
      //array name public: true make publicly visible
      'public' => true,
      //labels for WP admin tools UI
      'labels' => array(
        //
        'name' => 'customPostName', /* __('postName') to be translatable */
        //singular name of posttype
        'singular' => "singlularCustomPostName"
      )
    )
  );

}

add_action('init','create_post_type');

?>
