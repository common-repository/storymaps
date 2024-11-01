<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_gigapixel-slide',
		'title' => 'Gigapixel Slide',
		'fields' => array (
			array (
				'key' => 'field_55e42a258ca94',
				'label' => 'Date',
				'name' => 'gps_date',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e42a308ca95',
				'label' => 'Media External Content',
				'name' => 'gps_media_external_content',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e42a428ca96',
				'label' => 'Media Image',
				'name' => 'gps_media_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e42a558ca97',
				'label' => 'Media Caption',
				'name' => 'gps_media_caption',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e42a638ca98',
				'label' => 'Media Credit',
				'name' => 'gps_media_credit',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e42a6e8ca99',
				'label' => 'Overview Slide?',
				'name' => 'gps_overview_slide',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'gigapixel-slide',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_gigapixel-storymap',
		'title' => 'Gigapixel Storymap',
		'fields' => array (
			array (
				'key' => 'field_55e42a95c1b60',
				'label' => 'Width',
				'name' => 'gpsm_width',
				'type' => 'number',
				'instructions' => 'Value must be numeric only',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_55e42ad3c1b61',
				'label' => 'Height',
				'name' => 'gpsm_height',
				'type' => 'number',
				'instructions' => 'Value must be numeric only',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_55e42ae108160',
				'label' => 'Language',
				'name' => 'gpsm_language',
				'type' => 'select',
				'choices' => array (
					'en' => 'en',
					'be' => 'be',
					'de' => 'de',
					'es' => 'es',
					'fr' => 'fr',
					'he' => 'he',
					'it' => 'it',
					'jp' => 'jp',
					'nl' => 'nl',
					'no' => 'no',
					'pl' => 'pl',
					'sr' => 'sr',
					'sv' => 'sv',
					'zh-cn' => 'zh-cn',
					'zh-tw' => 'zh-tw',
				),
				'default_value' => 'en',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55e42af708161',
				'label' => 'Font',
				'name' => 'gpsm_font',
				'type' => 'select',
				'choices' => array (
					'default' => 'default',
					'abril-droidsans' => 'abril-droidsans',
					'amatic-andika' => 'amatic-andika',
					'bitter-raleway' => 'bitter-raleway',
					'clicker-garamond' => 'clicker-garamond',
					'dancing-ledger' => 'dancing-ledger',
					'emoji' => 'emoji',
					'fjalla-average' => 'fjalla-average',
					'georgia-helvetica' => 'georgia-helvetica',
					'knightlab' => 'knightlab',
					'lustria-lato' => 'lustria-lato',
					'medula-lato' => 'medula-lato',
					'oldstandard' => 'oldstandard',
					'opensans-gentiumbook' => 'opensans-gentiumbook',
					'playfair-faunaone' => 'playfair-faunaone',
					'playfair' => 'playfair',
					'pt' => 'pt',
					'roboto-megrim' => 'roboto-megrim',
					'rufina-sintony' => 'rufina-sintony',
					'ubuntu' => 'ubuntu',
					'unicaone-vollkorn' => 'unicaone-vollkorn',
				),
				'default_value' => 'default',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55e42b1308162',
				'label' => 'Calculate Zoom',
				'name' => 'gpsm_calculate_zoom',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 1,
			),
			array (
				'key' => 'field_55e42b2ec2bd2',
				'label' => 'Background Colour',
				'name' => 'gpsm_background_colour',
				'type' => 'color_picker',
				'default_value' => '',
			),
			array (
				'key' => 'field_55e42b4dc2bd3',
				'label' => 'Map as Image',
				'name' => 'gpsm_map_as_image',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_55e42b62c2bd4',
				'label' => 'Gigapixel Slides',
				'name' => 'gpsm_storymap_slides',
				'type' => 'relationship',
				'return_format' => 'object',
				'post_type' => array (
					0 => 'gigapixel-slide',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_title',
				),
				'max' => '',
			),
			array (
				'key' => 'field_55e42b87c2bd5',
				'label' => 'Zoomify URL Path',
				'name' => 'gpsm_gigapixel_url_path',
				'type' => 'text',
				'instructions' => 'URL path to zoomable image folder',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'gigapixel-storymap',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>