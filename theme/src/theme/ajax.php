<?php

function load_more_posts() {
  $args = array(
    'posts_per_page' => 2,
    'paged' => 2,
  );

  $posts = new WP_Query($args);
  
  $response = '';

  if ( $posts->have_posts() ) {
    while ( $posts->have_posts() ) {
      $posts->the_post();
      $response .= get_template_part('partials/post');
    }
  }

  echo $response;

  die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
