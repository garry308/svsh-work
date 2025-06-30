<?php
/**
 * Title: about us
 * Slug: svsh/about-us
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<section class="section section_about section_grey" id="aboutus">
	<div class="section__container">
		<div class="section__title-container section__title-container_row">
			<h2 class="section__title section__title_row section__title_about">
				<?=carbon_get_theme_option('about_us_title');?>
			</h2>
			<img class="section__icon section__icon_row section__icon_about"
				 src="<?=wp_get_attachment_image_url(carbon_get_theme_option('about_us_icon'), 'full');?>"
				 alt="СВШ хороша">
		</div>
		<div class="section__about-grid">
			<div class="section__numbers-container">
				<?php
				if( $slides = carbon_get_theme_option('about_us_numbers') ) {
					foreach( $slides as $key => $slide ) {
						?>
						<div class="section__number">
							<p class="section__num"> <?=$slide['number']?>
							<p class="section__num-description"><?=$slide['description']?></p>
						</div>
						<?php
						if ($key !== array_key_last($slides)) {
							?>
							<div class="section__number-separator"></div>
							<?php
						}
						?>
						<?php
					}
				}
				?>
			</div>
			<div class="section__about-text-1">
				<?=carbon_get_theme_option('about_us_text1');?>
			</div>
			<picture class="section__about-pict-1">
				<source media="(max-width: 767px)" srcset="<?=wp_get_attachment_image_url(carbon_get_theme_option('about_us_pict1_mob'), 'full');?>">
				<source media="(max-width: 1023px)" srcset="<?=wp_get_attachment_image_url(carbon_get_theme_option('about_us_pict1_tab'), 'full');?>">
				<img src="<?=wp_get_attachment_image_url(carbon_get_theme_option('about_us_pict1'), 'full');?>" class="section__about-pict-1" alt="Карта сети в областях">
			</picture>
			<picture class="section__about-pict-2">
				<source media="(max-width: 767px)" srcset="<?=wp_get_attachment_image_url(carbon_get_theme_option('about_us_pict2_mob'), 'full');?>">
				<source media="(max-width: 1023px)" srcset="<?=wp_get_attachment_image_url(carbon_get_theme_option('about_us_pict2_tab'), 'full');?>">
				<img src="<?=wp_get_attachment_image_url(carbon_get_theme_option('about_us_pict2'), 'full');?>" class="section__about-pict-1" alt="График развития сети">
			</picture>
			<img src="<?=wp_get_attachment_image_url(carbon_get_theme_option('about_us_pict3'), 'full');?>" class="section__about-pict-3" alt="Пример кафе сети">
			<div class="section__about-text-2">
				<?=carbon_get_theme_option('about_us_text2');?>
			</div>
		</div>
	</div>
</section>
<!-- /wp:group -->
