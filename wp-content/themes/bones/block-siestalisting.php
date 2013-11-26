<?php
  $siestas = get_siestas();
  $nearest = get_nearest_siesta($siestas);
  echo '<div id="siesta-listing-wrapper" class="block white">';
  $siestaArrayObject = new ArrayObject($siestas);
  $iterator = $siestaArrayObject->getIterator();
 
  while($iterator->valid()) {
    $single_siesta = $iterator->current();
    $formatted_date = date('d.m.', $iterator->key());
    $magic = ($nearest != $iterator->key()) ? 'siesta-hidden' : 'siesta-current';
    echo '<div class="'. $magic .' siesta">';
    echo '<div class="siesta-content-wrapper">';
    echo '<h3 class="siesta-column-title">Siestalla ' . $formatted_date . '</h3>';
    echo '<div class="sidebar-siesta-title"><a href="'. $single_siesta['guid'] . $single_siesta['id'] . '">' . $single_siesta['post_title'] . '</a></div>';
    echo '<div class="sidebar-siesta-excerpt">' . $single_siesta['post_content'] . '</div>';    
    $next_key = $iterator->key() + 1;
    if($iterator->offsetExists($next_key)){
      echo '<div class="siesta-separator"></div>';
      $iterator->next();
      $single_siesta = $iterator->current();
      $formatted_date = date('d.m.', $iterator->key());
      echo '<div class="sidebar-siesta-title"><a href="'. $single_siesta['guid'] . $single_siesta['id'] . '">' . $single_siesta['post_title'] . '</a></div>';
      echo '<div class="sidebar-siesta-excerpt">' . $single_siesta['post_excerpt'] . '</div>';
    }
    echo '</div>';
    echo '</div>'; 
    $iterator->next();
  }
  $today = strtotime(date('Y-m-d', time()));
  if($nearest < $today){
    $formatted_date = date('d.m.', $today);
    echo '<div class="siesta-current siesta">';
    echo '<div class="siesta-content-wrapper">';
    echo '<h3 class="siesta-column-title">Siestalla ' . $formatted_date . '</h3>';
    echo '<div class="sidebar-siesta-title">Ajankohtaista siestaa ei löytynyt</div>';
    echo '<div class="sidebar-siesta-excerpt"></div>';
    echo '</div>';
    echo '</div>';
  }
  if($nearest < today) {
    echo '<span class="prev-siesta" title="Edellinen siesta"></span>';
    echo '<span style="display:none;" class="next-siesta" title="Seuraava siesta"></span>';
  }else{
    echo '<span class="prev-siesta" title="Edellinen siesta"></span>';
    echo '<span class="next-siesta" title="Seuraava siesta"></span>';
  }
  echo '</div>';  
?>
