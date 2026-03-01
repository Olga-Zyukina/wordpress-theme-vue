<?php get_header(); ?>
<main class="site-wrapper container">
	<section class="search-wrapper">
		<div class="search__title">
			<h1>
				<?php
					printf( esc_html__( 'Результаты поиска для %s'), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</div>        
		<div>    
			<?php                 
				$excerpt_length = 30;
				if (have_posts()) {
					while ( have_posts() ) :
						the_post(); ?>
					<div class="search__item">
						<a href="<?php the_permalink(); ?>">
							<h2>
								<?php the_title(); ?>
							</h2>
						</a>
						<span class="search__date">
							<i class="fa fa-clock-o"></i>
							<?php the_date(); ?>
						</span>
						<div class="search__preview">
							<?php echo wp_trim_words(get_the_content(),$excerpt_length); ?>
						</div>
					</div>
						<?php
					endwhile;

					wp_reset_postdata();
					the_posts_pagination();

				} else {
					?>

					<div class="search__none">
						<h3>По вашему запросу ничего не найдено</h3>
						<div class="back_home">
						<a href="<?php echo home_url( '/' ); ?>" rel="home">
							Вернуться на главную
						</a>
						</div>
					</div>
					
					<?php
				}
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>