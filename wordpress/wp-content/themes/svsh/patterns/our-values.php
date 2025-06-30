<?php
/**
 * Title: our values
 * Slug: svsh/our-values
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<section class="section section_values section_bottom-wave">
	<div class="section__container section__container_values">
		<div class="section__title-container section__title-container_row">
			<h2 class="section__title section__title_row section__title_white">
				<?=carbon_get_theme_option('our_values_title');?>
			</h2>
			<img class="section__icon section__icon_row section__icon_heart"
				 src="<?=wp_get_attachment_image_url(carbon_get_theme_option('our_values_icon'), 'full');?>"
				 alt="СВШ в сердце навсегда">
		</div>
		<div class="section__guest-cards-container">
			<img
					src="<?=wp_get_attachment_image_url(carbon_get_theme_option('our_values_picture_mob'), 'full');?>"
					class="section__guest-cards-container-picture-mob"
					alt="Наши ценности">
			<div class="section__light section__light_12"></div>
			<div class="section__light section__light_13"></div>
			<div class="section__light section__light_14"></div>
			<div class="section__light section__light_15"></div>
			<?php
			if( $slides = carbon_get_theme_option('our_values_cards') ) {
				foreach( $slides as $key => $slide ) {
					?>
					<div class="section__guest-card">
						<img src="<?=wp_get_attachment_image_url($slide['image'], 'full')?>"
							 class="section__guest-card-image"
							 alt="Гость">
						<div class="section__guest-card-text">
							<h3 class="section__guest-card-title"><?=$slide['title']?></h3>
							<p class="section__guest-card-subtitle"><?=$slide['subtitle']?></p>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>
<!-- /wp:group -->
