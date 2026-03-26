<?php
/**
 * Template Name: Front-page
 */
get_header(); 
?>

<main id="main" class="site-wrapper container">
	<section class="site-start">
		<div class="site-start__wrap">
			<div class="site-start__left">
				<picture class="site-start__img">
					<source media="(min-width:900px)" 
					srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/start/start-bg-900.png">
					<source media="(min-width:768px)" 
					srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/start/start-bg-768.png">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/start/start-bg.png" alt="start-bacground">
				</picture> 
				<div class="site-start__left-img">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/start/start-house.png" alt="start-house">
				</div>
				<div class="site-start__left-top">
					<div class="site-start__top-group">
						<div class="img-square">
							<div class="img-square__img">
								<img width="295" height="330" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/start/start-mix.jpg" alt="Полистиролбетонная сухая смесь"/>
							</div>
							<a href="<?php echo get_permalink(2345); ?>" class="link-square">
								<h3>Полистиролбетонная сухая смесь. Сами строим, утепляем, украшаем</h3>
							</a>
						</div>
						<div class="top-box">
							<a href="<?php echo get_permalink(641); ?>">
								<h3 class="link-box">Как выбрать и купить полистиролбетон</h3>
							</a>
						</div>
					</div>
					<div class="site-start__top-post">
						<div class="img-circle">
							<div class="img-circle__img">
								<img width="140" height="140" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/start/start-texture-200.jpg" alt="Изделия из полистиролбетона. Популярные решения">
							</div>
							<a href="<?php echo get_permalink(799); ?>" class="link-circle">
								<h3>Изделия из полистиролбетона. Популярные решения</h3>
							</a>
						</div>
					</div>
				</div>
				<div class="site-start__left-bottom">
					<div class="site-start__bottom-post">
							<a href="<?php echo get_permalink(10047); ?>">
								<h3 class="link-box btn-shine">Калькулятор <br>полистиролбетона</h3>
							</a>
					</div>
					<div class="site-start__bottom-group">
						<div class="site-start__bottom-posts">
							<div class="site-start__post-6">
								<div class="img-circle">
									<div class="img-circle__img">
										<img width="140" height="140" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/start/start-block.jpg" alt="Урок химии. Экологичность полистиролбетона"/>
									</div>
									<a href="<?php echo get_permalink(9350); ?>" class="link-circle">
										<h3>Урок химии. Экологичность полистиролбетона</h3>
									</a>
								</div>
							</div>
							<div class="site-start__counter-wrap">
								<span class="counter__number">14</span>
								<p><b>Уникальных характеристик</b> полистиролбетона</p>
								<a href="polistirolbeton#advant" class="counter__link">
									Изучить 
									<i class="fa fa-angle-double-right"></i>
								</a>
							</div>
							<div class="site-start__pro">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/price/BG_D250.png" alt="Купить полистиролбетонную смесь" height="250">
								<b>Купить полистиролбетон</b><br>D250, D400, D500<br>
								<a href="pro" class="counter__link">
									Отправить заявку
									<i class="fa fa-angle-double-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_sidebar('calc'); ?>
		</div>
	</section>
	<section class="site-posts">
		<div class="site-posts__wrap">
			<div class="site-posts__left">
				<div class="site-section__title">
					<h2>Полистиролбетон</h2>
				</div>	
				<div class="site-polistirolbeton">
					<?php 
						$excerpt_length = 15;
						$query_args = array(
							'post_type' => 'post',
							'cat' => 10,
							'posts_per_page' => 3
						);
					$query = new WP_Query($query_args);
					if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
							?>
							<div class="site-polistirolbeton__post">											
								<?php the_post_thumbnail('medium');?>
								<a href="./psb/" class="site-polistirolbeton__cat">Полистиролбетон</a>
								<a href="<?php the_permalink(); ?>">
									<h3 class="site-polistirolbeton__title">
										<?php the_title(); ?>
									</h3>
								</a>
								<?php echo wp_trim_words(get_the_content(),$excerpt_length); ?>
							</div>
						<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>				
				<div class="site-section__title">
					<h2>Строительство</h2>
				</div>	
				<div class="site-building">
					<?php 
						$excerpt_length = 20;
						$query_args = array(
							'post_type' => 'post',
							'cat' => 3,
							'posts_per_page' => 3
						);
					$query = new WP_Query($query_args);
					if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
							?>
							<div class="site-building__post">											
								<?php the_post_thumbnail('medium');?>
								<a href="./building/" class="site-building__cat">Строительство</a>
								<a href="<?php the_permalink(); ?>">
									<h3 class="site-building__title">
										<?php the_title(); ?>
									</h3>
								</a>
								<?php echo wp_trim_words(get_the_content(),$excerpt_length); ?>
							</div>
						<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>				
			</div>
			<?php get_sidebar('posts'); ?>
		</div>	
	</section>
	<section class="site-info">
		<div class="site-info__wrap">
			<div class="site-info__left">
				<div class="site-section__title">
					<h2>Применение</h2>
				</div>		
				<div class="scheme">
					<div class="scheme__img">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/info/info-house.png" decoding="async" loading="lazy" width="330" height="300" alt="применение">
						<svg>
							<circle data-id="1" cx="90" cy="77" r="10" class="active"/>
							<circle data-id="2" cx="237" cy="65" r="10"/>
							<circle data-id="3" cx="170" cy="123" r="10"/>
							<circle data-id="4" cx="60" cy="150" r="10"/>
							<circle data-id="5" cx="123" cy="175" r="10"/>
							<circle data-id="6" cx="160" cy="183" r="10"/>
							<circle data-id="7" cx="110" cy="210" r="10"/>
						</svg>
					</div>
					<ul class="scheme__items">
						<li data-id="1" class="active">Кровля (утепление, разуклонка)</li>
						<li data-id="2">Проемы в стенах, перегородках (перемычки)</li>
						<li data-id="3">Перекрытие (утепление, заполнение)</li>
						<li data-id="4">Стены, перегородки (блоки, панели, монолит)</li>
						<li data-id="5">Полы (стяжка, утепление)</li>
						<li data-id="6">Цоколь (утепление)</li>
						<li data-id="7">Отмостка (утепление)</li>
					</ul>
				</div>
			</div>
			<div class="site-info__right">
				<div class="faq__sign">
					!
				</div>
				<div class="faq__question">			
					<div class="faq__title">
						Случайный вопрос:
					</div>
					<b>Подходит ли полистиролбетон для бани?</b>
					<p>Трудно подобрать более экономичное решение для стен при строительстве бани. 
					Известно, что полистиролбетон почти не впитывает влагу. 
					Таким образом, исключается возможность возникновения плесени. 
					К тому же за счёт теплофизических свойств баня будет быстро прогреваться 
					и медленно остывать. Это сэкономит ваше время и средства.</p>
					<a href="/faq-page/">
						<h2 class="faq__link">
							Вопросы - ответы 
							<i class="fa fa-angle-double-right"></i>
						</h2>
					</a>	
				</div>
			</div>
		</div>
	</section>
	<section class="site-house">
		<div class="site-house__wrap">
			<div class="site-section__title">
				<h2>Строим дом</h2>
			</div>
			<div class="site-house__items">
				<div class="site-house__left">
					<?php 
						$query_args = array(
							'post_type' => 'post',
							'post__in' => [3394,3641,4077],
							'order' => 'ASC',
							'posts_per_page' => 3
						);
					$query = new WP_Query($query_args);
					if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
							?>
							<div class="site-house__item">
								<?php the_post_thumbnail(array(100, 100)); ?>
								<div class="site-house__item-title">
									<a href="<?php the_permalink(); ?>"  class="site-house__item-link">
										<h3>
											<?php the_title(); ?>
										</h3>
									  <span>
											Читать далее
											<i class="fa fa-angle-double-right"></i>
										</span>
									</a>	
								</div>
							</div>
						<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
				<div class="site-house__img">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/house/house.png" decoding="async" loading="lazy" alt="house" width="405" height="380">
				</div>
				<div class="site-house__right">
					<?php 
						$query_args = array(
							'post_type' => 'post',
							'post__in' => [4247,5067,6100],
							'order' => 'ASC',
							'posts_per_page' => 3
						);
					$query = new WP_Query($query_args);
					if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
							?>
							<div class="site-house__item">
								<?php the_post_thumbnail(array(100, 100)); ?>
								<div class="site-house__item-title">
									<a href="<?php the_permalink(); ?>"  class="site-house__item-link">
										<h3>
											<?php the_title(); ?>
										</h3>
									  <span>
											Читать далее
											<i class="fa fa-angle-double-right"></i>
										</span>
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
		</div>
	</section>
	<section class="site-description">
		<div class="site-description__wrap">
			<div class="site-section__title">
				<h1>Все о полистиролбетоне</h1>
			</div>
			<div class="description-wrapper">
				<div class="site-description__left">
					<p>Полистиролбетон – это материал, который находит все большее применение в строительной отрасли,
					благодаря своим уникальным свойствам и преимуществам.
					</p>
					<p>В состав полистиролбетона входят цемент, гранулы полистирола, вода и добавки.</p>
					<p>Полистиролбетон – это строительный материал с множеством уникальных характеристик, 
					которые делают его идеальным для использования в различных типах строительства. 
					Легкий вес, низкая теплопроводность, прочность, долговечность, простота в обработке 
					и экологичность делают его привлекательным выбором для строителей и архитекторов.
					</p>
					<p>Выбирая полистиролбетон, можно создавать качественные и надежные здания, 
					учитывая при этом потребности современного общества и сохраняя окружающую среду.
					</p> 
 				</div>
				<div class="site-description__right">
					<h2>Популярные вопросы</h2>
						<?php 
							$query_args = array(
								'post_type' => 'post',
								'cat' => 48,
								'posts_per_page' => 5
							);
						$query = new WP_Query($query_args);
						if ($query->have_posts()) :
							while ($query->have_posts()) :
								$query->the_post();
								?>						
									<a href="<?php the_permalink(); ?>">
										<h3>
											<?php the_title(); ?>
										</h3>
									</a>		
							<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
				</div>
			</div>
		</div>
	</section>
	<section class="site-new-posts">
		<?php get_template_part ( 'template-parts/sections/posts-new' ); ?>		
	</section>
</main>
<?php get_footer(); ?>