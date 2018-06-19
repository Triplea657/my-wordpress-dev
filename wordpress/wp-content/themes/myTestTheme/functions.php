<?php
//function to create post ((post as in page/post/data)) type
function create_post_type() {
  //wp function to register post of type 'postType'
  register_post_type('postType',
    //wp function of arrays
    array(
      //assign arrays
      //array name public: true make publicly visible
      'public' => true,
      //
      'labels' => array(
        'name' => 'postName', //__('postName') to be translatable
        'singular' => "singlularPostName"
      )
    )
  );

}

add_action('init','create_post_type');

?>
