<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60742805ad357',
	'title' => 'Learning Advanced',
	'fields' => array(
		array(
			'key' => 'field_6148137c2ff22',
			'label' => 'Status',
			'name' => 'status',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'choices' => array(
				'EventCancelled' => 'Cancelled',
				'OnlineEventAttendanceMode' => 'Moved Online',
				'EventPostponed' => 'Postponed',
				'EventRescheduled' => 'Rescheduled',
				'EventScheduled' => 'Scheduled',
			),
			'default_value' => false,
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'allow_custom' => 0,
			'placeholder' => 'Change Status',
			'search_placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
		),
		array(
			'key' => 'field_60742831f1de9',
			'label' => 'Featured Image',
			'name' => 'featured_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'uploader' => '',
			'acfe_thumbnail' => 0,
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
			'key' => 'field_626a6781b5729',
			'label' => 'Abstract',
			'name' => 'abstract',
			'aria-label' => '',
			'type' => 'wysiwyg',
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
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
			'acfe_wysiwyg_auto_init' => 0,
			'acfe_wysiwyg_height' => 300,
			'acfe_wysiwyg_min_height' => 300,
			'acfe_wysiwyg_max_height' => '',
			'acfe_wysiwyg_valid_elements' => '',
			'acfe_wysiwyg_custom_style' => '',
			'acfe_wysiwyg_disable_wp_style' => 0,
			'acfe_wysiwyg_autoresize' => 0,
			'acfe_wysiwyg_disable_resize' => 0,
			'acfe_wysiwyg_remove_path' => 0,
			'acfe_wysiwyg_menubar' => 0,
			'acfe_wysiwyg_transparent' => 0,
			'acfe_wysiwyg_merge_toolbar' => 0,
			'acfe_wysiwyg_custom_toolbar' => 0,
			'acfe_wysiwyg_toolbar_buttons' => array(
			),
		),
		array(
			'key' => 'field_60d2b952511e8',
			'label' => 'Date',
			'name' => 'date',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => 'Those fields should be updated through the drop-down window. Changes applied directly through the input field won\'t be applied.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'acfe_repeater_stylised_button' => 0,
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Date Time range',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_60d2b963511e9',
					'label' => 'Start Date',
					'name' => 'start_date',
					'aria-label' => '',
					'type' => 'date_time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'display_format' => 'l, F j, Y | h:i A e',
					'return_format' => 'l, F j, Y | h:i A e',
					'first_day' => 1,
					'placeholder' => '',
					'min_date' => '',
					'max_date' => '',
					'min_time' => '',
					'max_time' => '',
					'no_weekends' => 0,
					'min_hour' => '',
					'max_hour' => '',
					'min_min' => '',
					'max_min' => '',
					'min_sec' => '',
					'max_sec' => '',
					'parent_repeater' => 'field_60d2b952511e8',
				),
				array(
					'key' => 'field_60d2b9d4511ea',
					'label' => 'End Date',
					'name' => 'end_date',
					'aria-label' => '',
					'type' => 'date_time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'display_format' => 'l, F j, Y | h:i A e',
					'return_format' => 'l, F j, Y | h:i A e',
					'first_day' => 1,
					'placeholder' => '',
					'min_date' => '',
					'max_date' => '',
					'min_time' => '',
					'max_time' => '',
					'no_weekends' => 0,
					'min_hour' => '',
					'max_hour' => '',
					'min_min' => '',
					'max_min' => '',
					'min_sec' => '',
					'max_sec' => '',
					'parent_repeater' => 'field_60d2b952511e8',
				),
			),
		),
		array(
			'key' => 'field_61480b5e11631',
			'label' => 'Speakers (Performers)',
			'name' => 'speakers',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'acfe_repeater_stylised_button' => 0,
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Row',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_61480b8811632',
					'label' => 'Speaker',
					'name' => 'speaker',
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
						0 => 'people',
					),
					'taxonomy' => '',
					'filters' => array(
						0 => 'search',
						1 => 'post_type',
						2 => 'taxonomy',
					),
					'elements' => '',
					'min' => '',
					'max' => '',
					'return_format' => 'object',
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => true,
						'acfe_bidirectional_related' => array(
							0 => 'field_6148196c8ccce',
						),
					),
					'acfe_add_post' => 0,
					'acfe_edit_post' => 0,
					'parent_repeater' => 'field_61480b5e11631',
					'bidirectional_target' => array(
					),
				),
				array(
					'key' => 'field_61480bcd11633',
					'label' => 'Name',
					'name' => 'name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'This field should override data from person profile page, but we haven\'t added support for this yet.',
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
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_61480b5e11631',
					'readonly' => 1,
				),
				array(
					'key' => 'field_61480bf511634',
					'label' => 'Job Title',
					'name' => 'job_title',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'This field should override data from person profile page, but we haven\'t added support for this yet.',
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
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_61480b5e11631',
					'readonly' => 1,
				),
				array(
					'key' => 'field_61480c0211635',
					'label' => 'Company',
					'name' => 'company',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'This field should override data from person profile page, but we haven\'t added support for this yet.',
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
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_61480b5e11631',
					'readonly' => 1,
				),
				array(
					'key' => 'field_61480c3011636',
					'label' => 'Bio',
					'name' => 'bio',
					'aria-label' => '',
					'type' => 'textarea',
					'instructions' => 'This field should override data from person profile page, but we haven\'t added support for this yet.',
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
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
					'acfe_textarea_code' => 0,
					'parent_repeater' => 'field_61480b5e11631',
					'readonly' => 1,
				),
				array(
					'key' => 'field_61480c3d11637',
					'label' => 'Headshot',
					'name' => 'headshot',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => 'This field should override data from person profile page, but we haven\'t added support for this yet.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'uploader' => '',
					'acfe_thumbnail' => 0,
					'return_format' => 'array',
					'preview_size' => 'medium',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'library' => 'all',
					'upload_folder' => '',
					'parent_repeater' => 'field_61480b5e11631',
					'readonly' => 1,
				),
				array(
					'key' => 'field_61480c6011638',
					'label' => 'Link',
					'name' => 'link',
					'aria-label' => '',
					'type' => 'link',
					'instructions' => 'This field should override data from person profile page, but we haven\'t added support for this yet.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'return_format' => 'array',
					'parent_repeater' => 'field_61480b5e11631',
					'readonly' => 1,
				),
			),
		),
		array(
			'key' => 'field_6075619144708',
			'label' => 'Company (Sponsors)',
			'name' => 'company',
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
				1 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => '',
			'return_format' => 'object',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => false,
				'acfe_bidirectional_related' => false,
			),
			'acfe_add_post' => 0,
			'acfe_edit_post' => 0,
			'bidirectional_target' => array(
			),
		),
		array(
			'key' => 'field_61480a1222b73',
			'label' => 'Agenda',
			'name' => 'agenda',
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
				0 => 'session',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'taxonomy',
			),
			'elements' => '',
			'min' => '',
			'max' => '',
			'return_format' => 'object',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => true,
				'acfe_bidirectional_related' => array(
					0 => 'field_626a5cc09f734',
				),
			),
			'acfe_add_post' => 0,
			'acfe_edit_post' => 0,
			'bidirectional_target' => array(
			),
		),
		array(
			'key' => 'field_609a58d96794d',
			'label' => 'Registration Fields',
			'name' => 'registration_fields',
			'aria-label' => '',
			'type' => 'checkbox',
			'instructions' => 'List of fields required to be filled in by users. Only SSO users which have these fields are allowed to register for the event.',
			'required' => 0,
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
				4 => 'phone',
			),
			'layout' => 'vertical',
			'toggle' => 0,
			'return_format' => 'value',
			'save_custom' => 0,
			'min' => '',
			'max' => '',
			'custom_choice_button_text' => 'Add new choice',
		),
		array(
			'key' => 'field_609a5a0f6794e',
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
			'acfe_flexible_stylised_button' => 1,
			'acfe_flexible_layouts_templates' => 0,
			'acfe_flexible_layouts_placeholder' => 0,
			'acfe_flexible_layouts_thumbnails' => 0,
			'acfe_flexible_layouts_settings' => 0,
			'acfe_flexible_async' => array(
			),
			'acfe_flexible_add_actions' => array(
			),
			'acfe_flexible_remove_button' => array(
				0 => 'collapse',
				1 => 'duplicate',
			),
			'acfe_flexible_layouts_state' => 'force_open',
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
				'layout_609a5a19704af' => array(
					'key' => 'layout_609a5a19704af',
					'name' => 'intrado',
					'label' => 'Intrado',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_609a5cd96794f',
							'label' => 'Event URL',
							'name' => 'event_url',
							'aria-label' => '',
							'type' => 'url',
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
							'placeholder' => '',
						),
						array(
							'key' => 'field_609e2970e9d7b',
							'label' => 'Show Key',
							'name' => 'show_key',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'If Event URL is provided then this field will be automatically updated.',
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
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_609e298de9d7c',
							'label' => 'Show Package Key',
							'name' => 'show_package_key',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'If Event URL is provided then this field will be automatically updated.',
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
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_609e2a16e9d7d',
							'label' => 'Attendee Type Key',
							'name' => 'attendee_type_key',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'If Event URL is provided then this field will be automatically updated.',
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
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_609e2a2ee9d7e',
							'label' => 'Affiliate Data',
							'name' => 'affiliate_data',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => 'If Event URL is provided then this field will be automatically updated.',
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
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
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
				'layout_609e289895a22' => array(
					'key' => 'layout_609e289895a22',
					'name' => 'gotowebinar',
					'label' => 'GoToWebinar',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_609e289895a23',
							'label' => 'Event URL',
							'name' => 'event_url',
							'aria-label' => '',
							'type' => 'url',
							'instructions' => '',
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
				'layout_61ea5ff9965a4' => array(
					'key' => 'layout_61ea5ff9965a4',
					'name' => 'swoogo',
					'label' => 'Swoogo',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_61ea6005965a5',
							'label' => 'ID',
							'name' => 'id',
							'aria-label' => '',
							'type' => 'text',
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
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_61ea6010965a6',
							'label' => 'URL',
							'name' => 'url',
							'aria-label' => '',
							'type' => 'url',
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
							'placeholder' => '',
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
				'layout_63216ee068b89' => array(
					'key' => 'layout_63216ee068b89',
					'name' => 'youtube',
					'label' => 'YouTube',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_63216efe68b8a',
							'label' => 'URL',
							'name' => 'url',
							'aria-label' => '',
							'type' => 'url',
							'instructions' => '',
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
				'layout_6322d34a45052' => array(
					'key' => 'layout_6322d34a45052',
					'name' => 'member_portal',
					'label' => 'CSC Member Portal',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_6322d36445053',
							'label' => 'Link',
							'name' => 'link',
							'aria-label' => '',
							'type' => 'url',
							'instructions' => 'Will redirect to CSC Contact Us form if empty.',
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
				'layout_65a64fb6c3beb' => array(
					'key' => 'layout_65a64fb6c3beb',
					'name' => 'external_event',
					'label' => 'External Event',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_65a64fd2c3bed',
							'label' => 'URL',
							'name' => 'url',
							'aria-label' => '',
							'type' => 'url',
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
							'placeholder' => '',
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
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
			),
			'button_label' => 'Add Vendor',
			'min' => 1,
			'max' => 1,
			'acfe_flexible_hide_empty_message' => false,
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
			'key' => 'field_61e93cf932771',
			'label' => 'Vendor Type',
			'name' => 'vendor_type',
			'aria-label' => '',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'taxonomy' => 'learning_vendor_type',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 0,
			'save_terms' => 1,
			'load_terms' => 0,
			'return_format' => 'object',
			'populate_parental_terms' => 0,
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'multiple' => 0,
			'min' => '',
			'max' => '',
			'bidirectional_target' => array(
			),
		),
		array(
			'key' => 'field_6273c7ae04af1',
			'label' => 'CISO Community Region',
			'name' => 'ciso_community_region',
			'aria-label' => '',
			'type' => 'taxonomy',
			'instructions' => 'Will also automatically add parental regions.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'taxonomy' => 'community_region',
			'field_type' => 'multi_select',
			'allow_null' => 0,
			'add_term' => 0,
			'save_terms' => 1,
			'load_terms' => 0,
			'return_format' => 'object',
			'populate_parental_terms' => 1,
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'multiple' => 0,
			'min' => '',
			'max' => '',
			'bidirectional_target' => array(
			),
		),
		array(
			'key' => 'field_6319b0346c5b1',
			'label' => 'CSC Event Fields',
			'name' => 'csc_event_fields',
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
					'key' => 'field_6319b7dd0dd84',
					'label' => 'External ID',
					'name' => 'external_id',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'Legacy ID from HubSpot DB. Currently, only used to save relation between person and event.',
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
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 1,
				),
				array(
					'key' => 'field_6319b1e76c5b5',
					'label' => 'Is Past',
					'name' => 'is_past',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'style' => '',
				),
				array(
					'key' => 'field_6322d3e445054',
					'label' => 'Registration URL',
					'name' => 'registration_url',
					'aria-label' => '',
					'type' => 'url',
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
					'placeholder' => '',
				),
				array(
					'key' => 'field_6319b1316c5b3',
					'label' => 'Lead By',
					'name' => 'lead_by',
					'aria-label' => '',
					'type' => 'post_object',
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
						0 => 'people',
					),
					'taxonomy' => '',
					'allow_null' => 1,
					'multiple' => 0,
					'return_format' => 'object',
					'save_custom' => 0,
					'save_post_status' => 'publish',
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'ui' => 1,
					'save_post_type' => '',
					'acfe_add_post' => 0,
					'acfe_edit_post' => 0,
					'min' => '',
					'max' => '',
					'bidirectional_target' => array(
					),
				),
				array(
					'key' => 'field_6319b18c6c5b4',
					'label' => 'Quarter',
					'name' => 'quarter',
					'aria-label' => '',
					'type' => 'text',
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
					'placeholder' => 'Q1 2023, Q4 2022 etc.',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_6322d57b45055',
					'label' => 'Speaker HubSpot IDs',
					'name' => 'speaker_hubspot_ids',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'Legacy field. Comma-separated list of event speakers HubSpot IDs. Used to link speakers and events during events import.',
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
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 1,
				),
			),
		),
		array(
			'key' => 'field_641ae597edf70',
			'label' => 'Ask a Question Form Link',
			'name' => 'ask_a_question_form_link',
			'aria-label' => '',
			'type' => 'link',
			'instructions' => 'Link to `Ask a Question Form`, by default fallbacks to `/ask-a-question`',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'return_format' => 'url',
		),
		array(
			'key' => 'field_65aa7d830f8ce',
			'label' => 'Organizer Details',
			'name' => 'organizer_details',
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
					'key' => 'field_65aa7d990f8cf',
					'label' => 'Name',
					'name' => 'name',
					'aria-label' => '',
					'type' => 'text',
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
					'recommended_upper_limit' => 0,
					'recommended_lower_limit' => 0,
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_65aa7dbd0f8d0',
					'label' => 'Phone',
					'name' => 'phone',
					'aria-label' => '',
					'type' => 'text',
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
					'recommended_upper_limit' => 0,
					'recommended_lower_limit' => 0,
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_65aa7dc70f8d1',
					'label' => 'Email',
					'name' => 'email',
					'aria-label' => '',
					'type' => 'text',
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
					'recommended_upper_limit' => 0,
					'recommended_lower_limit' => 0,
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_65aa7dcd0f8d2',
					'label' => 'Website',
					'name' => 'website',
					'aria-label' => '',
					'type' => 'url',
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
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'learning',
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
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'show_in_graphql' => 1,
	'graphql_field_name' => 'learningAdvanced',
	'map_graphql_types_from_location_rules' => 1,
	'graphql_types' => array(
		0 => 'Learning',
	),
	'modified' => 1713451846,
));

endif;