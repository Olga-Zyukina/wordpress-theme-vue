<?php
/** Template Name: Calc */
get_header(); ?>

<div class="site-wrapper container">
	<div class="site-grid">
		<main class="site__content calc">
      <h1>Строительный калькулятор</h1>
<!-- !!!Для сайта поменять номера страниц калькуляторов!!! -->
      <select name="calc" class="select">
        <option selected="selected" disabled id="0" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Выберите калькулятор</option>
        <option id="1" value="<?= esc_url( get_page_link( 13599 ) ); ?>">Полистиролбетонный утеплитель</option>
        <option id="2" value="<?= esc_url( get_page_link( 13609 ) ); ?>">Полистиробетонная стяжка пола</option>
        <option id="3" value="<?= esc_url( get_page_link( 13612 ) ); ?>">Полистиролбетонная конструкция</option>
        <option id="4" value="<?= esc_url( get_page_link( 13616 ) ); ?>">Полистиролбетонные блоки</option>
        <option id="5" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Ленточный фундамент</option>
        <option id="6" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Плитный фундамент</option>
        <option id="7" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Свайный фундамент</option>
        <option id="8" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Кирпич</option>
        <option id="9" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Строительные блоки</option>
        <option id="10" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Пеноблоки</option>
        <option id="11" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Газобетонные блоки</option>
        <option id="12" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Односкатная крыша</option>
        <option id="13" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Двускатная крыша</option>
        <option id="14" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Мансардная крыша</option>
        <option id="15" value="<?= esc_url( get_page_link( 10047 ) ); ?>">Вальмовая крыша</option>
      </select>
      
      <iframe id="stroi-calc" src="" width="100%" height="2000"></iframe>
      <div id="app"></div>

    </main>
    <aside class="site__right-column">
			<?php get_template_part ( 'template-parts/sections/site-ads' ); ?>	
			<?php get_template_part ( 'template-parts/sections/posts-popular' ); ?>		
    </aside>
  </div>
	<section class="site-new-posts">
		<?php get_template_part ( 'template-parts/sections/posts-new' ); ?>		
	</section>
</div>

<?php get_footer(); ?>