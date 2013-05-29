<?php
  $args = array();
  $args['post_type'] = 'siesta';
  $args['orderby'] = 'ID';
  $args['meta_key'] = 'eventdate';
  $Q = new GetPostsQuery($args);
  $results = $Q->get_posts();
  
  // The Loop
  $siestas = array();
  foreach ($results as $siesta){
    construct_siestas($siesta, $siestas);    
  }
  ksort($siestas);
  $nearest = get_nearest_siesta($siestas);
  foreach ($siestas as $siesta_date => $single_siesta){
    $formatted_date = date('d.m.', $siesta_date);
    $magic = ($nearest != $siesta_date) ? 'siesta-hidden' : 'siesta-current';
    echo '<div class="'. $magic .' siesta">';
    echo '<div id="siesta-content" class="siesta-listing-wrapper block light">';
    echo '<h3 class="siesta-column-title">Siestalla ' . $formatted_date . '</h3>';
    echo '<div class="sidebar-siesta-title"><a href="'. $single_siesta['permalink'] .'">' . $single_siesta['post_title'] . '</a></div>';
    echo '<div class="sidebar-siesta-excerpt">' . $single_siesta['post_excerpt'] . '</div>';
    echo '<span class="prev-siesta"><a href="#"><< Prev</a></span>';
    echo '<span class="next-siesta"><a href="#">Next >></a></span>';
    echo '</div>';
    echo '</div>';
  }
  


?>
