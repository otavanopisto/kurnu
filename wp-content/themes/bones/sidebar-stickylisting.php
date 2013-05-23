<?php
//   require_once('../../../plugins/custom-content-type-manager/includes/GetPostsQuery.php');
  
//   $q_args = array();
//   $search_parameters_str = $instance['parameters'];
//   parse_str($search_parameters_str, $q_args);
  
//   //print_r($q_args); exit;
//   if (isset($q_args['include']) && empty($q_args['include'])) {
//     unset($q_args['include']);
//   }
  
//   $Q = new GetPostsQuery();
  
//   $results = $Q->get_posts($q_args);
  $the_query = new WP_Query(array('post_type' => 'any', 'meta_key' => 'sticky'));
  // The Loop
  while ( $the_query->have_posts() ) :
  $the_query->the_post();
//   $custom_value = get_post_custom_values('eventdate', get_the_ID());
//   $originalDate = $custom_value[0];
//   $formattedDate = date("d.m", strtotime($originalDate));
  echo '<li class="sidebar-sticky-wrapper">';
  echo '<div class="sidebar-sticky-row">';
  // echo '<div class="sidebar-sticky-date">' . $formattedDate . '</div>';
  echo '<div class="sidebar-sticky-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
  echo '</div>';
  echo '<div class="sidebar-sticky-row">';
  echo '<div class="sidebar-sticky-excerpt">' . get_the_excerpt() . '</div>';
  echo '</div>';
  echo '</li>';
  endwhile;

  wp_reset_postdata();

?>
