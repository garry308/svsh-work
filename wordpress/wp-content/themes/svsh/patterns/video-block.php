<?php
/**
 * Title: video block
 * Slug: svsh/video-block
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<section class="section section_find section_with-pattern" id="find_yourself">
	<div class="section__container">
		<div class="section__title-container">
			<h2 class="section__title section__title_find">
				<?=carbon_get_theme_option('video_block_title');?>
			</h2>
			<img class="section__icon" src="<?=wp_get_attachment_image_url(carbon_get_theme_option('video_block_icon'), 'full');?>"
				 alt="Вакансии СВШ">
		</div>
		<div class="section__video">
			<?=carbon_get_theme_option('video_block_video');?>
		</div>
	</div>
</section>
<!-- /wp:group -->
