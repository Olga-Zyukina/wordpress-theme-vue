<?php
	$frontpage = 'front-page.php';
	if ( is_page_template($frontpage) ) {
		$excerpt_length = 20;
		$more = '...';
	} else {
		$excerpt_length = 0;
		$more = '';
	}

	if  ( is_page_template($frontpage) ) {
		?>
		<aside class="site-posts__right">
		<?php
	}
	else  {
		?>
		<aside class="site__right-column">
		<?php get_template_part ( 'template-parts/sections/site-ads' ); 
	} ?>
	
  <div class="posts-popular">
    <h4>Самое читаемое</h4>
		<?php     
  	$query_args = array(  
  		'post_type' => 'post',
  		'cat' => [-54, -48, -42],
  		'posts_per_page' => 5,
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
				<?php echo wp_trim_words(get_the_content(),$excerpt_length,$more); ?>
				</a>							
				<?php
			endwhile;
			wp_reset_postdata();			
		endif;
	  ?>				
  </div>	
</aside>
