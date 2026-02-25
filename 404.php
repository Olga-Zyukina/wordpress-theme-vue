<?php get_header(); ?>

<main id="main" class="site-main container">
	<div class="page-404-content">
		<h1 class="error-code"><?php esc_html_e( 'Ошибка 404'); ?></h1>
		<h2 class="page-title"><?php esc_html_e( 'Страница не найдена!' ); ?></h2>
		<p><?php esc_html_e( 'К сожалению, ничего не найдено' ); ?></p>
		<div class="back_home">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Вернуться на главную' ); ?></a>
		</div>
	</div>
</main>

<?php get_footer(); ?>