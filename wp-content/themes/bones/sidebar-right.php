				<div id="sidebar-right" class="sidebar fourcol last clearfix" role="complementary">

          <?php include 'block-stickylisting.php'; ?>

					<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-right' ); ?>
					<?php endif; ?>

				</div>