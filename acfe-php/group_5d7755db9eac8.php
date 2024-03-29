<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d7755db9eac8',
	'title' => 'Module: Sidebar menu custom',
	'fields' => array(
		array(
			'key' => 'field_5d7755e221d5f',
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
			'key' => 'field_5d7755e921d60',
			'label' => 'Menu list',
			'name' => 'menu_list',
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
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5d77ea80eef62',
					'label' => 'Link type',
					'name' => 'link_type',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => 'External',
					'ui_off_text' => 'Internal',
					'acfe_validate' => '',
					'acfe_update' => '',
				),
				array(
					'key' => 'field_5d7755f421d61',
					'label' => 'Internal link',
					'name' => 'internal_link',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5d77ea80eef62',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'post_type' => array(
						0 => 'page',
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
				array(
					'key' => 'field_5d77eac1eef63',
					'label' => 'External link',
					'name' => 'external_link',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5d77ea80eef62',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'return_format' => 'array',
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
	'menu_order' => 32,
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
		'page-building' => 'Page Building',
	),
	'modified' => 1615765356,
));

endif;