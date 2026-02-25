<?php get_header(); ?>
<div class="site-wrapper container">
	<div class="site-grid">
		<main class="site__content">
			<div class="category__title">
				<?php
					the_archive_title( '<h1>', '</h1>' );
				?>
			</div>        
			<div class="category__page">
				<?php                
					$excerpt_length = 30;

					if (have_posts()) {
						while ( have_posts() ) :
							the_post(); ?>

							<div class="category__item">
								<?php the_post_thumbnail(''); ?>
								<div class="category__card">							
									<a href="<?php the_permalink(); ?>">
										<h2>
											<?php the_title(); ?>
										</h2>
									</a>
									<span class="category__date">
										<i class="fa fa-clock-o"></i>
										<?php the_date(); ?>
									</span>
									<div class="category__preview">
										<?php echo wp_trim_words(get_the_content(),$excerpt_length); ?>
									</div>
								</div>
							</div>
						<?php
						endwhile;
            
						wp_reset_postdata();

						the_posts_pagination();
					}
				?>
			</div>
		</main>
		<aside class="site__right-column">
			<?php get_template_part ( 'template-parts/sections/site-ads' ); ?>		
			<?php get_template_part ( 'template-parts/sections/posts-popular' ); ?>		
		</aside>
	</div>
	<section class="site-new-posts">
			<?php get_template_part ( 'template-parts/sections/posts-new' ); ?>		
	</section>
</div>
<?php get_footer(); ?>