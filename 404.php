<?php get_header(); ?>

<main id="main" class="site-main container">
	<div class="page-404-content">
		<h1 class="error-code">Ошибка 404</h1>
		<h2 class="page-title">Страница не найдена!</h2>
		<p>К сожалению, ничего не найдено</p>
		<div class="back_home">
			<a href="<?php echo home_url( '/' ); ?>" rel="home">Вернуться на главную</a>
		</div>
	</div>
</main>

<?php get_footer(); ?>