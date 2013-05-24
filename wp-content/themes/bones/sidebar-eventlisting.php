<?php
//   $dt = new DateTime('now');
  $today = date('Y-m-d');
  $the_query = new WP_Query( array ( 'post_type' => 'event', 'posts_per_page' => 5, 'orderby' => 'meta_value', 'meta_key' => 'eventdate', 'order' => 'ASC', 
    'meta_query' => array(
        array(
            'key' => 'eventdate',
            'value' => $today,
            'type' => 'date',
            'compare' => '>='
        )
    )
  ));

  // The Loop
  while ( $the_query->have_posts() ) :
  $the_query->the_post();
  $custom_value = get_post_custom_values('eventdate', get_the_ID());
  $originalDate = $custom_value[0];
  $formattedDate = date("d.m", strtotime($originalDate));
  echo '<li class="sidebar-event-wrapper">';
  echo '<div class="sidebar-event-row">';
  echo '<div class="sidebar-event-date">' . $formattedDate . '</div>';
  echo '<div class="sidebar-event-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
  echo '</div>';
  echo '<div class="sidebar-event-row">';
  echo '<div class="sidebar-event-excerpt">' . get_the_excerpt() . '</div>';
  echo '</div>';
  echo '</li>';
  endwhile;

  wp_reset_postdata();

?>
