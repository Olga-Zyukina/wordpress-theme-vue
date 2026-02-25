<div class="new-wrapper">
	<div class="site-section__title">
		<h4>Новые статьи</h4>
	</div>	
	<div class="posts-new">
		<?php
			$excerpt_length = 10;
			$query_args = array(
				'post_type' => 'post',
				'cat' => [-1, -8, -14, -16, -20, -25, -34, -41, -42, -45, -48, -49, -51, -54],
				// 'post__in' => [13949,14807,14846,12840],
				'orderby'  => 'rand',
				'posts_per_page' => 3
			);
			$query = new WP_Query($query_args);
			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
					$html = '';
					?>
					<div class="posts-new__item">
						<div class="posts-new__img">
							<?php 
								the_post_thumbnail('medium');
							?>
						</div>
						<div class="post-new__content">
							<?php 
							$post_cat_id = yoast_get_primary_term_id('category', $post->ID );
							switch ($post_cat_id) {
								case 10:
									$post_cat_color = 'var(--color1)';
									break;
								case 3:
									$post_cat_color = 'var(--color1)';
									break;
								case 29:
									$post_cat_color = 'Red';
									break;
								case 39:
									$post_cat_color = 'Green';
									break;
								case 31:
									$post_cat_color = 'Yellow';
									break;	
								case 38:
									$post_cat_color = 'Violet';
									break;
								default:
									$post_cat_color = 'Blue';							
							}
							$html .=  '<span class="posts-new__cat" style="background:' . $post_cat_color . '" >' . 
							yoast_get_primary_term( 'category', $post->ID ) . '</span>';  
							echo $html;
							?>
							<h3 class="posts-new__title">								
								<?php the_title(); ?>
							</h3>
							<?php echo wp_trim_words(get_the_content(),$excerpt_length); ?>
							<a href="<?php the_permalink(); ?>" class="posts-new__link">
								<span>Читать далее</span>
								<i class="fa fa-circle-thin"></i>
								<i class="fa fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
		?>
	</div>
</div>