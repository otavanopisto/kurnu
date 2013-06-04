				<div id="sidebar-article" class="sidebar fivecol clearfix" role="complementary">
        
          <?php include 'block-eventlisting.php'; ?>
    
          <?php if ( is_active_sidebar( 'sidebar-event' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-event' ); ?>
          <?php endif; ?>
    
				</div>