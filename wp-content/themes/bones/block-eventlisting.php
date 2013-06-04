<?php
  $args = array();
  $args['post_type'] = 'event';
  $args['orderby'] = 'ID';
  $args['meta_key'] = 'eventdate';
  $Q = new GetPostsQuery($args);
  $results = $Q->get_posts();
  
  // The Loop
  $events = array();
  foreach ($results as $event){
    construct_events($event, $events);    
  }
  ksort($events);

  if(!empty($events)) echo '<div id="event-listing-wrapper" class="block white"><h3 class="event-column-title">Tulevat tapahtumat</h3>';
  foreach ($events as $event_date => $single_event){
    $formatted_date = date('d.m.', $event_date);
    echo '<div class="event-listing-container">';
    echo '<ul>';
    echo '<li class="sidebar-event">';
    echo '<div class="sidebar-event-row clearfix">';
    echo '<div class="sidebar-event-date">' . $formatted_date . '</div>';
    echo '<div class="sidebar-event-title"><a href="' . $single_event['permalink'] . '">' . $single_event['post_title'] . '</a></div>';
    echo '</div>';
    echo '<div class="sidebar-event-row">';
    echo '<div class="sidebar-event-excerpt">' . $single_event['post_excerpt']. '</div>';
    echo '</div>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
  }
  if(!empty($events)) echo '</div>';
?>
