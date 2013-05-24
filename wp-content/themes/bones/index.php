<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
        
          <?php the_breadcrumb(); ?>
        
          <?php get_sidebar('left'); ?>

					<div id="main" class="sevencol clearfix" role="main">
            
            <?php
              $the_query = new WP_Query( array ( 'post_type' => 'announcement'));
              // The Loop
              while ( $the_query->have_posts() ) :
              $the_query->the_post();
              $custom_value = get_post_custom_values('eventdate', get_the_ID());
              $originalDate = $custom_value[0];
              $formattedDate = date("d.m.", strtotime($originalDate));
              echo '<div class="announcement-wrapper block light">';
              echo '<div class="announcement-row">';
              echo '<div class="announcement-date">' . $formattedDate . '</div>';
              echo '<div class="announcement-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
              echo '</div>';
              echo '<div class="announcement-row">';
              echo '<div class="announcement-excerpt">' . get_the_excerpt() . '</div>';
              echo '</div>';
              echo '</div>';
              endwhile;
                
              wp_reset_postdata(); 

            ?>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

							<header class="article-header">

								<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="byline vcard"><?php
										printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>

							</header> <!-- end article header -->

							<section class="entry-content clearfix">
								<?php the_content(); ?>
							</section> <!-- end article section -->

							<footer class="article-footer">
								<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>

							</footer> <!-- end article footer -->

							<?php // comments_template(); // uncomment if you want to use them ?>

						</article> <!-- end article -->

						<?php endwhile; ?>

							<?php if (function_exists('bones_page_navi')) { ?>
									<?php bones_page_navi(); ?>
							<?php } else { ?>
									<nav class="wp-prev-next">
											<ul class="clearfix">
												<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
												<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
											</ul>
									</nav>
							<?php } ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</div> <!-- end #main -->

					<?php get_sidebar('right'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
