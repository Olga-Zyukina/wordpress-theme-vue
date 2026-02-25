<div class="posts-popular">
	<h4>Самое читаемое</h4>
	<?php     
	$post_number = 5;
	$excerpt_length = 15;  
	$query_args = array(
		'post_type' => 'post',
		'cat' => [-54, -48, -42],
		'posts_per_page' => absint($post_number),
		'ignore_sticky_posts' => true,
		'meta_key' => 'wp_post_views',
		'orderby' => 'meta_value_num',
		'order' => 'desc'
	);
	$query = new WP_Query($query_args);   
	if ($query->have_posts()) :
		while ($query->have_posts()) :
			$query->the_post();
			?>	
				<a href="<?php the_permalink(); ?>" class="popular-item">
					<h5>					
						<?php the_title(); ?>
					</h5>
				</a>
			<?php
		endwhile;			
		wp_reset_postdata();
	endif;
	?>
</div>