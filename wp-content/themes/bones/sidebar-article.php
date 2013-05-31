				<div id="sidebar-article" class="sidebar fivecol clearfix" role="complementary">
        
          <?php include 'block-articlelisting.php'; ?>
    
          <?php if ( is_active_sidebar( 'sidebar-article' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-article' ); ?>
          <?php endif; ?>
    
				</div>