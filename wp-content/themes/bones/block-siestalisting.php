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
    echo '<div class="siesta-content-wrapper block white">';
    echo '<h3 class="siesta-column-title">Siestalla ' . $formatted_date . '</h3>';
    echo '<div class="sidebar-siesta-title"><a href="'. $single_siesta['permalink'] .'">' . $single_siesta['post_title'] . '</a></div>';
    echo '<div class="sidebar-siesta-excerpt">' . $single_siesta['post_excerpt'] . '</div>';
    echo '<span class="prev-siesta" title="Edellinen siesta"><a href="#"></a></span>';
    echo '<span class="next-siesta" title="Seuraava siesta"><a href="#"></a></span>';
    echo '</div>';
    echo '</div>';
  }
  
?>
