				<div id="sidebar-announcement" class="sidebar sixcol clearfix" role="complementary">
        
          <?php include 'block-announcementlisting.php'; ?>
    
          <?php if ( is_active_sidebar( 'sidebar-announcement' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-announcement' ); ?>
          <?php endif; ?>
    
				</div>