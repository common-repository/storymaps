<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55e41744b1f92',
	'title' => 'Gigapixel Slide',
	'fields' => array (
		array (
			'key' => 'field_55e41744bbf96',
			'label' => 'Date',
			'name' => 'gps_date',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55e41744bbfc9',
			'label' => 'Media External Content',
			'name' => 'gps_media_external_content',
			'type' => 'url',
			'instructions' => 'The media URL can come from a number of different services, including YouTube, Flickr, Vimeo, and Twitter.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55e41744bbfd8',
			'label' => 'Media Image',
			'name' => 'gps_media_image',
			'type' => 'image',
			'instructions' => 'If an image is present, it will override any external content.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_55e41744bbfe6',
			'label' => 'Media Caption',
			'name' => 'gps_media_caption',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55e41744bbff4',
			'label' => 'Media Credit',
			'name' => 'gps_media_credit',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55e41744bc001',
			'label' => 'Overview Slide?',
			'name' => 'gps_overview_slide',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
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
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'custom_fields',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55e30bd20aafe',
	'title' => 'Gigapixel Storymap',
	'fields' => array (
		array (
			'key' => 'field_55e30bd216864',
			'label' => 'Width',
			'name' => 'gpsm_width',
			'type' => 'number',
			'instructions' => 'Value must be numeric only',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55e30bd2168be',
			'label' => 'Height',
			'name' => 'gpsm_height',
			'type' => 'text',
			'instructions' => 'Value must be Numeric',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '800px',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55e30bd2168da',
			'label' => 'Language',
			'name' => 'gpsm_language',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
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
			'default_value' => array (
				'en' => 'en',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_55e30bd2168e8',
			'label' => 'Font',
			'name' => 'gpsm_font',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
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
			'default_value' => array (
				'default' => 'default',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_55e30bd2168f8',
			'label' => 'Calculate Zoom',
			'name' => 'gpsm_calculate_zoom',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
		),
		array (
			'key' => 'field_55e30bd216907',
			'label' => 'Background Colour',
			'name' => 'gpsm_background_colour',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_55e30bd216934',
			'label' => 'Map as Image',
			'name' => 'gpsm_map_as_image',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
		),
		array (
			'key' => 'field_55e30bd216943',
			'label' => 'Gigapixel Slides',
			'name' => 'gpsm_storymap_slides',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'gigapixel-slide',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'search',
				1 => 'taxonomy',
			),
			'elements' => '',
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
		array (
			'key' => 'field_55e30dbe93d5a',
			'label' => 'Zoomify URL Path',
			'name' => 'gpsm_gigapixel_url_path',
			'type' => 'url',
			'instructions' => 'URL path to zoomable image folder',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'gigapixel-storymap',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

?>