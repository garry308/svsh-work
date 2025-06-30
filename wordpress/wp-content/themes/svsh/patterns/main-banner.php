<?php
/**
 * Title: main banner
 * Slug: svsh/main-banner
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<section class="section section_main-banner section_bottom-wave">
	<a href="#find_yourself" class="main-banner__scroll-hint"></a>
	<div class="main-banner__employee-container">
		<img class="main-banner__employee" src="<?=wp_get_attachment_image_url(carbon_get_theme_option('main_banner_image'), 'full');?>" alt="Работники СВШ" >
		<div class="main-banner__employee-light main-banner__employee-light_1"></div>
		<div class="main-banner__employee-light main-banner__employee-light_2"></div>
		<div class="main-banner__employee-light main-banner__employee-light_3"></div>
		<div class="main-banner__employee-light main-banner__employee-light_4"></div>
		<div class="main-banner__employee-light main-banner__employee-light_5"></div>
	</div>
	<div class="main-banner__text-container">
		<h1 class="main-banner__heading"><?=carbon_get_theme_option('main_banner_title');?></h1>
		<h1 class="main-banner__heading main-banner__heading_mobile"><?=carbon_get_theme_option('main_banner_title_mob');?></h1>
		<p class="main-banner__subheading"><?=carbon_get_theme_option('main_banner_subtitle');?></p>
		<a href="#form"><button class="svsh__button"><?=carbon_get_theme_option('main_banner_button_text');?></button></a>
	</div>
	<div class="main-banner__side-menu">
		<a class="main-banner__menu-item main-banner__menu-item_vk" href="<?=carbon_get_theme_option('vk_link');?>"></a>
		<a class="main-banner__menu-item main-banner__menu-item_yt" href="<?=carbon_get_theme_option('yt_link');?>"></a>
		<a class="main-banner__menu-item main-banner__menu-item_ok" href="<?=carbon_get_theme_option('ok_link');?>"></a>
		<a class="main-banner__menu-item main-banner__menu-item_web" href="<?=carbon_get_theme_option('web_link');?>"></a>
		<a class="main-banner__menu-item main-banner__menu-item_tg" href="<?=carbon_get_theme_option('tg_link');?>"></a>
	</div>
</section>
<!-- /wp:group -->
