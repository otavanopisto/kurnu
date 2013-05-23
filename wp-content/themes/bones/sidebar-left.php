				<div id="sidebar-left" class="sidebar fivecol first clearfix" role="complementary">
        
          <h3 class="siesta-column-title">Siestalla t&auml;n&auml;&auml;n</h3>
          <ul class="siesta-listing">
          <?php include 'sidebar-siestalisting.php'; ?>
          </ul>
          
          <h3 class="event-column-title">Tulevat tapahtumat</h3>
          <ul class="event-listing">
          <?php include 'sidebar-eventlisting.php'; ?>
          </ul>
          
					<?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-left' ); ?>
					<?php endif; ?>

				</div>