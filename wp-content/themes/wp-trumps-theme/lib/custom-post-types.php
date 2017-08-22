<?php
/**
 * Register a top-trumps-card post type, with REST API support
 */
add_action( 'init', 'cw_trump_card_cpt' );
function cw_trump_card_cpt() {
  $args = array(
    'label'              => 'Trump Cards',
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
    'public'             => true,
    'show_in_rest'       => true,
    'rest_base'          => 'trump-cards',
    'supports'           => array( 'title', 'thumbnail', 'excerpt', )
  );
  register_post_type( 'trump-card', $args );
}
