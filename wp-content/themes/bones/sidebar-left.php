				<div id="sidebar-left" class="sidebar fivecol first clearfix" role="complementary">
        
          <ul class="siesta-listing">
          <?php include 'sidebar-siestalisting.php'; ?>
          </ul>
          
          <ul class="event-listing">
          <?php include 'sidebar-eventlisting.php'; ?>
          </ul>
          
					<?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-left' ); ?>

					<?php endif; ?>

				</div>