<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d46d1a949c8b',
	'title' => 'CPT: Staff',
	'fields' => array(
		array(
			'key' => 'field_5d682f3853bff',
			'label' => 'Staff member category',
			'name' => 'staff_member_category',
			'type' => 'taxonomy',
			'instructions' => 'Use this to show groups of staff members. You can add members to multiple groups if needed and within the module you can select multiple groups.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'taxonomy' => 'cpt_tax_staff_categories',
			'field_type' => 'checkbox',
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'id',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'acfe_validate' => '',
			'acfe_update' => '',
			'multiple' => 0,
			'allow_null' => 0,
		),
		array(
			'key' => 'field_5d46d2751c53d',
			'label' => 'Info',
			'name' => 'info',
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
					'key' => 'field_5d46d1f81c537',
					'label' => 'Teaching title',
					'name' => 'teaching_title',
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
					'key' => 'field_5d46d2271c538',
					'label' => 'Education',
					'name' => 'education',
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
					'key' => 'field_5d46d2341c539',
					'label' => 'Form',
					'name' => 'form',
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
					'key' => 'field_5d46d2451c53a',
					'label' => 'Tag line',
					'name' => 'tag_line',
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
					'key' => 'field_5d46d24c1c53b',
					'label' => 'Bio',
					'name' => 'bio',
					'type' => 'textarea',
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
					'maxlength' => 253,
					'rows' => '',
					'new_lines' => '',
					'acfe_validate' => '',
					'acfe_update' => '',
				),
			),
		),
		array(
			'key' => 'field_5d46d2561c53c',
			'label' => 'Media',
			'name' => 'media',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5d46d1af1c535',
					'label' => 'Staff member photo',
					'name' => 'staff_member_photo',
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
					'aspect_ratio_width' => 460,
					'aspect_ratio_height' => 450,
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
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'cpt_staff',
			),
		),
	),
	'menu_order' => 41,
	'position' => 'normal',
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
	'modified' => 1611658198,
));

endif;