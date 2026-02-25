<div class="site-grid">
	<main class="site__content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/Article">

			<?php
				if ( ! in_category( 48 ) ) {
					the_title('<h1 class="post-title" itemprop="headline">', '</h1>');
				}
			?>

			<div class="post-meta">
				<i class="fa fa-user-circle-o"></i>
				<?php the_author(); ?>
				<!-- <i class="fa fa-clock-o"></i> -->
				<!-- <?php the_date(); ?> -->
				<span class="meta_views">
					<i class="fa fa-eye"></i>
					<?php echo get_post_views(get_the_ID()); ?>
				</span>
			</div>

			<?php
			if ( 'post' === get_post_type() ) {
				$categories_list = get_the_category_list( esc_html__( ' ') );
				if ( $categories_list ) {
					echo '<div class="post-cat">' . $categories_list . '</div>';
				}
			}

			if ( in_category( 48 ) ) {
				?>

				<div itemscope itemtype="https://schema.org/Question">
					<h1 itemprop="name">
							<?php the_title(); ?>
					</h1>
					<div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
						<div itemprop="text">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				
				<?php
			} else {
				?>

				<div class="post-content">
					<?php the_content(); ?>
				</div>

				<?php
			}

			require get_template_directory() . '/template-parts/hooks/social-sharing.php';
			do_action( 'psb_social_sharing' ,get_the_ID() );
			the_post_navigation(); ?>

		</article>
	</main>
	<aside class="site__right-column">
		<?php get_template_part ( 'template-parts/sections/site-ads' ); ?>
		<?php get_template_part ( 'template-parts/sections/posts-popular' ); ?>
	</aside>
</div>
<section class="site-new-posts">
	<?php get_template_part ( 'template-parts/sections/posts-new' ); ?>
</section>