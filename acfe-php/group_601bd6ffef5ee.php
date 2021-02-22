<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_601bd6ffef5ee',
	'title' => 'Module: Hero Slider',
	'fields' => array(
		array(
			'key' => 'field_601bd73ce2bff',
			'label' => 'Slide',
			'name' => 'hero_slider',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 1,
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Slide',
			'sub_fields' => array(
				array(
					'key' => 'field_601bd74de2c00',
					'label' => 'Background Image',
					'name' => 'background_image',
					'type' => 'image',
					'instructions' => 'If there is an image in this field, it will show in place of the video',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => 'wp',
					'acfe_thumbnail' => 0,
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_601bd778e2c01',
					'label' => 'Background Video',
					'name' => 'background_video',
					'type' => 'file',
					'instructions' => 'If there is a video in this field, it will show in place of the image',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => 'wp',
					'return_format' => 'url',
					'library' => 'all',
					'min_size' => '',
					'max_size' => '',
					'mime_types' => '.mp4',
				),
				array(
					'key' => 'field_601bd79ce2c02',
					'label' => 'Background Overlay',
					'name' => 'background_overlay',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'acfe_seamless_style' => 0,
					'acfe_group_modal' => 0,
					'sub_fields' => array(
						array(
							'key' => 'field_601bd7ade2c03',
							'label' => 'Overlay Direction',
							'name' => 'overlay_direction',
							'type' => 'range',
							'instructions' => 'Enter angle for Overlay Direction ( 0 = top) (90 = Right)',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 0,
							'min' => 0,
							'max' => 360,
							'step' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_601bd7dee2c04',
							'label' => 'Fade Colour',
							'name' => 'fade_colour',
							'type' => 'extended-color-picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'color_palette' => '',
							'hide_palette' => 0,
						),
						array(
							'key' => 'field_601bd7f2e2c05',
							'label' => 'Solid Colour',
							'name' => 'solid_colour',
							'type' => 'extended-color-picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'color_palette' => '',
							'hide_palette' => 0,
						),
					),
				),
				array(
					'key' => 'field_601bd817e2c06',
					'label' => 'Content Position',
					'name' => 'content_position',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'uk-hero-slider-top-left' => 'Top Left',
						'uk-hero-slider-top-middle' => 'Top Center',
						'uk-hero-slider-top-right' => 'Top Right',
						'uk-hero-slider-middle-left' => 'Middle Left',
						'uk-hero-slider-middle-middle' => 'Centered',
						'uk-hero-slider-middle-right' => 'Middle Right',
						'uk-hero-slider-bottom-left' => 'Bottom Left',
						'uk-hero-slider-bottom-middle' => 'Bottom Center',
						'uk-hero-slider-bottom-right' => 'Bottom Right',
					),
					'default_value' => false,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'allow_custom' => 0,
					'search_placeholder' => '',
					'placeholder' => '',
				),
				array(
					'key' => 'field_601bd834e2c07',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_601bd843e2c08',
					'label' => 'Heading Animation',
					'name' => 'heading_animation',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'fade' => 'Fade',
						'scale-up' => 'Fade & Scale Up',
						'scale-down' => 'Fade & Scale Down',
						'slide-top' => 'Slide Top',
						'slide-bottom' => 'Slide Bottom',
						'slide-left' => 'Slide Left',
						'slide-right' => 'Slide Right',
						'kenburns' => 'Scale Slowly No Fade',
					),
					'default_value' => false,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'allow_custom' => 0,
					'search_placeholder' => '',
					'placeholder' => '',
				),
				array(
					'key' => 'field_601bd85ce2c09',
					'label' => 'Animation Delay',
					'name' => 'heading_animation_delay',
					'type' => 'text',
					'instructions' => '1000 = 1 Second',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '-1',
						'class' => '',
						'id' => '',
					),
					'default_value' => 500,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_601bd876e2c0a',
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
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 0,
					'delay' => 0,
				),
				array(
					'key' => 'field_601bd889e2c0b',
					'label' => 'Paragraph Animation',
					'name' => 'paragraph_animation',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'fade' => 'Fade',
						'scale-up' => 'Fade & Scale Up',
						'scale-down' => 'Fade & Scale Down',
						'slide-top' => 'Slide Top',
						'slide-bottom' => 'Slide Bottom',
						'slide-left' => 'Slide Left',
						'slide-right' => 'Slide Right',
						'kenburns' => 'Scale Slowly No Fade',
					),
					'default_value' => false,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'allow_custom' => 0,
					'search_placeholder' => '',
					'placeholder' => '',
				),
				array(
					'key' => 'field_601bd8dbab7bd',
					'label' => 'Animation Delay',
					'name' => 'paragraph_animation_delay',
					'type' => 'text',
					'instructions' => '1000 = 1 Second',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 500,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
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
	'menu_order' => 0,
	'position' => 'acf_after_title',
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
	'modified' => 1613905027,
	'acfe_categories' => array(
		'hero' => 'Hero',
	),
));

endif;