<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d34db503a936',
	'title' => 'Module: CTA - Grid 01',
	'fields' => array(
		array(
			'key' => 'field_5d34db5d990dd',
			'label' => 'CTA Blocks',
			'name' => 'cta_blocks',
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
			'max' => 8,
			'layout' => 'row',
			'button_label' => 'Add block',
			'sub_fields' => array(
				array(
					'key' => 'field_5d34dd8e990df',
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
					'key' => 'field_5d34dd94990e0',
					'label' => 'Paragraph',
					'name' => 'paragraph',
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
					'key' => 'field_5d34dc05990de',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image_aspect_ratio_crop',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'aspect_ratio_width' => 942,
					'aspect_ratio_height' => 800,
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
					'key' => 'field_5d34dda881d0d',
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
					'acfe_validate' => false,
					'acfe_update' => false,
				),
			),
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
	'menu_order' => 56,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
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
		'cta' => 'CTA',
	),
	'modified' => 1615765514,
));

endif;