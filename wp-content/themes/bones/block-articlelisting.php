<?php 
$args = array();
$args['limit'] = 5;
$args['post_type'] = 'post';
$args['exclude'] = get_the_ID();
$args['orderby'] = 'ID';
$Q = new GetPostsQuery($args);
$results = $Q->get_posts();


echo '<div class="article-listing-wrapper  block white">';
foreach ($results as $article){
  echo '<div class="article-wrapper" id="post-'. $article['ID'] .'" role="article">';
  echo '<div class="article-title">';
  echo '<h1 class="h2"><a href="'. $article['permalink'] .'" rel="bookmark" title="'. $article['post_title'] .'">'. $article['post_title'] .'</a></h1>';
  echo '</div>';
  
  echo '<div class="entry-content clearfix">';
  if ( has_post_thumbnail($article['ID']) ) {
    echo get_the_post_thumbnail($article['ID'], 'large');
  }
  echo $article['post_excerpt'];
  echo '</div>';
  echo '</div>';
}
echo '</div>';
?>