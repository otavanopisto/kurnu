				<div id="sidebar-tags" class="sidebar sixcol last clearfix" role="complementary">

          <div class="widget block white">
            <h3 class="tagcloud-title"><?php _e('Tags in Articles', "bonestheme") ?></h3>
            <div class="tagcloud">
              <?php 
                $args = array(
                'smallest' => 10,
                'largest' => 22,
                'number' => 30,
                'format' => flat
                );
                wp_tag_cloud( $args );
                

               ?>            
            </div>
          
          </div>

					<?php if ( is_active_sidebar( 'sidebar-tags' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-tags' ); ?>

					<?php endif; ?>

				</div>