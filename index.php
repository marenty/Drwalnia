<!-- insert header -->
<?php get_header(); ?>

<!-- content start -->
<section id="content">
	
	<!-- main start -->
	<main id = "post-grid-item">

			
			<?php if(have_posts()) : ?>
				
				<!-- post content start -->
				<?php while(have_posts()) : the_post(); ?>
				<article class="subject" id="post-<?php the_ID(); ?>">
                    <div id = "wooden-title">
					   <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					</div>
                    
	                <div class="post-entry">
						<!-- post icon -->
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'page-icon' ); } ?>
						<!-- content shortcut-->
						<?php the_excerpt (); ?>
					</div>
					
					<!-- metadata start -->
					<div class="post-meta"><?php the_meta(); ?></div>
					<!-- metadata end -->
					
					<div class="post-date"><strong>Data wpisu:</strong> <?php the_time('j M Y'); ?></div>
					<div class="post-category"><strong>Kategorie:</strong> <?php the_category(' / '); ?></div>
					<?php the_tags('<p class="post-tags"><strong>Tagi:</strong> ', ', ', '</p>'); ?>

					<!-- edit post -->
					<div class="edit_post"><?php edit_post_link(__('Edytuj')); ?></div>
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
	<aside id="aside-grid">
        <div id ="sidebar">
		<div class="pine"></div>
	   <?php dynamic_sidebar( 'Panel główny' ); ?>
        </div>
	</aside>
	<!-- sidebar end -->

</section>
<!-- content end -->
	
<!-- insert footer -->
<?php get_footer(); ?>