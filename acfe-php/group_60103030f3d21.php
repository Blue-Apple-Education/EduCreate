<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60103030f3d21',
	'title' => 'Page Builder',
	'fields' => array(
		array(
			'acfe_flexible_advanced' => 1,
			'acfe_flexible_stylised_button' => 1,
			'acfe_flexible_hide_empty_message' => 0,
			'acfe_flexible_empty_message' => '',
			'acfe_flexible_disable_ajax_title' => 0,
			'acfe_flexible_layouts_thumbnails' => 1,
			'acfe_flexible_layouts_settings' => 1,
			'acfe_flexible_layouts_ajax' => 0,
			'acfe_flexible_layouts_templates' => 0,
			'acfe_flexible_layouts_previews' => 0,
			'acfe_flexible_layouts_placeholder' => 1,
			'acfe_flexible_title_edition' => 1,
			'acfe_flexible_clone' => 0,
			'acfe_flexible_copy_paste' => 0,
			'acfe_flexible_toggle' => 0,
			'acfe_flexible_close_button' => 1,
			'acfe_flexible_remove_add_button' => 0,
			'acfe_flexible_remove_duplicate_button' => 0,
			'acfe_flexible_remove_delete_button' => 0,
			'acfe_flexible_lock' => 0,
			'acfe_flexible_modal_edition' => 1,
			'acfe_flexible_modal' => array(
				'acfe_flexible_modal_enabled' => '1',
				'acfe_flexible_modal_title' => 'Test',
				'acfe_flexible_modal_col' => '4',
				'acfe_flexible_modal_categories' => '1',
			),
			'acfe_flexible_layouts_state' => '',
			'acfe_flexible_layouts_remove_collapse' => 0,
			'key' => 'field_604f358c276ba',
			'label' => 'Content',
			'name' => 'content',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'layouts' => array(
				'layout_604f3946df112' => array(
					'key' => 'layout_604f3946df112',
					'name' => 'calendar',
					'label' => 'Calendar',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f394edf113',
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
								0 => 'group_5d6d8bec21122',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Calendar',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f39d9df118' => array(
					'key' => 'layout_604f39d9df118',
					'name' => 'contact-pg-01',
					'label' => 'Contact form 1',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f39e6df119',
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
								0 => 'group_5d4747c8d3674',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Contact',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f360b276be' => array(
					'key' => 'layout_604f360b276be',
					'name' => 'cta',
					'label' => 'CTA - Default',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3618276bf',
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
							'clone' => array(
								0 => 'group_60215f9deab75',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3888df108' => array(
					'key' => 'layout_604f3888df108',
					'name' => 'cta-caro-01',
					'label' => 'CTA - Carousel 1',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f388edf109',
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
								0 => 'group_5d361e833ff82',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3869df106' => array(
					'key' => 'layout_604f3869df106',
					'name' => 'cta-4icon-01',
					'label' => 'CTA - 4 icons 1',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f386edf107',
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
								0 => 'group_5d80d6e503391',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3823df104' => array(
					'key' => 'layout_604f3823df104',
					'name' => 'cta-4icon-coloured-01',
					'label' => 'CTA - 4 icons coloured 1',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f382adf105',
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
								0 => 'group_5d80bdeed6d06',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f374ce06c7' => array(
					'key' => 'layout_604f374ce06c7',
					'name' => 'cta-img-01',
					'label' => 'CTA - Image 1',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3757e06c8',
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
								0 => 'group_5d49d7831bb4d',
							),
							'display' => 'seamless',
							'layout' => '',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f392fdf110' => array(
					'key' => 'layout_604f392fdf110',
					'name' => 'cta-quick-links',
					'label' => 'CTA - Quick links',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3933df111',
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
								0 => 'group_5f0599c9f36a5',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3917df10e' => array(
					'key' => 'layout_604f3917df10e',
					'name' => 'cta-signup-01',
					'label' => 'CTA - Signup 1',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f391bdf10f',
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
								0 => 'group_5d6d6c63bc499',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3bf6df130' => array(
					'key' => 'layout_604f3bf6df130',
					'name' => 'policies-pg-01',
					'label' => 'Document List',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3c0cdf131',
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
								0 => 'group_5d703f3db0296',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Documents',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f362c276c0' => array(
					'key' => 'layout_604f362c276c0',
					'name' => 'elliptical-welcome-slider',
					'label' => 'Elliptical Welcome Slider',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3635276c1',
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
							'clone' => array(
								0 => 'group_6040e14e1cea0',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f35f3276bc' => array(
					'key' => 'layout_604f35f3276bc',
					'name' => 'hero',
					'label' => 'Hero',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f35fa276bd',
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
							'clone' => array(
								0 => 'group_601bd977c1cde',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Hero',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f35923a555' => array(
					'key' => 'layout_604f35923a555',
					'name' => 'hero-slider',
					'label' => 'Hero Slider',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f35ac276bb',
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
							'clone' => array(
								0 => 'group_601bd6ffef5ee',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Hero',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3b37df126' => array(
					'key' => 'layout_604f3b37df126',
					'name' => 'hero-nrw-01',
					'label' => 'Hero Narrow',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3b42df127',
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
								0 => 'group_60547e5be74c2',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Hero',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3695276c6' => array(
					'key' => 'layout_604f3695276c6',
					'name' => 'image-gallery',
					'label' => 'Image Gallery',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f369c276c7',
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
							'clone' => array(
								0 => 'group_604b62ead5baf',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Gallery',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3680276c4' => array(
					'key' => 'layout_604f3680276c4',
					'name' => 'interactive-banners',
					'label' => 'Interactive Banners',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3688276c5',
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
							'clone' => array(
								0 => 'group_604a406df1e44',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'CTA',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3b8adf12a' => array(
					'key' => 'layout_604f3b8adf12a',
					'name' => 'newsfeed-caro-01',
					'label' => 'Newsfeed carousel 1',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3b96df12b',
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
								0 => 'group_5d374c068af39',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Newsfeed',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3ba9df12c' => array(
					'key' => 'layout_604f3ba9df12c',
					'name' => 'newsfeed-caro-02',
					'label' => 'Newsfeed carousel 2',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3bb1df12d',
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
								0 => 'group_5d6e25cda2093',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Newsfeed',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3648276c2' => array(
					'key' => 'layout_604f3648276c2',
					'name' => 'newsfeed-pg-01',
					'label' => 'Newsfeed posts 1',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f364e276c3',
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
							'clone' => array(
								0 => 'group_5d9efb939a2e5',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Newsfeed',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3b66df128' => array(
					'key' => 'layout_604f3b66df128',
					'name' => 'newsfeed-pg-02',
					'label' => 'Newsfeed posts 2',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3b6ddf129',
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
								0 => 'group_5d9efb955429e',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Newsfeed',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f56f3f3145' => array(
					'key' => 'layout_604f56f3f3145',
					'name' => 'text-column-master',
					'label' => 'Text Column',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f573af3147',
							'label' => 'Number of Columns',
							'name' => 'number_of_columns',
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
								0 => 'group_602aa00c223e6',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
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
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3c50df134' => array(
					'key' => 'layout_604f3c50df134',
					'name' => 'social-twitter-01',
					'label' => 'Social twitter carousel',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3c5adf135',
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
								0 => 'group_5d6d9f7bb0fee',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Social',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3c7adf136' => array(
					'key' => 'layout_604f3c7adf136',
					'name' => 'social-twitter-02',
					'label' => 'Social twitter tiles',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3c84df137',
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
								0 => 'group_5e2430cf29bd4',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Social',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3c23df132' => array(
					'key' => 'layout_604f3c23df132',
					'name' => 'staff-pg-01',
					'label' => 'Staff members',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f3c32df133',
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
								0 => 'group_5d6832616a675',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Staff',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
				'layout_604f3996df116' => array(
					'key' => 'layout_604f3996df116',
					'name' => 'vacancy-pg-01',
					'label' => 'Vacancies Slider',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_604f399ddf117',
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
								0 => 'group_5d85ce6fb1d19',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_settings' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_category' => array(
						0 => 'Vacancies',
					),
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'medium',
				),
			),
			'button_label' => 'Add Module',
			'min' => '',
			'max' => '',
			'acfe_settings' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'index.php',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
		4 => 'author',
		5 => 'format',
		6 => 'page_attributes',
		7 => 'featured_image',
		8 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_permissions' => '',
	'acfe_form' => 1,
	'acfe_meta' => '',
	'acfe_note' => '',
	'acfe_categories' => array(
		'page-building' => 'Page Building',
	),
	'modified' => 1616151860,
));

endif;