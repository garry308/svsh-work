<?php
/**
 * Title: why we
 * Slug: svsh/why-we
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<section class="section section_why-we" id="whywe">
	<div class="section__container section__container_why-we">
		<div class="section__title-container">
			<h2 class="section__title section__title_soul ">
				<?=carbon_get_theme_option('why_we_title');?>
			</h2>
			<img
					class="section__icon section__icon_soul"
					src="<?=wp_get_attachment_image_url(carbon_get_theme_option('why_we_icon'), 'full');?>"
					alt="СВШ в сердце навсегда">
		</div>
		<div class="section__whywe-card-container">
			<?php
			if( $slides = carbon_get_theme_option('why_we_cards') ) {
				foreach( $slides as $key => $slide ) {
					?>
					<div class="section__whywe-card">
						<img
							src="<?=wp_get_attachment_image_url($slide['image'], 'full')?>"
							 class="section__whywe-card-image"
							alt="Карточка">
						<p class="section__whywe-card-title"><?=$slide['title']?></p>
						<p class="section__whywe-card-subtitle"><?=$slide['subtitle']?></p>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>
<!-- /wp:group -->
