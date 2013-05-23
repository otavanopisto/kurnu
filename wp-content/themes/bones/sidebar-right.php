				<div id="sidebar-right" class="sidebar fourcol last clearfix" role="complementary">

          <ul class="sticky-listing">
          <?php include 'sidebar-stickylisting.php'; ?>
          </ul>

					<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-right' ); ?>
					<?php endif; ?>

				</div>