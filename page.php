<?php get_header(); ?>
<div class="site-wrapper container">
	<div class="site-grid">
		<main class="site__content">
			<h1 class="visually-hidden"><?php the_title(); ?></h1>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/Article">		
				<div class="post-content">					
					<?php the_content(); ?>
				</div>
			</article>
		</main>
		<?php get_sidebar('posts'); ?>
	</div>
	<section class="site-new-posts">
		<?php get_template_part ( 'template-parts/sections/posts-new' ); ?>		
	</section>
</div>
<?php get_footer(); ?>