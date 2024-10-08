<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6474c00845193',
	'title' => 'Post Status',
	'fields' => array(
		array(
			'key' => 'field_6474c00a815ec',
			'label' => 'Post Status',
			'name' => 'post_status',
			'aria-label' => '',
			'type' => 'acfe_post_statuses',
			'instructions' => 'Post Status of the post, applied to post on save',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'post_status' => array(
				0 => 'publish',
				1 => 'hidden_from_feeds',
			),
			'field_type' => 'select',
			'default_value' => array(
			),
			'return_format' => 'object',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'placeholder' => '',
			'choices' => array(
			),
			'ajax' => 0,
			'search_placeholder' => '',
			'layout' => '',
			'toggle' => 0,
			'allow_custom' => 0,
			'other_choice' => 0,
			'min' => '',
			'max' => '',
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
	'graphql_field_name' => 'postStatus',
	'map_graphql_types_from_location_rules' => 1,
	'graphql_types' => array(
		0 => 'Whitepaper',
	),
	'modified' => 1713451847,
));

endif;