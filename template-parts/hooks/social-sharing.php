<?php
if (!function_exists('psb_social_sharing')) :
	function psb_social_sharing($post_id) {
		$psb_url = get_the_permalink($post_id);
		$psb_title = get_the_title($post_id);
		$psb_image = get_the_post_thumbnail_url($post_id);
		
		$psb_vk_sharing_url = esc_url('https://vk.com/share.php?url=' . $psb_url);
		$psb_pinterest_sharing_url = esc_url('http://pinterest.com/pin/create/button/?url=' . $psb_url . '&media=' . $psb_image . '&description=' . $psb_title);
		$psb_linkedin_sharing_url = esc_url('http://www.linkedin.com/shareArticle?mini=true&title=' . $psb_title . '&url=' . $psb_url);
		
		?>
		<div class="post-sharing">
			<div class="post-share">
				<a target="_blank" href="<?php echo $psb_vk_sharing_url; ?>" aria-label="Поделиться в VK"><i class="fa fa-vk"></i></a>
				<a target="_blank" href="<?php echo $psb_pinterest_sharing_url; ?>" aria-label="Поделиться в Pinterest"><i class="fa fa-pinterest"></i></a>
				<a target="_blank" href="<?php echo $psb_linkedin_sharing_url; ?>" aria-label="Поделиться в Linkedin"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
		<?php
	}
endif;
add_action('psb_social_sharing', 'psb_social_sharing', 10);
?>