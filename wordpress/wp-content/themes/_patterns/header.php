<?php
/**
 * Title: site header
 * Slug: svsh/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header.
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */

?>
<div class="header">
	<div class="header__top">
		<div class="header__mobile">
			<div class="header__top-left header__top-left_mob">
				<div class="header__top-leftpart header__top-leftpart_geo">Тула&nbsp;</div>
				<div class="header__top-leftpart">&nbsp;ул. Марата, д. 100&nbsp;</div>
			</div>
			<div class="header__top-right header__top-right_mob">
				<a href="tel:+74872573444" class="header__top-right-phone">
					+7 (4872) 57-34-44
				</a>
			</div>
		</div>
		<div class="header__top-content">
			<div class="header__top-left">
				<div class="header__top-leftpart header__top-leftpart_geo">Тула&nbsp;</div>
				<div class="header__top-leftpart">&nbsp;ул. Марата, д. 100&nbsp;</div>
				<div class="header__top-leftpart header__top-leftpart_time">
					<p class="header__top-bold-text">&nbsp;пн.-чт.: 09:00-18:00, пт.: 09:00-17:00,</p>
					сб.-вс.: выходные
				</div>
			</div>
			<div class="header__top-right">
				<img class="header__top-right-icon" src="<?=get_template_directory_uri();?>/assets/images/icons/call.svg" alt="Позвонить">
				<div class="header__top-right-phones">
					<a href="tel:+74872573444" class="header__top-right-phone">
						+7 (4872) 57-34-44,
					</a>
					<a href="tel:+79029057454" class="header__top-right-phone">
						+7 (902) 905-74-54
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="header__body">
		<div class="header__body-content">
			<div class="header__logo">
				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 120 38" class="icon-logo" data-v-cff5c1a5=""><path fill="#fff" fill-rule="evenodd" d="M19.298 0c2.538 0 5.037.49 7.366 1.444a19.262 19.262 0 0 1 8.805 7.205c1.387 2.088 2.198 4.293 2.891 6.613h-9.302c-.746-1.354-1.308-2.398-2.42-3.493-1.963-1.934-4.567-2.99-7.34-2.99-5.77 0-10.375 4.6-10.375 10.221 0 5.684 4.67 10.222 10.375 10.222 2.774 0 5.377-1.057 7.34-2.99a9.57 9.57 0 0 0 .968-1.096c.562-.748.994-1.586 1.452-2.398h9.21c-.654 2.359-1.425 4.525-2.812 6.613a18.595 18.595 0 0 1-2.538 3.08 19.322 19.322 0 0 1-6.267 4.125 19.517 19.517 0 0 1-14.732 0 19.322 19.322 0 0 1-6.267-4.124C2.028 28.86 0 24.04 0 19c0-2.5.497-4.963 1.465-7.257 1.963-4.666 5.718-8.366 10.454-10.3A19.534 19.534 0 0 1 19.298 0Zm69.747 29.17h6.568V0h8.909v29.17h6.568V0H120v37.935H80.135V0h8.91v29.17ZM50.92 23.357v5.813h14.104c1.622 0 2.944-1.315 2.944-2.9 0-1.598-1.335-2.9-2.944-2.9H50.92v-.013Zm0-8.778h11.003c1.623 0 2.944-1.315 2.944-2.9 0-1.599-1.335-2.9-2.944-2.9H50.92v5.8Zm21.483 2.552a11.597 11.597 0 0 1 4.474 9.126c0 6.432-5.324 11.678-11.853 11.678h-23V0h19.912C68.465 0 73.79 5.246 73.79 11.678a11.649 11.649 0 0 1-1.387 5.453Z" clip-rule="evenodd"></path></svg>
				</a>
			</div>
			<div class="header__menu-icon-mobile">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
					<rect width="20" height="3" fill="white"/>
					<rect y="6" width="20" height="3" fill="white"/>
					<rect y="12" width="20" height="3" fill="white"/>
				</svg>
			</div>
			<nav class="header__menu">
				<ul class="header__menu-list">
					<li class="header__menu-item">
						<a class="header__menu-item-link" href="#aboutus">О нас</a>
					</li>
					<li class="header__menu-item">
						<a class="header__menu-item-link" href="#whywe">Преимущества</a>
					</li>
					<li class="header__menu-item">
						<a class="header__menu-item-link" href="#vacancies">Вакансии</a>
					</li>
					<li class="header__menu-item">
						<a class="header__menu-item-link" href="#footer">Контакты</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
