<?php
  $the_query = new WP_Query(array('post_type' => 'any', 'meta_key' => 'sticky', 'meta_value' => '1'));

  if ( $the_query->have_posts()) {
    echo '<div class="sticky-listing-wrapper block dark">';
    echo '<h3 class="sticky-column-title">Toimituksen valinnat</h3>';
  }

  // The Loop
  while ( $the_query->have_posts() ) :
  $the_query->the_post();
//   $custom_value = get_post_custom_values('eventdate', get_the_ID());
//   $originalDate = $custom_value[0];
//   $formattedDate = date("d.m.", strtotime($originalDate));
  echo '<div class="sticky-listing-container">';
  echo '<ul>';
  echo '<li class="sidebar-sticky">';
  // echo '<div class="sidebar-sticky-date">' . $formattedDate . '</div>';
  echo '<div class="sidebar-sticky-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
//   echo '<div class="sidebar-sticky-row">';
//   echo '<div class="sidebar-sticky-excerpt">' . get_the_excerpt() . '</div>';
//   echo '</div>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  endwhile;

  if ( $the_query->have_posts()) {
    echo '</div>';
  }

  wp_reset_postdata();

?>
