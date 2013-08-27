				<div id="sidebar-categories" class="sidebar sixcol clearfix" role="complementary">
        
          <?php include 'block-categorylisting.php'; ?>
    
          <?php if ( is_active_sidebar( 'sidebar-categories' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-categories' ); ?>
          <?php endif; ?>
    
				</div>