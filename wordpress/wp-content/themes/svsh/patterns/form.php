<?php
/**
 * Title: form
 * Slug: svsh/form
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<section class="section section_form" id="form">
	<div class="section__container section__container_form">
		<h2 class="section__title section__title_form"><?=carbon_get_theme_option('form_title');?></h2>
		<form class="section__form" action="#" autocomplete="on" method="POST">
			<div class="section__form-fields">
				<div class="section__form-field">
					<input type="text" name="name" autocomplete="name" required="" class="section__form-input" placeholder="Ваше имя">
				</div>
				<div class="section__form-field section__form-field_date">
					<input id="footer_date" type="text" name="birthdate" autocomplete="bday" pattern=".{10,}"
						   required="" class="section__form-input section__form-input_date" placeholder="Дата рождения">
				</div>
				<div class="section__form-field">
					<input type="text" name="city" autocomplete="address-level2" required="" class="section__form-input" placeholder="Город">
				</div>
				<div class="section__form-field">
					<input type="text" name="phone" autocomplete="phone" required="" pattern="^\+7\([0-9]{3}\)[0-9\-]{9}$" class="section__form-input section__form-input_phone" placeholder="Телефон">
				</div>
				<div class="section__form-field section__form-field_checkbox">
					<label class="section__form-checkbox-label">
						<input name="policy" type="checkbox" required class="section__form-checkbox-input">
						<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19.1889 7.30542C19.6037 7.71264 19.6037 8.37287 19.1889 8.78009L11.1267 16.6946C10.7123 17.1014 10.0405 17.1019 9.62552 16.6956L5.81216 12.9626C5.39676 12.5559 5.39583 11.8957 5.81007 11.4879C6.22431 11.0801 6.89687 11.0792 7.31227 11.4858L10.3745 14.4836L17.6867 7.30542C18.1015 6.89819 18.7741 6.89819 19.1889 7.30542Z" fill="none"></path>
						</svg>
					</label>
					<div class="section__form-checkbox-title">
						Нажимая на "Отправить", Вы соглашаетесь с <a class="section__form-checkbox-link" target="_blank" href="/wp-content/uploads/2025/07/conf-policy.pdf">Условиями сервиса</a> и
						<a class="section__form-checkbox-link" target="_blank" href="/wp-content/uploads/2025/07/policy.pdf">Политикой конфиденциальности</a>
					</div>
				</div>
				<button class="svsh__button svsh__button_center" type="submit">Отправить</button>
			</div>
		</form>
	</div>
	<div class="section__light section__light_5"></div>
	<div class="section__light section__light_6"></div>
</section>

<!-- /wp:group -->
