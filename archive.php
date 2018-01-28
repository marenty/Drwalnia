<!-- insert header -->
<?php get_header(); ?>

<!-- content start -->
<section id="content">
	
	<!-- main start -->
	<main>
		
		<?php if(have_posts()) : ?>
		<!-- ścieżka archiwum -->
        <div class="post_path"><a href="<?php bloginfo('url'); ?>">Strona główna</a> &gt;<?php
		// If this is a category archive
		if (is_category()) {
			printf( __('Archiwum wpisów <span>%1$s</span>'), single_cat_title('', false) );
		// If this is a tag archive
		} elseif (is_tag()) {
			printf( __('Posts Tagged &#8216;<span>%1$s</span>&#8217;'), single_tag_title('', false) );
		// If this is a daily archive
		} elseif (is_day()) {
			printf( __('Archiwum <span>%1$s</span>'), get_the_time(__('F jS, Y')) );
		// If this is a monthly archive
		} elseif (is_month()) {
			printf( __('Archiwum <span>%1$s</span>'), get_the_time(__('F, Y')) );
		// If this is a yearly archive
		} elseif (is_year()) {
			printf( __('Archiwum <span>%1$s</span>'), get_the_time(__('Y')) );
		// If this is an author archive
		} elseif (is_author()) {
			_e('Archiwum autora');
		// If this is a paged archive
		} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
			_e('Archiwum Blogu ', 'dw-rwd');
		}
		?></div>
			<?php while(have_posts()) : the_post(); ?>
			
			<!-- post content start -->
			<article class="subject" id="post-<?php the_ID(); ?>">
					<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					
	                <div class="post-entry">
						<!-- post icon -->
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'page-icon' ); } ?>
						<!-- content shortcut-->
						<?php the_excerpt (); ?>
					</div>
					
					<div class="post-category"><strong>Kategorie:</strong> <?php the_category(' / '); ?></div>
					<?php the_tags('<p class="post-tags"><strong>Tagi:</strong> ', ', ', '</p>'); ?>

				</article>
				<?php endwhile; ?>
				<!-- post content end -->
				
				<!-- page navigation start -->
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
				<section class="pagenavi">
					<div class="alignleft"><?php next_posts_link('&laquo; starsze') ?></div>
					<div class="alignright"><?php previous_posts_link('nowsze &raquo;') ?></div>
				</section>
				<?php } ?>
				<!-- page navigation start -->
				
				<!-- page not found -->
				<?php else : ?>
					<div class="notfound"><p>Nie znaleziono!</p><p>Prosimy spróbować ponownie.</p></div>
			<?php endif; ?>
				<!-- page not found -->
	</main>
	<!-- main end -->
	
	<!-- sidebar start -->
	<aside id="sidebar">
		<div class="pine"></div>
	   <?php dynamic_sidebar( 'Panel główny' ); ?>
	</aside>
	<!-- sidebar end -->

</section>
<!-- content end -->
	
<!-- insert footer -->
<?php get_footer(); ?>