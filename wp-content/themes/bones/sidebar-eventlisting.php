<?php
  $the_query = new WP_Query( array ( 'post_type' => 'event', 'posts_per_page' => 5));
  // The Loop
  while ( $the_query->have_posts() ) :
  $the_query->the_post();
  $custom_value = get_post_custom_values('eventdate', get_the_ID());
  echo '<li class="sidebar-event-wrapper">';
  echo '<div class="sidebar-event-row">';
  echo '<div class="sidebar-event-date">' . $custom_value[0] . '</div>';
  echo '<div class="sidebar-event-title">' . get_the_title() . '</div>';
  echo '</div>';
  echo '<div class="sidebar-event-row">';
  echo '<div class="sidebar-event-excerpt">' . get_the_excerpt() . '</div>';
  echo '</div>';
  echo '</li>';
  endwhile;

  /* Restore original Post Data
   * NB: Because we are using new WP_Query we aren't stomping on the
   * original $wp_query and it does not need to be reset.
   */
  wp_reset_postdata();

?>
