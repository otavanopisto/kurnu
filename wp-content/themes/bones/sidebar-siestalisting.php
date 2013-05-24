<?php
  $the_query = new WP_Query( array ( 'post_type' => 'siesta'));

  if ( $the_query->have_posts()) {
    echo '<div class="siesta-listing-wrapper block light">';
    echo '<h3 class="siesta-column-title">Siestalla t&auml;n&auml;&auml;n</h3>';
  }

  // The Loop
  while ( $the_query->have_posts() ) :
  $the_query->the_post();
  $custom_value = get_post_custom_values('eventdate', get_the_ID());
  $originalDate = $custom_value[0];
  $formattedDate = date("d.m", strtotime($originalDate));
  echo '<div class="siesta-listing-container">';
  echo '<ul>';
  echo '<li class="sidebar-siesta-row">';
  echo '<div class="sidebar-siesta-row-wrapper">';
  echo '<div class="sidebar-siesta-date">' . $formattedDate . '</div>';
  echo '<div class="sidebar-siesta-title">' . get_the_title() . '</div>';
  echo '</div>';
  echo '<div class="sidebar-siesta-row">';
  echo '<div class="sidebar-siesta-excerpt">' . get_the_excerpt() . '</div>';
  echo '</div>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  endwhile;

  if ( $the_query->have_posts()) {
    echo '</div>';
  }

  wp_reset_postdata();

?>
