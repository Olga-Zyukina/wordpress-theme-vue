<?php
/* Template Name: Video 
Template post type: post, page */
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: no-referrer");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("X-Frame-Options:sameorigin");
header("X-Permitted-Cross-Domain-Policies: none");
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
header("X-Content-Type-Options: nosniff");
header_remove('x-powered-by'); ?>
<!doctype html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="полистиролбетон, сухой полистиролбетон, полистиролбетон в мешках, панели из полистиролбетона,
	блоки из полистиролбетона, полистиролбетонные панели, полистиролбетонные блоки, полистиролбетон купить, 
	полистиролбетон цена, дом из полистиролбетона, полистиролбетон сайт" name="keywords">
	<title>Как почистить мельхиор</title>
	<meta name="description" content="Как почистить мельхиор. Видео-инструкция – Полистиролбетон.com" />
	<link rel="canonical" href="http://psb/kak-pochistit-melhior/" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="video" />
	<meta property="og:title" content="Как почистить мельхиор" />
	<meta property="og:description" content="Как почистить мельхиор. Видео-инструкция – Полистиролбетон.com" />
	<meta property="og:url" content="http://psb/kak-pochistit-melhior/" />
	<meta property="og:site_name" content="Полистиролбетон.com" />
	<meta property="article:published_time" content="2024-03-31T08:00:00+08:00" />
	<meta property="article:modified_time" content="2024-03-31T08:00:00+08:00" />
	<meta property="og:image" content="http://psb/wp-content/uploads/2021/09/135-0.jpg" />
	<meta property="og:image:width" content="327" />
	<meta property="og:image:height" content="170" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Написано автором" />
	<meta name="twitter:data1" content="" />
	<meta name="twitter:label2" content="Примерное время для чтения" />
	<meta name="twitter:data2" content="5 минут" />
  <script type="application/ld+json">
    {
      "@type": "VideoObject",
      "name": "Как почистить мельхиор. Видео-инструкция – Полистиролбетон.com",
      "description": "Как почистить мельхиор подручными средствами? Подарили старый набор посуды из мельхиора. Жена почистила его за несколько минут подручными средствами. Теперь посуда сверкает как новая. Показываем КАК...",
      "thumbnailUrl": [
        "http://psb/wp-content/uploads/2021/09/135-0.jpg"
       ],
      "uploadDate": "2024-03-31T08:00:00+08:00",
      "duration": "PT1M54S",
      "contentUrl": "http://psb/wp-content/uploads/2021/09/135-Очистка-мельхиора-v2.mp4"
    }
</script>
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
				<?php echo get_search_form(); ?>
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






<div class="site-wrapper container">

	<div class="site-grid">
		<main class="site__content video">

			<?php
				the_title('<h1 class="post-title" itemprop="headline">', '</h1>');
			?>

			<div class="post-meta">
				<i class="fa fa-user-circle-o"></i>
				<?php the_author(); ?>

				<span class="meta_views">
					<i class="fa fa-eye"></i>
					<?php echo get_post_views(get_the_ID()); ?>
				</span>

				</div>
					<div class="post-content">
						<?php the_content(); ?>
					</div>

				<?php
					require get_template_directory() . '/template-parts/hooks/social-sharing.php';
					do_action( 'psb_social_sharing' ,get_the_ID() );
					the_post_navigation(); 
				?>

		</main>
	</div>
</div>

<?php get_footer(); ?>