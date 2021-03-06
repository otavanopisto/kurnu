<?php get_header(); ?>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">
    
      <?php the_breadcrumb(); ?>

			<div id="main" class="tencol first clearfix" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php 
            $dates = (array) json_decode(get_post_meta(get_the_ID(), 'eventdate', true), true );
            sort($dates);
            foreach($dates as $date){
              $date_string .= '<div class="event-date">'. date('d.m.', strtotime($date)) .'</div>';
            }
          ?>        
				<article class="block white" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">

						<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
						
            <p class="byline vcard"><?php
										printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&amp;</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>

            <div class="event-dates">
              <?php echo $date_string; ?>
            </div>
                          
            <!-- 
            <p class="comment-count" title="Kommentit">
              <?php
                $comments_count = wp_count_comments(get_the_ID());
                echo '<a href="' . get_comments_link() . '">' . $comments_count->total_comments . '</a>';
              ?>
            </p>
            -->

					</header> <!-- end article header -->

					<section class="entry-content clearfix" itemprop="articleBody">
            <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large');
                  } 
                ?>
						<?php the_content(); ?>
					</section> <!-- end article section -->

					<footer class="article-footer">
						<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

					</footer> <!-- end article footer -->

					<?php comments_template(); ?>

				</article> <!-- end article -->

				<?php endwhile; ?>

				<?php else : ?>

					<article id="post-not-found" class="hentry clearfix">
						<header class="article-header">
							<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
						</footer>
					</article>

				<?php endif; ?>

			</div> <!-- end #main -->

      <?php get_sidebar('event'); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
