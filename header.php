
<!doctype html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="полистиролбетон, сухой полистиролбетон, полистиролбетон в мешках, панели из полистиролбетона,
	блоки из полистиролбетона, полистиролбетонные панели, полистиролбетонные блоки, полистиролбетон купить, 
	полистиролбетон цена, дом из полистиролбетона, полистиролбетон сайт" name="keywords">
	<?php wp_head(); ?>
</head>
 <body>
	<div class="preeloader">
		<div class="preloader-spinner"></div>
	</div>
	<header>
		<div class="top-bar container">
			<div class="top-bar__social-icons">
				<a href="mailto:polystyreneconcrete@mail.ru" aria-label="Отправить письмо">
					<i class="fa fa-envelope"></i>
					<span>polystyreneconcrete@mail.ru</span>
				</a>
			</div>
			<div class="top-bar__search">
				<?php get_search_form(); ?>
			</div>	
		</div>  
		<div class="site-header container">  
			<div class="site-header__logo">
				<a href="<?=home_url(); ?>" rel="home" aria-current="page" class="site-header__link">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-115.png" alt="logo" width="75">
					<span class="site-header__name">Все</span>
					<span class="site-header__desc">о полистиролбетоне</span>
					<span class="site-header__site">Полистиролбетон</span>
				</a>
			</div>		
			<nav id="navbar" class="site-header__menu navbar">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'top',
						'menu_id'        => 'primary-menu',
						'container' => 'ul',
						'menu_class'      => 'main-menu'
					));
				?>
				<i class="mobile-nav-toggle fa fa-bars"></i>
			</nav>		
		</div>
	</header>
		<?php
			if ( ! is_front_page() && (function_exists( 'yoast_breadcrumb' )) ) :
				yoast_breadcrumb( '<div id="breadcrumbs" class="breadcrumbs container">', '</div>' );
			endif;
		?>