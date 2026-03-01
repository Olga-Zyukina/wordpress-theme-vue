<?php
/** Template Name: FAQ */
get_header(); ?>
<div class="site-wrapper container">
	<div class="site-grid">
		<main class="site__content">
			<h1 class="faq-title">
				FAQ
			</h1>
			<div class="faq__page">
				<?php
					$current = absint(
						max( 1,
						get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )
						)
						 ); 
					$query_args = array(
						'post_type' => 'post',
						'cat' => 48,
						'paged' => $current,
						'posts_per_page' => 10,
						'ignore_sticky_posts' => true
						);
					$query = new WP_Query($query_args);
					if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
							?>
							<details class="faq-detail">
								<summary class="faq-summary">
									<span class="faq-question">
										<?php the_title(); ?>
									</span>
								</summary>
								<?php the_content(); ?>
							</details>
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