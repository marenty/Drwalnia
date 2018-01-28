<!-- insert header -->
<?php get_header(); ?>

<!-- content start -->
<section id="content">
	
	<!-- main start -->
	<main id="page">
		
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				
				<!-- post content start -->
				<article class="subject" id="post-<?php the_ID(); ?>">

        			<h1 class="post-title"><?php the_title(); ?></h1>    			
					<div class="post-entry">
						<!-- post icon -->
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'page-image' ); } ?>
						<!-- content full-->
						<?php the_content(); ?>
					</div>
					
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
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
	<aside id="sidebar">
		<div class="pine"></div>
	   <?php dynamic_sidebar( 'Panel główny' ); ?>
	</aside>
	<!-- sidebar end -->

</section>
<!-- content end -->
	
<!-- insert footer -->
<?php get_footer(); ?>
