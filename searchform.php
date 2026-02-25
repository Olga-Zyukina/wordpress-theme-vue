<?php
/** The searchform.php template */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" placeholder="Поиск информации на сайте" value="<?php echo get_search_query(); ?>" name="s" id="s" />
	<button type="submit" id="searchsubmit" class="search-submit" aria-label="search">
		<span><i class="fa fa-search"></i></span>
	</button>
</form>
