<?php
/** Template Name: Blog */
get_header(); ?>

<div class="site-wrapper container">
	<div class="site-grid">
		<main class="site__content">
			<h1 class="blog-title">
				Блог
			</h1>
			<div class="blog__page">
				<?php
					$current = absint(
						max( 1,
						get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1
						)
						 ); 
					$excerpt_length = 30;
					$query_args = array(
						'post_type' => 'post',
						'cat' => [-54, -48, -42],
						'paged' => $current,
						'ignore_sticky_posts' => true
					);
					$query = new WP_Query($query_args);

					if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
							?>
							<div class="blog__item">
								<?php the_post_thumbnail(''); ?>
								<div class="blog__card">							
									<a href="<?php the_permalink(); ?>">
										<h2>
											<?php the_title(); ?>
										</h2>
									</a>
									<span class="blog__date">
										<i class="fa fa-clock-o"></i>
										<?php the_date(); ?>
									</span>
									<div class="blog__preview">
										<?php echo wp_trim_words(get_the_content(),$excerpt_length); ?>
									</div>
								</div>
							</div>
						<?php
						endwhile;          
						wp_reset_postdata();
							?>
						<div class="nav-links">
							<?php
								echo wp_kses_post(
									paginate_links(
										[
										'mid_size'     => 1,
										'total'   => $query->max_num_pages,
										'current' => $current,
										]
									)
								);
							?>
						</div>
						<?php
					endif;
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