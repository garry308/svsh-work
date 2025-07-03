<?php
/**
 * Svsh functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Svsh
 * @since Svsh 1.0
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	// Тут описаны все контентные поля
	$blocks = [
		'menu' => [
			'name' => 'Меню',
			'fields' => [
				['complex', 'menu_item', 'Пункт меню', [], [
					// тип поля, код поля, название в админке, стандартное значение
					['text', 'title', 'Название', ''],
					['text', 'link', 'Ссылка', ''],
				]],
			]
		],
		'social' => [
			'name' => 'Соцсети',
			'fields' => [
				['text', 'vk_link', 'Ссылка на ВК', '', []],
				['text', 'yt_link', 'Ссылка на YouTube', '', []],
				['text', 'ok_link', 'Ссылка на ОК', '', []],
				['text', 'web_link', 'Ссылка на сайт', '', []],
				['text', 'tg_link', 'Ссылка на Telegram', '', []],
			]
		],
		'header' => [
			'name' => 'Шапка',
			'fields' => [
				// тип поля, код поля, название в админке, стандартное значение, поля для комплексного типа
				['text', 'address_city', 'Город', '', []],
				['text', 'address', 'Адрес (улица, дом)', '', []],
				['text', 'worktime_bold', 'Время работы (жирный шрифт)', '', []],
				['text', 'worktime', 'Время работы (обычный шрифт)', '', []],
				['text', 'phone1_formatted', 'Телефон 1 (форматированный)', '', []],
				['text', 'phone1', 'Телефон 1 ', '', []],
				['text', 'phone2_formatted', 'Телефон 2 (форматированный)', '', []],
				['text', 'phone2', 'Телефон 2', '', []],
				['image', 'phone_icon', 'Иконка звонка', '', []],
			]
		],
		'main_block' => [
			'name' => 'Главный баннер',
			'fields' => [
				['text', 'main_banner_title', 'Заголовок (h1)', '', []],
				['text', 'main_banner_title_mob', 'Заголовок (h1) - мобильная версия', '', []],
				['text', 'main_banner_subtitle', 'Подзаголовок ', '', []],
				['text', 'main_banner_button_text', 'Кнопка ', '', []],
				['image', 'main_banner_image', 'Картинка справа ', '', []],

			]
		],
		'video_block' => [
			'name' => 'Блок с видео',
			'fields' => [
				['textarea', 'video_block_title', 'Заголовок ', '', []],
				['image', 'video_block_icon', 'Иконка ', '', []],
				['textarea', 'video_block_video', 'Код iframe для видео ', '', []],
			]
		],
		'about_us' => [
			'name' => 'Блок "О нашей компании"',
			'fields' => [
				['textarea', 'about_us_title', 'Заголовок ', '', []],
				['image', 'about_us_icon', 'Иконка ', '', []],
				['complex', 'about_us_numbers', 'Цифры', [], [
					['textarea', 'number', 'Цифра', ''],
					['textarea', 'description', 'Описание', ''],
				]],
				['image', 'about_us_pict1', 'Картинка 1 ', '', []],
				['image', 'about_us_pict1_tab', 'Картинка 1 - планшет ', '', []],
				['image', 'about_us_pict1_mob', 'Картинка 1 - мобильный ', '', []],
				['image', 'about_us_pict2', 'Картинка 2 ', '', []],
				['image', 'about_us_pict2_tab', 'Картинка 2 - планшет ', '', []],
				['image', 'about_us_pict2_mob', 'Картинка 2 - мобильный ', '', []],
				['image', 'about_us_pict3', 'Картинка 3 ', '', []],
				['textarea', 'about_us_text1', 'Текст 1', '', []],
				['textarea', 'about_us_text2', 'Текст 2', '', []],
			]
		],
		'our_values' => [
			'name' => 'Блок "Наши ценности"',
			'fields' => [
				['textarea', 'our_values_title', 'Заголовок ', '', []],
				['image', 'our_values_icon', 'Иконка ', '', []],
				['complex', 'our_values_cards', 'Карточки (не более 4) ', [], [
					// тип поля, код поля, название в админке, стандартное значение
					['image', 'image', 'Картинка', ''],
					['text', 'title', 'Заголовок (без хештега)', ''],
					['text', 'subtitle', 'Подпись', ''],
				]],
				['image', 'our_values_picture_mob', 'Картинка для мобильных над карточками ', '', []],
			]
		],
		'why_we' => [
			'name' => 'Блок "Почему МЫ"',
			'fields' => [
				['textarea', 'why_we_title', 'Заголовок ', '', []],
				['image', 'why_we_icon', 'Иконка ', '', []],
				['complex', 'why_we_cards', 'Карточки (не более 4) ', [], [
					// тип поля, код поля, название в админке, стандартное значение
					['image', 'image', 'Иконка', ''],
					['text', 'title', 'Заголовок (без хештега)', ''],
					['text', 'subtitle', 'Подпись', ''],
				]],
			]
		],
		'partner_program' => [
			'name' => 'Блок "Партнерская программа"',
			'fields' => [
				['textarea', 'partner_program_title', 'Заголовок ', '', []],
				['textarea', 'partner_program_subtitle', 'Подзаголовок ', '', []],
				['text', 'partner_program_button_text', 'Подпись кнопки ', '', []],
				['image', 'partner_program_image', 'Картинка слева', '', []],
			]
		],
		'vacancies' => [
			'name' => 'Блок "Вакансии"',
			'fields' => [
				['textarea', 'vacancies_title', 'Заголовок ', '', []],
				['complex', 'vacancies_cafe', 'Вакансии(кафе)', [], [
					// тип поля, код поля, название в админке, стандартное значение
					['image', 'image', 'Картинка', ''],
					['text', 'name', 'Название вакансии', ''],
					['textarea', 'about', 'Описание вакансии', ''],
					['text', 'salary', 'Зарплата', ''],
					['textarea', 'about_form', 'Описание для формы отклика', '']
				]],
				['complex', 'vacancies_office', 'Вакансии(офис)', [], [
					// тип поля, код поля, название в админке, стандартное значение
					['text', 'name', 'Название вакансии', ''],
					['textarea', 'salary', 'Зарплата', ''],
					['textarea', 'about', 'Описание вакансии', ''],
					['textarea', 'about_form', 'Описание для формы отклика', '']
				]],
			]
		],
		'form' => [
			'name' => 'Форма обратной связи',
			'fields' => [
				['text', 'form_title', 'Заголовок ', '', []],
			]
		],
		'footer' => [
			'name' => 'Подвал',
			'fields' => [
				['text', 'footer_top_text', 'Подпись над шапкой ', '', []],
				['text', 'footer_copyright', 'Копирайт ', '', []],
				['text', 'footer_company', 'Компания ', '', []],
				['text', 'footer_inn', 'ИНН ', '', []],
				['text', 'footer_ogrn', 'ОГРН ', '', []],
				['text', 'footer_address', 'Юридический адрес ', '', []],
				['text', 'footer_email', 'E-mail ', '', []],
			]
		]
	];

	// Формируем поля в Carbon Fields
	$mainContainer = Container::make('theme_options', __('Контент сайта'));
	foreach ($blocks as $block)
	{
		$carbonFields = [];
		foreach ($block['fields'] as $field)
		{
			$tempField = Field::make($field[0], $field[1], $field[2])->set_default_value($field[3]);
			if (!empty($field[4]) && $field[0] == 'complex')
			{
				$tempSubFields = [];
				foreach ($field[4] as $subFields)
					$tempSubFields[] = Field::make($subFields[0], $subFields[1], $subFields[2])->set_default_value($subFields[3]);
				$tempField->add_fields($tempSubFields);
			}
			$carbonFields[] = $tempField;
		}
		$mainContainer->add_tab($block['name'], $carbonFields);
	}
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

// Adds theme support for post formats.
if ( ! function_exists( 'svsh_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Svsh 1.0
	 *
	 * @return void
	 */
	function svsh_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'svsh_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'svsh_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Svsh 1.0
	 *
	 * @return void
	 */
	function svsh_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
		add_editor_style( get_parent_theme_file_uri( 'assets/css/main.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'svsh_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'svsh_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Svsh 1.0
	 *
	 * @return void
	 */
	function svsh_enqueue_styles() {
		wp_enqueue_style(
			'air-datepicker',
			get_parent_theme_file_uri( 'assets/css/air-datepicker.min.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style(
			'fancybox',
			get_parent_theme_file_uri( 'assets/css/fancybox.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style(
			'swiper',
			get_parent_theme_file_uri( 'assets/css/swiper-bundle.min.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style(
			'svsh-style',
			get_parent_theme_file_uri( 'assets/css/main.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_script(
			'air-datepicker-script',
			get_parent_theme_file_uri( 'assets/js/air-datepicker.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
		true );
		wp_enqueue_script(
			'fancybox.umd-script',
			get_parent_theme_file_uri( 'assets/js/fancybox.umd.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true );
		wp_enqueue_script(
			'imask-script',
			get_parent_theme_file_uri( 'assets/js/imask.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true );
		wp_enqueue_script(
			'swiper-script',
			get_parent_theme_file_uri( 'assets/js/swiper-bundle.min.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true );
		wp_enqueue_script(
			'svsh-script',
			get_parent_theme_file_uri( 'assets/js/main.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true );
	}
endif;
add_action( 'wp_head', 'svsh_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'svsh_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Svsh 1.0
	 *
	 * @return void
	 */
	function svsh_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'svsh' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'svsh_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'svsh_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Svsh 1.0
	 *
	 * @return void
	 */
	function svsh_pattern_categories() {

		register_block_pattern_category(
			'svsh_page',
			array(
				'label'       => __( 'Pages', 'svsh' ),
				'description' => __( 'A collection of full page layouts.', 'svsh' ),
			)
		);

		register_block_pattern_category(
			'svsh_post-format',
			array(
				'label'       => __( 'Post formats', 'svsh' ),
				'description' => __( 'A collection of post format patterns.', 'svsh' ),
			)
		);
	}
endif;
add_action( 'init', 'svsh_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'svsh_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Svsh 1.0
	 *
	 * @return void
	 */
	function svsh_register_block_bindings() {
		register_block_bindings_source(
			'svsh/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'svsh' ),
				'get_value_callback' => 'svsh_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'svsh_register_block_bindings' );

function prefix_unregister_all_core_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

add_action( 'after_setup_theme', 'prefix_unregister_all_core_patterns', 99, 0 );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'svsh_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Svsh 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function svsh_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
add_action( 'wp_head', 'myajax_data', 8 );
function myajax_data(){
	$data = [
		'url' => admin_url( 'admin-ajax.php' ),
	];
	?>
	<script id="myajax_data">
		window.myajax = <?= wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) ?>
	</script>
	<?php
}
add_action( 'wp_ajax_form_submit', 'form_submit' );
add_action( 'wp_ajax_nopriv_form_submit', 'form_submit' );
function form_submit() {
	$name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '';
	$birthdate = isset($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate'], ENT_QUOTES, 'UTF-8') : '';
	$city = isset($_POST['city']) ? htmlspecialchars($_POST['city'], ENT_QUOTES, 'UTF-8') : '';
	$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8') : '';
	$vacancy = isset($_POST['vacancy']) ? htmlspecialchars($_POST['vacancy'], ENT_QUOTES, 'UTF-8') : 'Не указана';

	$request = [
			'fields' => [
				"TITLE" => "Новая заявка - работа в СВШ (".$phone.")",
				"COMMENTS" => 'Имя - '.$name.'<br>Дата рождения - '.$birthdate.'<br>Номер телефона - '.$phone.'<br>Вакансия - '.$vacancy,
			],
			'params' => ['REGISTER_SONET_EVENT' => 'Y']
	];
	$method = 'crm.deal.add.json';
	$queryUrl = "https://b24-gtvgg4.bitrix24.ru/rest/1/b8yt91p83i01gsda/".$method;
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $queryUrl,
		CURLOPT_SSL_VERIFYPEER => 0,
		CURLOPT_POST => 1,
		CURLOPT_HEADER => 0,
		CURLOPT_RETURNTRANSFER => 1,
	));
	if(!empty($request)){
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($request));
	}
	$result = curl_exec($curl);
	curl_close($curl);
	echo $result;

	// выход нужен для того, чтобы в ответе не было ничего лишнего,
	// только то что возвращает функция
	wp_die();
}
