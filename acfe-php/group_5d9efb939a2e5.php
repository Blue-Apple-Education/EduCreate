<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d9efb939a2e5',
	'title' => 'Module: Newsfeed Page - All posts 01',
	'fields' => array(
		array(
			'key' => 'field_5d9efb939e02f',
			'label' => 'Choose category',
			'name' => 'choose_category',
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
			'taxonomy' => 'cpt_tax_newsfeed_categories',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 0,
			'save_terms' => 1,
			'load_terms' => 0,
			'return_format' => 'id',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'acfe_validate' => '',
			'acfe_update' => '',
			'multiple' => 0,
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
	'menu_order' => 47,
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
		'cpt' => 'CPT',
		'newsfeed' => 'Newsfeed',
	),
	'modified' => 1613739534,
));

endif;