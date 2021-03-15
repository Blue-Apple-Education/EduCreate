<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d6c097f05a42',
	'title' => 'Module: Hero 03',
	'fields' => array(
		array(
			'key' => 'field_5f194dea8dfcb',
			'label' => 'Quick links',
			'name' => 'quick_links',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'clone' => array(
				0 => 'group_5f194bb0edf6d',
			),
			'display' => 'seamless',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'acfe_clone_modal' => 0,
		),
		array(
			'key' => 'field_5d6c097f093ec',
			'label' => 'Carousel slides',
			'name' => 'carousel_slides',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'collapsed' => '',
			'min' => 1,
			'max' => 0,
			'layout' => 'row',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5d6c097f0ab35',
					'label' => 'Content',
					'name' => 'content',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6c0c7a1a09a',
							'label' => 'title Image',
							'name' => 'title_image',
							'type' => 'image_aspect_ratio_crop',
							'instructions' => 'Ratio: 288 by 178',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_permissions' => '',
							'aspect_ratio_width' => 288,
							'aspect_ratio_height' => 178,
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
							'crop_type' => 'aspect_ratio',
						),
						array(
							'key' => 'field_5d6c097f0c188',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
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
							'key' => 'field_5d6c097f0c1a5',
							'label' => 'Paragraph',
							'name' => 'paragraph',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_permissions' => '',
							'default_value' => '',
							'tabs' => 'visual',
							'toolbar' => 'basic',
							'media_upload' => 0,
							'delay' => 0,
							'acfe_validate' => '',
							'acfe_update' => '',
						),
						array(
							'key' => 'field_5d6c097f0c1ae',
							'label' => 'Link',
							'name' => 'link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_permissions' => '',
							'return_format' => 'array',
							'acfe_validate' => '',
							'acfe_update' => '',
						),
					),
				),
				array(
					'key' => 'field_5d6c097f10d0c',
					'label' => 'Media',
					'name' => 'media',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6c097f12006',
							'label' => 'Message',
							'name' => '',
							'type' => 'message',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_permissions' => '',
							'message' => 'Using more images will give better results when in smaller screens but will also reduce page speed load times.',
							'new_lines' => 'wpautop',
							'esc_html' => 0,
						),
						array(
							'key' => 'field_5d6c097f12011',
							'label' => 'Desktop Image',
							'name' => 'desktopImage',
							'type' => 'image_aspect_ratio_crop',
							'instructions' => '3840 × 2160',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'acfe_permissions' => '',
							'aspect_ratio_width' => 3840,
							'aspect_ratio_height' => 2160,
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
							'key' => 'field_5d6c097f1201a',
							'label' => 'Tablet Image',
							'name' => 'tabletImage',
							'type' => 'image_aspect_ratio_crop',
							'instructions' => '1668x2224',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'acfe_permissions' => '',
							'aspect_ratio_width' => 1668,
							'aspect_ratio_height' => 2224,
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
							'key' => 'field_5d6c097f12023',
							'label' => 'Mobile Image',
							'name' => 'mobileImage',
							'type' => 'image_aspect_ratio_crop',
							'instructions' => '828x1792',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'acfe_permissions' => '',
							'aspect_ratio_width' => 828,
							'aspect_ratio_height' => 1792,
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
							'key' => 'field_5d6c16c41b6d8',
							'label' => 'Overlay opacity',
							'name' => 'overlay_opacity',
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
							'min' => 0,
							'max' => 9,
							'step' => '',
							'prepend' => '',
							'append' => '',
							'acfe_validate' => '',
							'acfe_update' => '',
						),
					),
				),
			),
		),
		array(
			'key' => 'field_5ed902032b821',
			'label' => 'Clone',
			'name' => 'clone',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'clone' => array(
				0 => 'group_5db1cbd9a55a8',
			),
			'display' => 'seamless',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'acfe_clone_modal' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 74,
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
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'acfe_categories' => array(
		'hero' => 'Hero',
	),
	'modified' => 1615765667,
));

endif;