<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55def65d4cc4a',
	'title' => 'Storymap',
	'fields' => array (
		array (
			'key' => 'field_55def6614a010',
			'label' => 'Width',
			'name' => 'sm_width',
			'type' => 'text',
			'instructions' => 'Value must end in \'px\' or \'%\'	eg. 800px or 100%',
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
			'key' => 'field_55def67a4a011',
			'label' => 'Height',
			'name' => 'sm_height',
			'type' => 'text',
			'instructions' => 'Value must end in \'px\' eg. 800px',
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
			'key' => 'field_55def6954a012',
			'label' => 'Language',
			'name' => 'sm_language',
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
			'key' => 'field_55e19f09b44fc',
			'label' => 'Font',
			'name' => 'sm_font',
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
			'key' => 'field_55e0657cdf25c',
			'label' => 'Calculate Zoom',
			'name' => 'sm_calculate_zoom',
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
			'key' => 'field_55e2389748c96',
			'label' => 'Background Colour',
			'name' => 'sm_background_colour',
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
			'key' => 'field_55def6c24a013',
			'label' => 'Map Type',
			'name' => 'sm_map_type',
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
				'stamen:toner-lite' => 'stamen:toner-lite',
				'stamen:toner' => 'stamen:toner',
				'stamen:toner-lines' => 'stamen:toner-lines',
				'stamen:toner-labels' => 'stamen:toner-labels',
				'stamen:terrain' => 'stamen:terrain',
				'stamen:watercolor' => 'stamen:watercolor',
				'osm:standard' => 'osm:standard',
				'mapbox:map-id' => 'mapbox:map-id',
			),
			'default_value' => array (
				'stamen:toner-lite' => 'stamen:toner-lite',
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
			'key' => 'field_55e051380f1a1',
			'label' => 'Map ID',
			'name' => 'sm_mapbox_map_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55def6c24a013',
						'operator' => '==',
						'value' => 'mapbox',
					),
				),
			),
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
			'key' => 'field_55def84c4a014',
			'label' => 'Map as Image',
			'name' => 'sm_map_as_image',
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
			'key' => 'field_55e04db204e79',
			'label' => 'Storymap Slides',
			'name' => 'sm_storymap_slides',
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
				0 => 'storymap-slide',
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
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'storymap',
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

acf_add_local_field_group(array (
	'key' => 'group_55deeb9be7b10',
	'title' => 'Storymap Slide',
	'fields' => array (
		array (
			'key' => 'field_55deeba57cda8',
			'label' => 'Date',
			'name' => 'sms_date',
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
			'key' => 'field_55df8a20f579b',
			'label' => 'Media External Content',
			'name' => 'sms_media_external_content',
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
			'key' => 'field_55deebd67cda9',
			'label' => 'Media Image',
			'name' => 'sms_media_image',
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
			'key' => 'field_55deebff7cdaa',
			'label' => 'Media Caption',
			'name' => 'sms_media_caption',
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
			'key' => 'field_55deec127cdab',
			'label' => 'Media Credit',
			'name' => 'sms_media_credit',
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
			'key' => 'field_55df1aa926cd2',
			'label' => 'Overview Slide?',
			'name' => 'sms_overview_slide',
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
			'key' => 'field_55deec4f38e44',
			'label' => 'Location',
			'name' => 'sms_location',
			'type' => 'google_map',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55df1aa926cd2',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '',
			'center_lng' => '',
			'zoom' => '',
			'height' => '',
		),
		array (
			'key' => 'field_55e0621f67aeb',
			'label' => 'Location Name',
			'name' => 'sms_location_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55df1aa926cd2',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
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
			'key' => 'field_55deec9b38e46',
			'label' => 'Zoom Level',
			'name' => 'sms_location_zoom_level',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55df1aa926cd2',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 14,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'storymap-slide',
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

acf_add_local_field_group(array (
	'key' => 'group_55e15cc473ff3',
	'title' => 'Storymap Slide Category',
	'fields' => array (
		array (
			'key' => 'field_55e15ccee7549',
			'label' => 'Width',
			'name' => 'smsc_width',
			'type' => 'text',
			'instructions' => 'Value must end in \'px\' or \'%\'	eg. 800px or 100%',
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
			'key' => 'field_55e15d0ae754a',
			'label' => 'Height',
			'name' => 'smsc_height',
			'type' => 'text',
			'instructions' => 'Value must end in \'px\' or eg. 800px',
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
			'key' => 'field_55e15d1ae754b',
			'label' => 'Language',
			'name' => 'smsc_language',
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
			'key' => 'field_55e19ea303b94',
			'label' => 'Font',
			'name' => 'smsc_font',
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
			'key' => 'field_55e15d37e754c',
			'label' => 'Calculate Zoom',
			'name' => 'smsc_calculate_zoom',
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
			'key' => 'field_55e23870f6940',
			'label' => 'Background Colour',
			'name' => 'smsc_background_colour',
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
			'key' => 'field_55e15d61e754d',
			'label' => 'Map Type',
			'name' => 'smsc_map_type',
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
				'stamen:toner-lite' => 'stamen:toner-lite',
				'stamen:toner' => 'stamen:toner',
				'stamen:toner-lines' => 'stamen:toner-lines',
				'stamen:toner-labels' => 'stamen:toner-labels',
				'stamen:terrain' => 'stamen:terrain',
				'stamen:watercolor' => 'stamen:watercolor',
				'osm:standard' => 'osm:standard',
				'mapbox:map-id' => 'mapbox:map-id',
			),
			'default_value' => array (
				'stamen:toner-lite' => 'stamen:toner-lite',
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
			'key' => 'field_55e15d8ce754e',
			'label' => 'Map ID',
			'name' => 'smsc_mapbox_map_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55e15d61e754d',
						'operator' => '==',
						'value' => 'mapbox',
					),
				),
			),
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
			'key' => 'field_55e15dd0e754f',
			'label' => 'Map as Image',
			'name' => 'smsc_map_as_image',
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
			'key' => 'field_55e2c28d1c0da',
			'label' => 'Optional Category Cover Slide',
			'name' => 'smsc_optional_category_cover_slide',
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
			'key' => 'field_55e2c2fe1c0dd',
			'label' => 'Cover Slide Media External Content',
			'name' => 'smsc_cover_slide_media_external_content',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55e2c28d1c0da',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55e2c3141c0de',
			'label' => 'Cover Slide Media Image',
			'name' => 'smsc_cover_slide_media_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55e2c28d1c0da',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
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
			'key' => 'field_55e2c32f1c0df',
			'label' => 'Cover Slide Media Caption',
			'name' => 'smsc_cover_slide_media_caption',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55e2c28d1c0da',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
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
			'key' => 'field_55e2c3d81c0e1',
			'label' => 'Cover Slide Media Credit',
			'name' => 'smsc_cover_slide_media_credit',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55e2c28d1c0da',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
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
	),
	'location' => array (
		array (
			array (
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'slide-category',
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