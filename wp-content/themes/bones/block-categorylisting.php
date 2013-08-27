<?php 
global $post;
$announcement_results = array();
if($post->post_type != 'announcement'){
  $announcement_args = array();
  $announcement_args['limit'] = 1;
  $announcement_args['post_type'] = 'announcement';
  $announcement_args['orderby'] = 'ID';
  $announcement_Q = new GetPostsQuery($announcement_args);
  $announcement_results = $announcement_Q->get_posts();
}

$siesta_results = array();
if($post->post_type != 'siesta'){
$siesta_args = array();
$siesta_args['limit'] = 1;
$siesta_args['post_type'] = 'siesta';
$siesta_args['orderby'] = 'ID';
$siesta_Q = new GetPostsQuery($siesta_args);
$siesta_results = $siesta_Q->get_posts();
}

$event_results = array();
if($post->post_type != 'event'){
$event_args = array();
$event_args['post_type'] = 'event';
$event_args['orderby'] = 'ID';
$event_args['limit'] = 1;
$event_args['meta_key'] = 'eventdate';
$event_Q = new GetPostsQuery($event_args);
$event_results = $event_Q->get_posts();
}

$article_results = array();
if($post->post_type != 'post'){
$article_args = array();
$article_args['post_type'] = 'post';
$article_args['orderby'] = 'ID';
$article_args['limit'] = 1;
$article_Q = new GetPostsQuery($article_args);
$article_results = $article_Q->get_posts();
}

echo '<div class="categorymix-listing-wrapper  block white">';
  foreach ($announcement_results as $announcement){
    echo '<div class="announcement-wrapper" id="post-'. $announcement['ID'] .'">';
    echo '<div class="announcement-category-title">';
    echo '<h2 class="h2"><a href="'. $announcement['permalink'] .'" rel="bookmark" title="'. $announcement['post_title'] .'">'. $announcement['post_title'] .'</a></h2>';
    echo '</div>';
    
    echo '<div class="entry-content clearfix">';
//     if ( has_post_thumbnail($announcement['ID']) ) {
//       echo get_the_post_thumbnail($announcement['ID'], 'large');
//     }
    echo $announcement['post_excerpt'];
    echo '</div>';
    echo '<div><a href="/category/tiedotteet">Näytä kaikki tiedotteet</a></div>';
    echo '</div>';
  }
  foreach ($siesta_results as $siesta){
    echo '<div class="siesta-wrapper" id="post-'. $siesta['ID'] .'">';
    echo '<div class="siesta-category-title">';
    echo '<h2 class="h2"><a href="'. $siesta['permalink'] .'" rel="bookmark" title="'. $siesta['post_title'] .'">'. $siesta['post_title'] .'</a></h2>';
    echo '</div>';
  
    echo '<div class="entry-content clearfix">';
    echo $siesta['post_excerpt'];
    echo '</div>';
    echo '<div><a href="/category/siestat">Näytä kaikki siestat</a></div>';
    echo '</div>';
  }
  foreach ($event_results as $event){
    echo '<div class="event-wrapper" id="post-'. $event['ID'] .'">';
    echo '<div class="event-category-title">';
    echo '<h2 class="h2"><a href="'. $event['permalink'] .'" rel="bookmark" title="'. $event['post_title'] .'">'. $event['post_title'] .'</a></h2>';
    echo '</div>';
  
    echo '<div class="entry-content clearfix">';
    echo $event['post_excerpt'];
    echo '</div>';
    echo '<div><a href="/category/tapahtumat">Näytä kaikki tapahtumat</a></div>';
    echo '</div>';
  }
  foreach ($article_results as $article){
    echo '<div class="article-wrapper" id="post-'. $article['ID'] .'">';
    echo '<div class="article-category-title">';
    echo '<h2 class="h2"><a href="'. $article['permalink'] .'" rel="bookmark" title="'. $article['post_title'] .'">'. $article['post_title'] .'</a></h2>';
    echo '</div>';
  
    echo '<div class="entry-content clearfix">';
    echo $article['post_excerpt'];
    echo '</div>';
    echo '<div><a href="/category/paakirjoitus">Näytä kaikki artikkelit</a></div>';
    echo '</div>';
  }
echo '</div>';
?>