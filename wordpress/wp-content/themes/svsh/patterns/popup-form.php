<?php
/**
 * Title: popup form
 * Slug: svsh/popup-form
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<div class="popup-form" id="popup-form">
	<div class="popup-form__container">
		<div class="popup-form__image-container">
			<div class="section__light section__light_7"></div>
			<div class="section__light section__light_8"></div>
			<div class="section__light section__light_9"></div>
			<div class="section__light section__light_10"></div>
			<div class="section__light section__light_11"></div>
		</div>
		<img src="<?=get_template_directory_uri();?>/assets/images/popup-employee.webp" class="popup-form__image">
		<div class="popup-form__right">
			<div class="popup-form__vac-text">
				<p class="popup-form__title"></p>
				<div class="popup-form__description" onclick="this.classList.toggle('active')">
				</div>
				<p class="popup-form__form-title">Заполни анкету и стань частью команды!</p>
				<form class="section__form section__form_popup" action="#" autocomplete="on" method="POST">
					<div class="section__form-fields">
						<div class="section__form-field">
							<label>
								<input type="text" name="name" autocomplete="name" required="" class="section__form-input section__form-input_white" placeholder="Ваше имя">
							</label>
						</div>
						<div class="section__form-field section__form-field_date">
							<label>
								<input id="popup_date" type="text" name="birthdate" autocomplete="bday" pattern=".{10,}" required="" class="section__form-input section__form-input_white section__form-input_date" placeholder="Дата рождения">
							</label>
						</div>
						<div class="section__form-field">
							<label>
								<input type="text" name="city" autocomplete="address-level2" required="" class="section__form-input section__form-input_white" placeholder="Город">
							</label>
						</div>
						<div class="section__form-field">
							<label>
								<input type="text" name="phone" autocomplete="phone" required="" pattern="^\+7\([0-9]{3}\)[0-9\-]{9}$" class="section__form-input section__form-input_white section__form-input_phone" placeholder="Телефон">
							</label>
						</div>
						<button class="svsh__button svsh__button_center svsh__button_big" type="submit">Отправить</button>
						<div class="section__form-field section__form-field_checkbox section__form-field_checkbox_popup">
							<label class="section__form-checkbox-label">
								<input name="policy" type="checkbox" required class="section__form-checkbox-input">
								<svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M19.1889 7.30542C19.6037 7.71264 19.6037 8.37287 19.1889 8.78009L11.1267 16.6946C10.7123 17.1014 10.0405 17.1019 9.62552 16.6956L5.81216 12.9626C5.39676 12.5559 5.39583 11.8957 5.81007 11.4879C6.22431 11.0801 6.89687 11.0792 7.31227 11.4858L10.3745 14.4836L17.6867 7.30542C18.1015 6.89819 18.7741 6.89819 19.1889 7.30542Z" fill="none"></path>
								</svg>
							</label>
							<div class="section__form-checkbox-title section__form-checkbox-title_gray">
								Нажимая на "Отправить", Вы соглашаетесь с <a class="section__form-checkbox-link section__form-checkbox-link_gray" target="_blank" href="/wp-content/uploads/2025/07/conf-policy.pdf">Условиями сервиса</a> и
								<a class="section__form-checkbox-link section__form-checkbox-link_gray" target="_blank" href="/wp-content/uploads/2025/07/policy.pdf">Политикой конфиденциальности</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
<!-- /wp:group -->
