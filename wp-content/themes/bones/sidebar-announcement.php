				<div id="sidebar-article" class="sidebar fivecol clearfix" role="complementary">
        
          <?php include 'block-announcementlisting.php'; ?>
    
          <?php if ( is_active_sidebar( 'sidebar-announcement' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-announcement' ); ?>
          <?php endif; ?>
    
				</div>