<?php
  $args = array();
  $args['limit'] = 3;
  $args['post_type'] = 'announcement';
  $args['orderby'] = 'ID';
  $Q = new GetPostsQuery($args);
  $results = $Q->get_posts();
  
  // The Loop
  if(!empty($results)) echo '<div id="announcement-listing-wrapper">';
  foreach ($results as $announcement){
    echo '<div class="announcement-wrapper block white">';
    echo '<div class="announcement-row">';
    echo '<div class="announcement-title"><a href="' . $announcement['permalink'] . '">' . $announcement['post_title'] . '</a></div>';
    echo '</div>';
    echo '<div class="announcement-row">';
    echo '<div class="announcement-excerpt">' . $announcement['post_excerpt'] . '</div>';
    echo '</div>';
    echo '</div>';
  }
  if(!empty($results)) echo '</div>';

?>
