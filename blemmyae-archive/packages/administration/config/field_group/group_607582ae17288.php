<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_607582ae17288',
	'title' => 'Whitepaper Advanced',
	'fields' => array(
		array(
			'key' => 'field_60758315798bf',
			'label' => 'Featured Image',
			'name' => 'featured_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'uploader' => '',
			'acfe_thumbnail' => 1,
			'return_format' => 'array',
			'preview_size' => 'featured-image',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'library' => 'all',
			'upload_folder' => '',
		),
		array(
			'key' => 'field_60758329798c0',
			'label' => 'Company Profile',
			'name' => 'company_profile',
			'aria-label' => '',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'post_type' => array(
				0 => 'company_profile',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'elements' => '',
			'min' => '',
			'max' => '',
			'return_format' => 'object',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'acfe_add_post' => 0,
			'acfe_edit_post' => 0,
			'bidirectional_target' => array(
			),
		),
		array(
			'key' => 'field_60a21f7043b2f',
			'label' => 'Vendor',
			'name' => 'vendor',
			'aria-label' => '',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'acfe_flexible_advanced' => 1,
			'acfe_flexible_stylised_button' => 0,
			'acfe_flexible_hide_empty_message' => 1,
			'acfe_flexible_layouts_templates' => 0,
			'acfe_flexible_layouts_placeholder' => 0,
			'acfe_flexible_layouts_thumbnails' => 0,
			'acfe_flexible_layouts_settings' => 0,
			'acfe_flexible_async' => array(
			),
			'acfe_flexible_add_actions' => array(
			),
			'acfe_flexible_remove_button' => array(
				0 => 'duplicate',
			),
			'acfe_flexible_layouts_state' => 'user',
			'acfe_flexible_modal_edit' => array(
				'acfe_flexible_modal_edit_enabled' => '0',
				'acfe_flexible_modal_edit_size' => 'large',
			),
			'acfe_flexible_modal' => array(
				'acfe_flexible_modal_enabled' => '0',
				'acfe_flexible_modal_title' => false,
				'acfe_flexible_modal_size' => 'full',
				'acfe_flexible_modal_col' => '4',
				'acfe_flexible_modal_categories' => false,
			),
			'layouts' => array(
				'layout_60a21f8aa33f4' => array(
					'key' => 'layout_60a21f8aa33f4',
					'name' => 'convertr',
					'label' => 'Convertr',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_60a2200743b30',
							'label' => 'Campaign ID',
							'name' => 'campaign_id',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'Auto-populated during sync.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 1,
						),
						array(
							'key' => 'field_60a22ca543b31',
							'label' => 'Campaign API Key',
							'name' => 'campaign_api_key',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'Auto-populated during sync.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 1,
						),
						array(
							'key' => 'field_60a22cf343b33',
							'label' => 'Link ID',
							'name' => 'link_id',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'Auto-populated during sync.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 1,
						),
						array(
							'key' => 'field_60a231df74408',
							'label' => 'Download Link',
							'name' => 'download_link',
							'aria-label' => '',
							'type' => 'url',
							'instructions' => 'Auto-populated during sync.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'default_value' => '',
							'placeholder' => '',
							'readonly' => 1,
						),
						array(
							'key' => 'field_60a22cfa43b34',
							'label' => 'Whitepaper ID',
							'name' => 'whitepaper_id',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'Auto-populated during sync.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 1,
						),
						array(
							'key' => 'field_60a22cd143b32',
							'label' => 'Form ID',
							'name' => 'form_id',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'Auto-populated during sync.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 1,
						),
						array(
							'key' => 'field_60a22d3443b36',
							'label' => 'Form Fields',
							'name' => 'form_fields',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'Auto-populated during sync.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 1,
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_thumbnail' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_locations' => array(
					),
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_61f7999251b07' => array(
					'key' => 'layout_61f7999251b07',
					'name' => 'internal_whitepaper',
					'label' => 'Internal Whitepaper',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_61f79a5851b08',
							'label' => 'File',
							'name' => 'file',
							'aria-label' => '',
							'type' => 'file',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'uploader' => '',
							'return_format' => 'array',
							'min_size' => '',
							'max_size' => '',
							'mime_types' => 'pdf,epub,fb2',
							'library' => 'all',
							'preview_style' => 'default',
							'placeholder' => 'Select',
							'upload_folder' => '',
							'button_label' => 'Add File',
							'stylised_button' => 0,
							'file_count' => 0,
							'multiple' => 0,
							'min' => '',
							'max' => '',
						),
						array(
							'key' => 'field_61f8cca57ed55',
							'label' => 'Registration Fields',
							'name' => 'registration_fields',
							'aria-label' => '',
							'type' => 'checkbox',
							'instructions' => 'List of fields required to be filled in by users. Only SSO users which have these fields are allowed to download the whitepaper.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'choices' => array(
								'firstName' => 'First Name',
								'lastName' => 'Last Name',
								'companyName' => 'Company Name',
								'jobTitle' => 'Job Title',
								'phone' => 'Phone',
								'jobTitleLevel' => 'Job Title Level',
								'functionalArea' => 'Functional Area',
								'companySize' => 'Company Size',
								'industry' => 'Industry',
								'country' => 'Country',
								'state' => 'State',
								'city' => 'City',
								'street' => 'Street',
								'postalCode' => 'Postal Code',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => 'firstName',
								1 => 'lastName',
								2 => 'companyName',
								3 => 'jobTitle',
							),
							'layout' => 'vertical',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
							'min' => '',
							'max' => '',
							'custom_choice_button_text' => 'Add new choice',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_thumbnail' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_locations' => array(
					),
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
			),
			'button_label' => 'Add Vendor',
			'min' => 1,
			'max' => 1,
			'acfe_flexible_empty_message' => '',
			'acfe_flexible_layouts_previews' => false,
			'acfe_flexible_layouts_locations' => false,
			'acfe_flexible_grid' => array(
				'acfe_flexible_grid_enabled' => false,
				'acfe_flexible_grid_align' => 'center',
				'acfe_flexible_grid_valign' => 'stretch',
				'acfe_flexible_grid_wrap' => false,
			),
			'acfe_flexible_grid_container' => false,
		),
		array(
			'key' => 'field_62b192d9e920d',
			'label' => 'Redirect options',
			'name' => 'redirect_options',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'layout' => 'block',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
			'sub_fields' => array(
				array(
					'key' => 'field_62b19308e920e',
					'label' => 'URL',
					'name' => 'url',
					'aria-label' => '',
					'type' => 'url',
					'instructions' => 'Will not be redirected if not provided.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'default_value' => '',
					'placeholder' => '',
				),
				array(
					'key' => 'field_62b19317e920f',
					'label' => 'Delay',
					'name' => 'delay',
					'aria-label' => '',
					'type' => 'number',
					'instructions' => 'Time to wait before redirect (in seconds).',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'default_value' => '',
					'placeholder' => 'Time in seconds',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
			),
		),
		array(
			'key' => 'field_64c234969f44c',
			'label' => 'Featured Image Height',
			'name' => 'featured_image_height',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'default_value' => '',
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64c234bd9f44d',
			'label' => 'Featured Image Width',
			'name' => 'featured_image_width',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'default_value' => '',
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'whitepaper',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 1,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'show_in_graphql' => 1,
	'graphql_field_name' => 'whitepaperAdvanced',
	'map_graphql_types_from_location_rules' => 1,
	'graphql_types' => array(
		0 => 'Whitepaper',
	),
	'modified' => 1713451840,
));

endif;