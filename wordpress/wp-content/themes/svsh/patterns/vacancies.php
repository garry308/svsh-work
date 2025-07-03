<?php
/**
 * Title: vacancies
 * Slug: svsh/vacancies
 * Categories: main
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
?>
<!-- wp:group -->
<section class="section section_vacancies" id="vacancies">
	<div class="section__container section__container_vacancies">
		<div class="section__title-container section__title-container_row section__title-container_center">
			<h2 class="section__title">
				<?=carbon_get_theme_option('vacancies_title');?>
			</h2>
			<div class="section__switch">
				<input id="switch-1" name="vacancies" type="radio" value="vacancies_1" class="section__switch-input" checked>
				<label for="switch-1" class="section__switch-label section__switch-label_1" data-target="cafe">Кафе</label>
				<input id="switch-2" name="vacancies" type="radio" value="vacancies_2" class="section__switch-input ">
				<label for="switch-2" class="section__switch-label section__switch-label_2" data-target="office">Офис</label>
				<span class="section__switch-selector"></span>
			</div>
		</div>
		<div class="section__vacancies swiper swiper-vacancies" id="cafe">
			<div class="section__vacancies-back"></div>
			<div class="section__vacancies-container swiper-wrapper">
				<?php
				$jsDataVacancies = [];
				if( $slides = carbon_get_theme_option('vacancies_cafe') ) {
					foreach( $slides as $key => $slide ) {
						$jsDataVacancies[$key+1] = ['title' => $slide['name'], 'description' => $slide['about_form']];
						?>
						<div class="section__vacancy swiper-slide <?=($key == array_key_last($slides)) ? 'section__vacancy_last' : ''?>">
							<img src="<?=wp_get_attachment_image_url($slide['image'], 'full')?>"
								 class="section__vacancy-img"
								 alt="<?=htmlspecialchars($slide['name'])?>">
							<div class="section__vacancy-text-container">
								<p class="section__vacancy-title"><?=$slide['name']?></p>
								<p class="section__vacancy-subtitle"><?=$slide['about']?></p>
								<?php
								if (!empty($slide['salary'])) {
									?>
										<p class="section__vacancy-salary"><?=$slide['salary']?></p>
									<?php
								}
								?>
							</div>
							<button class="svsh__button svsh__button_vacancy"
									data-fancybox data-src="#popup-form"
									data-vacancy="<?=$key+1?>">
								Откликнуться
							</button>
						</div>
						<?php
					}
				}
				?>
			</div>

			<div class="section__vacancy-pagination">
				<div class="section__vacancy-pagination-bullet section__vacancy-pagination-bullet_prev">Предыдущая</div>
				<div class="section__vacancy-pagination-container"></div>
				<div class="section__vacancy-pagination-bullet section__vacancy-pagination-bullet_next">Следующая</div>
			</div>
		</div>
		<div class="section__vacancies-office-container" id="office">
				<?php
				if( $slides = carbon_get_theme_option('vacancies_office') ) {
					foreach( $slides as $key => $slide ) {
						$jsDataVacancies[($key+1).'_office'] = ['title' => $slide['name'], 'description' => $slide['about_form']];
						?>
						<div class="section__office-vacancy-container">
							<div class="section__office-vacancy-button">
								<div class="section__office-vacancy-button-text"><?=$slide['name']?></div>
								<p class="section__office-vacancy-button-subtext">
									<?=$slide['salary']?>
								</p>
							</div>
							<div class="section__office-vacancy">
								<?=$slide['about']?>
								<button class="svsh__button svsh__button_vacancy svsh__button_vacancy-office"
										data-fancybox data-src="#popup-form"
										data-vacancy="<?=$key+1?>_office">
									Откликнуться
								</button>
							</div>
						</div>
						<?php
					}
				}
				?>
		</div>
	</div>
</section>
<script>
	window.dataVacancy = <?=json_encode($jsDataVacancies)?>;
</script>
<!-- /wp:group -->
