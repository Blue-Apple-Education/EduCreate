<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d85ce6fb1d19',
	'title' => 'Module: Vacancies',
	'fields' => array(
		array(
			'key' => 'field_5d91ed861437f',
			'label' => 'Display careers from the following cateogry',
			'name' => 'category',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'taxonomy' => 'cpt_tax_career_cat',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 0,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'id',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'acfe_validate' => '',
			'acfe_update' => '',
			'multiple' => 0,
		),
		array(
			'key' => 'field_5d85ce7d22fe7',
			'label' => 'No vacancies text',
			'name' => 'no_vacancies_text',
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
			'default_value' => 'Currently, there are no vacancies, however if you’d like to register your interest, we’d love to hear from you.',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
			'acfe_validate' => '',
			'acfe_update' => '',
		),
		array(
			'key' => 'field_5d85ce9c2eb50',
			'label' => 'No vacancies link',
			'name' => 'no_vacancies_link',
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
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 44,
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
		'vacancies' => 'Vacancies',
	),
	'modified' => 1615765468,
));

endif;