<?php
/**
 * Title: Footer
 * Slug: svsh/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<div class="footer__top" id="footer">
	<p class="footer__subline"><?=carbon_get_theme_option('footer_top_text');?></p>
</div>
<div class="footer__main">
	<div class="footer__main-container">
		<div class="footer__first-line">
			<div class="footer__logo">
				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 120 38" class="icon-logo" data-v-cff5c1a5=""><path fill="#b2b2b2" fill-rule="evenodd" d="M19.298 0c2.538 0 5.037.49 7.366 1.444a19.262 19.262 0 0 1 8.805 7.205c1.387 2.088 2.198 4.293 2.891 6.613h-9.302c-.746-1.354-1.308-2.398-2.42-3.493-1.963-1.934-4.567-2.99-7.34-2.99-5.77 0-10.375 4.6-10.375 10.221 0 5.684 4.67 10.222 10.375 10.222 2.774 0 5.377-1.057 7.34-2.99a9.57 9.57 0 0 0 .968-1.096c.562-.748.994-1.586 1.452-2.398h9.21c-.654 2.359-1.425 4.525-2.812 6.613a18.595 18.595 0 0 1-2.538 3.08 19.322 19.322 0 0 1-6.267 4.125 19.517 19.517 0 0 1-14.732 0 19.322 19.322 0 0 1-6.267-4.124C2.028 28.86 0 24.04 0 19c0-2.5.497-4.963 1.465-7.257 1.963-4.666 5.718-8.366 10.454-10.3A19.534 19.534 0 0 1 19.298 0Zm69.747 29.17h6.568V0h8.909v29.17h6.568V0H120v37.935H80.135V0h8.91v29.17ZM50.92 23.357v5.813h14.104c1.622 0 2.944-1.315 2.944-2.9 0-1.598-1.335-2.9-2.944-2.9H50.92v-.013Zm0-8.778h11.003c1.623 0 2.944-1.315 2.944-2.9 0-1.599-1.335-2.9-2.944-2.9H50.92v5.8Zm21.483 2.552a11.597 11.597 0 0 1 4.474 9.126c0 6.432-5.324 11.678-11.853 11.678h-23V0h19.912C68.465 0 73.79 5.246 73.79 11.678a11.649 11.649 0 0 1-1.387 5.453Z" clip-rule="evenodd"></path></svg>
				</a>
			</div>
			<div class="footer__logo footer__logo_tablet">
				<a href="/">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 120 38" class="icon-logo" data-v-cff5c1a5=""><path fill="#656565" fill-rule="evenodd" d="M19.298 0c2.538 0 5.037.49 7.366 1.444a19.262 19.262 0 0 1 8.805 7.205c1.387 2.088 2.198 4.293 2.891 6.613h-9.302c-.746-1.354-1.308-2.398-2.42-3.493-1.963-1.934-4.567-2.99-7.34-2.99-5.77 0-10.375 4.6-10.375 10.221 0 5.684 4.67 10.222 10.375 10.222 2.774 0 5.377-1.057 7.34-2.99a9.57 9.57 0 0 0 .968-1.096c.562-.748.994-1.586 1.452-2.398h9.21c-.654 2.359-1.425 4.525-2.812 6.613a18.595 18.595 0 0 1-2.538 3.08 19.322 19.322 0 0 1-6.267 4.125 19.517 19.517 0 0 1-14.732 0 19.322 19.322 0 0 1-6.267-4.124C2.028 28.86 0 24.04 0 19c0-2.5.497-4.963 1.465-7.257 1.963-4.666 5.718-8.366 10.454-10.3A19.534 19.534 0 0 1 19.298 0Zm69.747 29.17h6.568V0h8.909v29.17h6.568V0H120v37.935H80.135V0h8.91v29.17ZM50.92 23.357v5.813h14.104c1.622 0 2.944-1.315 2.944-2.9 0-1.598-1.335-2.9-2.944-2.9H50.92v-.013Zm0-8.778h11.003c1.623 0 2.944-1.315 2.944-2.9 0-1.599-1.335-2.9-2.944-2.9H50.92v5.8Zm21.483 2.552a11.597 11.597 0 0 1 4.474 9.126c0 6.432-5.324 11.678-11.853 11.678h-23V0h19.912C68.465 0 73.79 5.246 73.79 11.678a11.649 11.649 0 0 1-1.387 5.453Z" clip-rule="evenodd"></path></svg>
				</a>
			</div>
			<div class="footer__menu-icon-mobile">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
					<rect width="20" height="3" fill="#A8A8A8"/>
					<rect y="6" width="20" height="3" fill="#A8A8A8"/>
					<rect y="12" width="20" height="3" fill="#A8A8A8"/>
				</svg>
			</div>
			<nav class="footer__menu">
				<ul class="footer__menu-list">
					<?php
					$slides = carbon_get_theme_option('menu_item');
					foreach( $slides as $slide ) {
						?>
						<li class="footer__menu-item">
							<a class="footer__menu-item-link" href="<?=$slide['link']?>"><?=$slide['title']?></a>
						</li>
						<?php
					}
					?>
				</ul>
			</nav>
			<div class="footer__links desktop-only">
				<a href="<?=carbon_get_theme_option('vk_link');?>" class="footer__link footer__link_vk"></a>
				<a href="<?=carbon_get_theme_option('yt_link');?>" class="footer__link footer__link_yt"></a>
				<a href="<?=carbon_get_theme_option('ok_link');?>" class="footer__link footer__link_ok"></a>
				<a href="<?=carbon_get_theme_option('web_link');?>" class="footer__link footer__link_web"></a>
				<a href="<?=carbon_get_theme_option('tg_link');?>" class="footer__link footer__link_tg"></a>
			</div>
		</div>
		<div class="footer__second-line footer__second-line_desktop-only">
			<a target="_blank" href="/wp-content/uploads/2025/07/conf-policy.pdf" class="footer__textlink">Пользовательское соглашение</a>
			<p class="footer__textlink"><?=carbon_get_theme_option('footer_copyright');?></p>
			<a target="_blank" href="/wp-content/uploads/2025/07/policy.pdf" class="footer__textlink">Политика обработки персональных данных</a>
		</div>
		<div class="footer__second-line footer__second-line_tablet-only">
			<div class="footer__phones">
				<a href="tel:<?=carbon_get_theme_option('phone1');?>" class="footer__phone">
					<?=carbon_get_theme_option('phone1_formatted');?>,
				</a>
				<a href="tel:<?=carbon_get_theme_option('phone2');?>" class="footer__phone">
					<?=carbon_get_theme_option('phone2_formatted');?>
				</a>
			</div>
			<div class="footer__links tablet-only">
				<a href="<?=carbon_get_theme_option('vk_link');?>" class="footer__link footer__link_vk"></a>
				<a href="<?=carbon_get_theme_option('yt_link');?>" class="footer__link footer__link_yt"></a>
				<a href="<?=carbon_get_theme_option('ok_link');?>" class="footer__link footer__link_ok"></a>
				<a href="<?=carbon_get_theme_option('web_link');?>" class="footer__link footer__link_web"></a>
				<a href="<?=carbon_get_theme_option('tg_link');?>" class="footer__link footer__link_tg"></a>
			</div>
			<div class="footer__phones">
				<a href="mailto:<?=carbon_get_theme_option('footer_email');?>" class="footer__phone footer__phone_mail">
					<?=carbon_get_theme_option('footer_email');?>
				</a>
			</div>
		</div>
		<div class="footer__thrid-line footer__thrid-line_desktop-only">
			<div class="footer__thrid-line-container">
				<p class="footer__textlink"><?=carbon_get_theme_option('footer_company');?></p>
				<p class="footer__textlink"><?=carbon_get_theme_option('footer_inn');?></p>
				<p class="footer__textlink"><?=carbon_get_theme_option('footer_ogrn');?></p>
				<p class="footer__textlink"><?=carbon_get_theme_option('footer_address');?></p>
			</div>
			<div class="footer__phones">
				<a href="tel:<?=carbon_get_theme_option('phone1');?>," class="footer__phone">
					<?=carbon_get_theme_option('phone1_formatted');?>,
				</a>
				<a href="tel:<?=carbon_get_theme_option('phone2');?>," class="footer__phone">
					<?=carbon_get_theme_option('phone2_formatted');?>,
				</a>
			</div>
			<div class="footer__phones">
				<a href="mailto:<?=carbon_get_theme_option('footer_email');?>" class="footer__phone footer__phone_mail">
					<?=carbon_get_theme_option('footer_email');?>
				</a>
			</div>
		</div>
		<div class="footer__thrid-line footer__thrid-line_tablet-only">
			<div class="footer__thrid-line-container">
				<p class="footer__textlink"><?=carbon_get_theme_option('footer_company');?>
					<?=carbon_get_theme_option('footer_inn');?>,
					<?=carbon_get_theme_option('footer_ogrn');?>,<br>
					<?=carbon_get_theme_option('footer_address');?>
				</p>
			</div>
			<div class="footer__thrid-line-container footer__thrid-line-container_right">
				<p class="footer__textlink"><?=carbon_get_theme_option('footer_company');?>, <?=date('Y')?>. Все права защищены</p>
				<a target="_blank" href="/wp-content/uploads/2025/07/conf-policy.pdf" class="footer__textlink">Пользовательское соглашение</a>
				<a target="_blank" href="/wp-content/uploads/2025/07/policy.pdf" class="footer__textlink">Политика обработки персональных данных</a>
			</div>
		</div>
		<div class="footer__thrid-line footer__thrid-line_mobile-only">
			<div class="footer__links mobile-only">
				<a href="<?=carbon_get_theme_option('vk_link');?>" class="footer__link footer__link_vk"></a>
				<a href="<?=carbon_get_theme_option('yt_link');?>" class="footer__link footer__link_yt"></a>
				<a href="<?=carbon_get_theme_option('ok_link');?>" class="footer__link footer__link_ok"></a>
				<a href="<?=carbon_get_theme_option('web_link');?>" class="footer__link footer__link_web"></a>
				<a href="<?=carbon_get_theme_option('tg_link');?>" class="footer__link footer__link_tg"></a>
			</div>
			<div class="footer__thrid-line-container">
				<p class="footer__textlink"><?=carbon_get_theme_option('footer_company');?>
					<?=carbon_get_theme_option('footer_inn');?>,
					<?=carbon_get_theme_option('footer_ogrn');?>,<br>
					<?=carbon_get_theme_option('footer_address');?>
				</p>
			</div>
			<div class="footer__thrid-line-container">
				<p class="footer__textlink">© <?=carbon_get_theme_option('footer_company');?>, <?=date('Y')?>. Все права защищены</p>
				<a target="_blank" href="/wp-content/uploads/2025/07/conf-policy.pdf" class="footer__textlink">Пользовательское соглашение</a>
				<a target="_blank" href="/wp-content/uploads/2025/07/policy.pdf" class="footer__textlink">Политика обработки персональных данных</a>
			</div>
		</div>
	</div>
</div>
<!-- /wp:group -->
