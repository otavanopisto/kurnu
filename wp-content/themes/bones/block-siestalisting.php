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
  if(!empty($siestas)) echo '<div id="siesta-listing-wrapper" class="block white">';
  foreach ($siestas as $siesta_date => $single_siesta){
    $formatted_date = date('d.m.', $siesta_date);
    $magic = ($nearest != $siesta_date) ? 'siesta-hidden' : 'siesta-current';
    echo '<div class="'. $magic .' siesta">';
    echo '<div class="siesta-content-wrapper">';
    echo '<h3 class="siesta-column-title">Siestalla ' . $formatted_date . '</h3>';
    echo '<div class="sidebar-siesta-title"><a href="'. $single_siesta['permalink'] .'">' . $single_siesta['post_title'] . '</a></div>';
    echo '<div class="sidebar-siesta-excerpt">' . $single_siesta['post_excerpt'] . '</div>';
    echo '<span class="prev-siesta" title="Edellinen siesta"></span>';
    echo '<span class="next-siesta" title="Seuraava siesta"></span>';
    echo '</div>';
    echo '</div>';
  }
  $today = strtotime(date('Y-m-d', time()));
  if($nearest < $today){
    $formatted_date = date('d.m.', $today);
    echo '<div class="siesta-current siesta">';
    echo '<div class="siesta-content-wrapper">';
    echo '<h3 class="siesta-column-title">Siestalla ' . $formatted_date . '</h3>';
    echo '<div class="sidebar-siesta-title">Ajankohtaista siestaa ei löytynyt</div>';
    echo '<div class="sidebar-siesta-excerpt">Voit selata vanhempia siestoja!</div>';
    echo '<span class="prev-siesta" title="Edellinen siesta"></span>';
    echo '</div>';
    echo '</div>';
  }
  if(!empty($siestas)) echo '</div>';  
?>
