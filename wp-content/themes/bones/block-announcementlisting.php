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
    $background = ($announcement['thumbnail_src']) ? 'style="background-image: url('. $announcement['thumbnail_src'] .')"' : '';
    if ($background == ''){
      $background = 'style="background-image: url(\''.get_bloginfo('template_directory').'/library/images/default-announcement.png\')"';
    } 
    echo '<div class="announcement-wrapper">';
    echo '<div class="announcement-container block white" '. $background .'>';
    echo '<div class="announcement-row-wrapper">';
    echo '<div class="announcement-row">';
    echo '<div class="announcement-title"><a href="' . $announcement['permalink'] . '">' . $announcement['post_title'] . '</a></div>';
    echo '</div>';
    echo '<div class="announcement-row">';
    echo '<div class="announcement-excerpt">' . $announcement['post_excerpt'] . '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
  if(!empty($results)) echo '</div>';

?>
