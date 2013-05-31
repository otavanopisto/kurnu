<div class="article-listing-wrapper  block white">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="article-wrapper" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
    
      <div class="article-title">
    
        <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        
      </div>
    
      <div class="entry-content clearfix">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
      
        <?php the_excerpt(); ?>
      </div>
    
    </div>
    
  <?php endwhile; ?>
  
  <?php endif; ?>
  
</div>