<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d4a75a1eee1a',
	'title' => 'FLEX: Layout - Two columns',
	'fields' => array(
		array(
			'key' => 'field_5d4a75aa78c53',
			'label' => 'Left column',
			'name' => 'left_column',
			'type' => 'group',
			'instructions' => 'Choose content to display in the left side bar column',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5daa237edcff8',
					'label' => 'Sidebar',
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
					'message' => 'Sidebar will auto generate a list of pages in this section.',
					'new_lines' => 'wpautop',
					'esc_html' => 0,
				),
			),
		),
		array(
			'key' => 'field_5d4a75bd78c54',
			'label' => 'Right column',
			'name' => 'right_column',
			'type' => 'group',
			'instructions' => 'Choose content to display in the main content column',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '75',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5d4a75fc78c56',
					'label' => 'Page Content',
					'name' => 'main_content',
					'type' => 'post_object',
					'instructions' => 'Display content saved within Page Content.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5da9fb4596796',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '75',
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
					'return_format' => 'id',
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'acfe_validate' => '',
					'acfe_update' => '',
					'ui' => 1,
				),
				array(
					'key' => 'field_5da9fb4596796',
					'label' => 'Page Content Off',
					'name' => 'flexible_content_main',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => 'Off',
					'ui_off_text' => 'On',
					'acfe_validate' => '',
					'acfe_update' => '',
				),
				array(
					'acfe_flexible_advanced' => 1,
					'acfe_flexible_stylised_button' => 1,
					'acfe_flexible_hide_empty_message' => 0,
					'acfe_flexible_empty_message' => '',
					'acfe_flexible_disable_ajax_title' => 0,
					'acfe_flexible_layouts_thumbnails' => 1,
					'acfe_flexible_layouts_settings' => 0,
					'acfe_flexible_layouts_ajax' => 0,
					'acfe_flexible_layouts_templates' => 0,
					'acfe_flexible_layouts_previews' => 0,
					'acfe_flexible_layouts_placeholder' => 0,
					'acfe_flexible_title_edition' => 0,
					'acfe_flexible_clone' => 0,
					'acfe_flexible_copy_paste' => 1,
					'acfe_flexible_toggle' => 0,
					'acfe_flexible_close_button' => 1,
					'acfe_flexible_remove_add_button' => 0,
					'acfe_flexible_remove_duplicate_button' => 0,
					'acfe_flexible_remove_delete_button' => 0,
					'acfe_flexible_lock' => 0,
					'acfe_flexible_modal_edition' => 0,
					'acfe_flexible_modal' => array(
						'acfe_flexible_modal_enabled' => '1',
						'acfe_flexible_modal_title' => 'Test',
						'acfe_flexible_modal_col' => '4',
						'acfe_flexible_modal_categories' => '1',
					),
					'acfe_flexible_layouts_state' => '',
					'acfe_flexible_layouts_remove_collapse' => 0,
					'key' => 'field_5da9d2910717f_field_5d80ff4e2fa44',
					'label' => 'Flexible content',
					'name' => 'right_clone_flexible_content',
					'type' => 'flexible_content',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layouts' => array(
						'layout_5d70b289ca16a' => array(
							'key' => 'layout_5d70b289ca16a',
							'name' => 'content-paragraph',
							'label' => 'Paragraph',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5d80ff4e31b94_field_5d4a79d430711',
									'label' => 'Title',
									'name' => 'title',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '70',
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
									'_clone' => 'field_5d80ff4e31b94',
									'__key' => 'field_5d4a79d430711',
									'__name' => 'title',
									'__label' => 'Title',
								),
								array(
									'key' => 'field_5d80ff4e31b94_field_5d51ebf05f507',
									'label' => 'block type',
									'name' => 'block_type',
									'type' => 'select',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '30',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'choices' => array(
										'content' => 'Content',
										'message' => 'Message',
									),
									'default_value' => false,
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'acfe_validate' => '',
									'acfe_update' => '',
									'ajax' => 0,
									'placeholder' => '',
									'_clone' => 'field_5d80ff4e31b94',
									'__key' => 'field_5d51ebf05f507',
									'__name' => 'block_type',
									'__label' => 'block type',
								),
								array(
									'key' => 'field_5d80ff4e31b94_field_5d4a79f34034e',
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
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 0,
									'delay' => 0,
									'acfe_validate' => '',
									'acfe_update' => '',
									'_clone' => 'field_5d80ff4e31b94',
									'__key' => 'field_5d4a79f34034e',
									'__name' => 'paragraph',
									'__label' => 'Paragraph',
								),
							),
							'min' => '',
							'max' => '',
							'acfe_flexible_thumbnail' => '',
							'acfe_flexible_category' => array(
								0 => 'Content',
							),
							'acfe_flexible_render_template' => false,
							'acfe_flexible_render_style' => false,
							'acfe_flexible_render_script' => false,
							'acfe_flexible_settings' => false,
							'acfe_flexible_settings_size' => 'medium',
						),
						'layout_5d75216bc0fb8' => array(
							'key' => 'layout_5d75216bc0fb8',
							'name' => 'content-table',
							'label' => 'Table',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5d80ff4e31b9d_field_5d752127acc86',
									'label' => 'Table',
									'name' => 'table',
									'type' => 'table',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'use_header' => 0,
									'use_caption' => 2,
									'acfe_validate' => '',
									'acfe_update' => '',
									'_clone' => 'field_5d80ff4e31b9d',
									'__key' => 'field_5d752127acc86',
									'__name' => 'table',
									'__label' => 'Table',
								),
								array(
									'key' => 'field_5d80ff4e31b9d_field_5d8501192de93',
									'label' => 'Full width table',
									'name' => 'full_width_table',
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
									'ui_on_text' => '',
									'ui_off_text' => '',
									'acfe_validate' => '',
									'acfe_update' => '',
									'_clone' => 'field_5d80ff4e31b9d',
									'__key' => 'field_5d8501192de93',
									'__name' => 'full_width_table',
									'__label' => 'Full width table',
								),
							),
							'min' => '',
							'max' => '',
							'acfe_flexible_thumbnail' => '',
							'acfe_flexible_category' => array(
								0 => 'Content',
							),
							'acfe_flexible_render_template' => false,
							'acfe_flexible_render_style' => false,
							'acfe_flexible_render_script' => false,
							'acfe_flexible_settings' => false,
							'acfe_flexible_settings_size' => 'medium',
						),
						'layout_5d7529b342695' => array(
							'key' => 'layout_5d7529b342695',
							'name' => 'content-space',
							'label' => 'Space',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5d80ff4e31ba5_field_5d75297bd7d98',
									'label' => 'Space',
									'name' => 'space',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '25',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'default_value' => 30,
									'placeholder' => '',
									'prepend' => '',
									'append' => 'px',
									'min' => '',
									'max' => '',
									'step' => '',
									'acfe_validate' => '',
									'acfe_update' => '',
									'_clone' => 'field_5d80ff4e31ba5',
									'__key' => 'field_5d75297bd7d98',
									'__name' => 'space',
									'__label' => 'Space',
								),
							),
							'min' => '',
							'max' => '',
							'acfe_flexible_thumbnail' => '',
							'acfe_flexible_category' => array(
								0 => 'Content',
							),
							'acfe_flexible_render_template' => false,
							'acfe_flexible_render_style' => false,
							'acfe_flexible_render_script' => false,
							'acfe_flexible_settings' => false,
							'acfe_flexible_settings_size' => 'medium',
						),
						'layout_5d822455892aa' => array(
							'key' => 'layout_5d822455892aa',
							'name' => 'content-title-01',
							'label' => 'Page title 01',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5d822455892ab_field_5d8220518100b',
									'label' => 'Title tags',
									'name' => 'title_tags',
									'type' => 'select',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '25',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'choices' => array(
										'h1' => 'h1',
										'h2' => 'h2',
										'h3' => 'h3',
										'h4' => 'h4',
										'h5' => 'h5',
										'span' => 'span',
									),
									'default_value' => false,
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'acfe_validate' => '',
									'acfe_update' => '',
									'ajax' => 0,
									'placeholder' => '',
									'_clone' => 'field_5d822455892ab',
									'__key' => 'field_5d8220518100b',
									'__name' => 'title_tags',
									'__label' => 'Title tags',
								),
								array(
									'key' => 'field_5d822455892ab_field_5d8229d07a12c_field_5d82290b06f97',
									'label' => 'Text colours',
									'name' => 'text_colours',
									'type' => 'color_palette',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'choices' => array(
										'#4D4D4D' => 'Dark',
										'#fff' => 'White',
										'#315d98' => 'Brand primary',
										'#66c7b8' => 'Brand secondary',
									),
									'default_value' => '',
									'return_format' => 'value',
									'acfe_validate' => '',
									'acfe_update' => '',
									'readonly' => 'readonly',
									'_clone' => 'field_5d822455892ab',
									'__key' => 'field_5d82290b06f97',
									'__name' => 'text_colours',
									'__label' => 'Text colours',
								),
								array(
									'key' => 'field_5d822455892ab_field_5d82205180ff5',
									'label' => 'Title',
									'name' => 'title',
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
									'_clone' => 'field_5d822455892ab',
									'__key' => 'field_5d82205180ff5',
									'__name' => 'title',
									'__label' => 'Title',
								),
							),
							'min' => '',
							'max' => '',
							'acfe_flexible_thumbnail' => '',
							'acfe_flexible_category' => array(
								0 => 'Content',
							),
							'acfe_flexible_render_template' => false,
							'acfe_flexible_render_style' => false,
							'acfe_flexible_render_script' => false,
							'acfe_flexible_settings' => false,
							'acfe_flexible_settings_size' => 'medium',
						),
						'layout_5d4a8ba76f752' => array(
							'key' => 'layout_5d4a8ba76f752',
							'name' => 'policies-pg-01',
							'label' => 'Document List',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5d80ff4e31c10_field_5d76ced4fc05f',
									'label' => 'Show search bar',
									'name' => 'show_search_bar',
									'type' => 'true_false',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'message' => '',
									'default_value' => 0,
									'ui' => 1,
									'ui_on_text' => '',
									'ui_off_text' => '',
									'acfe_validate' => '',
									'acfe_update' => '',
									'_clone' => 'field_5d80ff4e31c10',
									'__key' => 'field_5d76ced4fc05f',
									'__name' => 'show_search_bar',
									'__label' => 'Show search bar',
								),
								array(
									'key' => 'field_5d80ff4e31c10_field_5d774937d0e2c',
									'label' => 'List style type',
									'name' => 'list_style_type',
									'type' => 'radio',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'choices' => array(
										'grid' => 'Grid',
										'list' => 'List',
									),
									'allow_null' => 0,
									'other_choice' => 0,
									'default_value' => '',
									'layout' => 'horizontal',
									'return_format' => 'value',
									'acfe_validate' => '',
									'acfe_update' => '',
									'save_other_choice' => 0,
									'_clone' => 'field_5d80ff4e31c10',
									'__key' => 'field_5d774937d0e2c',
									'__name' => 'list_style_type',
									'__label' => 'List style type',
								),
								array(
									'key' => 'field_5d80ff4e31c10_field_5d85059e0b79f',
									'label' => 'Add policies',
									'name' => 'add_policies',
									'type' => 'gallery',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'min' => '',
									'max' => '',
									'insert' => 'append',
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
									'return_format' => 'array',
									'preview_size' => 'medium',
									'_clone' => 'field_5d80ff4e31c10',
									'__key' => 'field_5d85059e0b79f',
									'__name' => 'add_policies',
									'__label' => 'Add policies',
								),
								array(
									'key' => 'field_5d80ff4e31c10_field_5d703f3db434b',
									'label' => 'Choose policy category to display',
									'name' => 'choose_policy_category_to_display',
									'type' => 'taxonomy',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'acfe_permissions' => '',
									'taxonomy' => 'cpt_tax_policies',
									'field_type' => 'select',
									'allow_null' => 0,
									'add_term' => 1,
									'save_terms' => 1,
									'load_terms' => 0,
									'return_format' => 'object',
									'acfe_bidirectional' => array(
										'acfe_bidirectional_enabled' => '0',
									),
									'acfe_validate' => '',
									'acfe_update' => '',
									'multiple' => 0,
									'_clone' => 'field_5d80ff4e31c10',
									'__key' => 'field_5d703f3db434b',
									'__name' => 'choose_policy_category_to_display',
									'__label' => 'Choose policy category to display',
								),
							),
							'min' => '',
							'max' => '',
							'acfe_flexible_thumbnail' => '',
							'acfe_flexible_category' => array(
								0 => 'Policies',
							),
							'acfe_flexible_render_template' => false,
							'acfe_flexible_render_style' => false,
							'acfe_flexible_render_script' => false,
							'acfe_flexible_settings' => false,
							'acfe_flexible_settings_size' => 'medium',
						),
					),
					'button_label' => 'Add module',
					'min' => 0,
					'max' => '',
				),
			),
		),
		array(
			'key' => 'field_5d729912b3bee',
			'label' => 'Enable animation',
			'name' => 'enable_animation',
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
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
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
	'menu_order' => 63,
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
	'modified' => 1611658201,
));

endif;