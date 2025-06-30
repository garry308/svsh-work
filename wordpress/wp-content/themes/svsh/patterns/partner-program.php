<?php
/**
 * Title: partner program
 * Slug: svsh/partner-program
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<section class="section section_ref section_bottom-wave">
	<div class="section__container section__container_ref">
		<div class="section__title-container section__title-container_ref">
			<?=carbon_get_theme_option('partner_program_title');?>
		</div>
		<div class="section__title-container section__title-container_ref">
			<?=carbon_get_theme_option('partner_program_subtitle');?>
		</div>
		<a href="#form"><button class="svsh__button svsh__button_short"><?=carbon_get_theme_option('partner_program_button_text');?></button></a>
	</div>
	<div class="section__light section__light_1"></div>
	<div class="section__light section__light_2"></div>
	<div class="section__light section__light_3"></div>
	<div class="section__light section__light_4"></div>
	<div class="section__light section__light_16"></div>
</section>
<img src="<?=wp_get_attachment_image_url(carbon_get_theme_option('partner_program_image'), 'full');?>"
	 class="section__container__ref-people"
	 alt="Партнерская программа">
<!-- /wp:group -->
