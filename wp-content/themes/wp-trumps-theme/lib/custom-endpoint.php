<?php

/**
 * Write a top-trumps card custom endpoint
 */

add_action( 'rest_api_init', function () {
  register_rest_route( 'wp-trumps/v1', '/cards', array(
    'methods' => 'GET',
    'callback' => 'cw_get_tidy_trump_cards',
  ) );
} );

function cw_get_tidy_trump_cards() {

  $post_query = new WP_Query( array( 
    'post_type' => 'trump-card', 
    'posts_per_page' => -1
  ));
  $posts = $post_query->posts;

  //build tidy cards object
  $cards = array();
  foreach($posts as $post) {
    
    //get acf_royal-trump-categories field group values (ratings) - no direct way to do this for some reason
    $ratings_fields = apply_filters('acf/field_group/get_fields', array(), 'acf_royal-trump-categories');
    $ratings = array();
    $acf = get_fields($post->ID);
    foreach($ratings_fields as $field) {
      $ratings[$field['name']] = $acf[$field['name']];
    }

    $card = array(
      'name' => $post->post_title,
      'picture' => get_field('image', $post->ID),
      'ratings' => $ratings
    );

    array_push($cards, $card);
  }
  return $cards;
}
