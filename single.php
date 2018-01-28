<!-- insert header -->
<?php get_header(); ?>

<!-- content start -->
<section id="content">
	
	<!-- main start -->
	<main id="post">
		
		<!-- post content start -->
		<article class="subject" id="post-<?php the_ID(); ?>">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="post_path"><a href="<?php bloginfo('url'); ?>">Strona główna</a> &gt; <?php the_category(', '); ?> &gt; <?php the_title(); ?></div>

        	<h1 class="post-title"><?php the_title(); ?></h1>
    			
			<div class="post-entry">
				<!-- post icon -->
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'page-image' ); } ?>
				<!-- content full-->
				<?php the_content(); ?>
			</div>
			
			<!-- metadata start -->
			<div class="post-meta"><?php the_meta(); ?></div>
			<!-- metadata end -->
			
			<div class="post-date"><strong>Data wpisu:</strong> <?php the_time('j M Y'); ?></div>
			<div class="post-category"><strong>Kategorie:</strong> <?php the_category(' / '); ?></div>
			<div class="post-tags"><?php the_tags('Tagi: ') ?></p>
			
			<!-- edit post -->
			<div class="edit_post"><?php edit_post_link(__('Edytuj')); ?></div>
		</article>
				
			<?php endwhile; ?>
			<!-- post content end -->

			<!-- page not found -->
			<?php else : ?>
				<div class="notfound"><p>Nie znaleziono!</p><p>Prosimy spróbować ponownie.</p></div>
			<?php endif; ?>
			<!-- page not found -->
			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ol',
						'short_ping' => true,
						'avatar_size'=> 34,
					) );
				?>
			</ol>
		</article>
		<!-- post content end -->
               
		<!-- <?php wp_link_pages(array('before' => '<p><strong>Strony:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?> -->	
		

	</main>
	<!-- main end -->
	
	<!-- sidebar start -->
	<aside id="sidebar">
		<div class="pine"></div>
	   <?php dynamic_sidebar( 'Panel wpisów' ); ?>
	</aside>
	<!-- sidebar end -->

</section>
<!-- content end -->
	
<!-- insert footer -->
<?php get_footer(); ?>