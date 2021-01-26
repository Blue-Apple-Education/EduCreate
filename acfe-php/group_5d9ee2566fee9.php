<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d9ee2566fee9',
	'title' => 'CPT: Newsletter',
	'fields' => array(
		array(
			'key' => 'field_5d9ee25675e8c',
			'label' => 'Preview',
			'name' => 'preview',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '75',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'acfe_validate' => '',
			'acfe_update' => '',
		),
		array(
			'key' => 'field_5d9ee4233ea1e',
			'label' => 'File',
			'name' => 'file',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
			'acfe_validate' => '',
			'acfe_update' => '',
		),
		array(
			'key' => 'field_5d9ee25675ed9',
			'label' => 'Media',
			'name' => 'media',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5d9ee2567c6b9',
					'label' => 'Post header image',
					'name' => 'post_header_image',
					'type' => 'image_aspect_ratio_crop',
					'instructions' => 'Ratio: 3840x882',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'aspect_ratio_width' => 3840,
					'aspect_ratio_height' => 882,
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'acfe_validate' => '',
					'acfe_update' => '',
					'crop_type' => 'aspect_ratio',
				),
				array(
					'key' => 'field_5d9ee2567c705',
					'label' => 'Post header image opacity',
					'name' => 'overlay',
					'type' => 'range',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => 9,
					'min' => 1,
					'max' => 9,
					'step' => '',
					'prepend' => '',
					'append' => '',
					'acfe_validate' => '',
					'acfe_update' => '',
				),
				array(
					'key' => 'field_5d9ee2567c74c',
					'label' => 'Post featured image',
					'name' => 'post_featured_image',
					'type' => 'image_aspect_ratio_crop',
					'instructions' => 'Ratio: 499 x 205',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'aspect_ratio_width' => 499,
					'aspect_ratio_height' => 205,
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'acfe_validate' => '',
					'acfe_update' => '',
					'crop_type' => 'aspect_ratio',
				),
				array(
					'key' => 'field_5d9ee2567c79a',
					'label' => 'Post content image',
					'name' => 'post_content_image',
					'type' => 'image_aspect_ratio_crop',
					'instructions' => 'Ratio: 856x308',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'aspect_ratio_width' => 856,
					'aspect_ratio_height' => 308,
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'acfe_validate' => '',
					'acfe_update' => '',
					'crop_type' => 'aspect_ratio',
				),
			),
		),
		array(
			'key' => 'field_5d9ee25686fa7',
			'label' => 'Footer content',
			'name' => 'full_width_content',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'post_type' => array(
				0 => 'cpt_page_content',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'acfe_validate' => '',
			'acfe_update' => '',
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'cpt_newsletter',
			),
		),
	),
	'menu_order' => 48,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_permissions' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1611658187,
));

endif;