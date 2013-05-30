<?php
  $today = date('Y-m-d');
  $the_query = new WP_Query( array ( 'post_type' => 'announcement', 'posts_per_page' => 3, 'orderby' => 'meta_value', 'meta_key' => 'eventdate', 'order' => 'ASC',
    'meta_query' => array(
      array(
        'key' => 'eventdate',
        'value' => $today,
        'type' => 'date',
        'compare' => '>='
      )
    )
  ));

  // $the_query = new WP_Query( array ( 'post_type' => 'announcement'));
  // The Loop

  while ( $the_query->have_posts() ) :
  $the_query->the_post();
  $custom_value = get_post_custom_values('eventdate', get_the_ID());
  $originalDate = $custom_value[0];
  $formattedDate = date("d.m.", strtotime($originalDate));
  echo '<div class="announcement-wrapper block bright-2">';
  echo '<div class="announcement-row">';
  echo '<div class="announcement-date">' . $formattedDate . '</div>';
  echo '<div class="announcement-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
  echo '</div>';
  echo '<div class="announcement-row">';
  echo '<div class="announcement-excerpt">' . get_the_excerpt() . '</div>';
  echo '</div>';
  echo '</div>';
  endwhile;

  wp_reset_postdata();

?>
