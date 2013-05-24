				<div id="sidebar-left" class="sidebar fivecol first clearfix" role="complementary">
        
          <?php include 'sidebar-siestalisting.php'; ?>
    
          <?php include 'sidebar-eventlisting.php'; ?>
          
					<?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-left' ); ?>
					<?php endif; ?>

				</div>