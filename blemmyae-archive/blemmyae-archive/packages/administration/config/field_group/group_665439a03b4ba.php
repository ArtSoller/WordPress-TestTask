<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_665439a03b4ba',
	'title' => 'Testimonial Advanced',
	'fields' => array(
		array(
			'key' => 'field_665439a038bf8',
			'label' => 'Person',
			'name' => 'person',
			'aria-label' => '',
			'type' => 'post_object',
			'instructions' => 'Add the person to whom the testimonial belongs to.',
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
			'post_status' => array(
				0 => 'publish',
			),
			'taxonomy' => '',
			'return_format' => 'id',
			'multiple' => 0,
			'max' => '',
			'save_custom' => 0,
			'save_post_status' => 'publish',
			'acfe_add_post' => 0,
			'acfe_edit_post' => 0,
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'allow_null' => 0,
			'bidirectional' => 0,
			'ui' => 1,
			'bidirectional_target' => array(
			),
			'save_post_type' => '',
			'min' => '',
		),
		array(
			'key' => 'field_66543b8838bf9',
			'label' => 'Text',
			'name' => 'text',
			'aria-label' => '',
			'type' => 'textarea',
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
			'acfe_textarea_code' => 0,
			'recommended_upper_limit' => 0,
			'recommended_lower_limit' => 0,
			'maxlength' => '',
			'rows' => '',
			'placeholder' => 'Enter the testimonial',
			'new_lines' => '',
		),
		array(
			'key' => 'field_6661c890793f8',
			'label' => 'CISO Community Region',
			'name' => 'ciso_community_region',
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
			'taxonomy' => 'community_region',
			'add_term' => 0,
			'save_terms' => 1,
			'load_terms' => 0,
			'return_format' => 'object',
			'field_type' => 'multi_select',
			'min' => '',
			'max' => '',
			'allow_null' => 0,
			'populate_parental_terms' => 1,
			'display_hierarchical' => 0,
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'bidirectional' => 0,
			'multiple' => 0,
			'bidirectional_target' => array(
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'testimonial',
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
	'graphql_field_name' => 'testimonialAdvanced',
	'map_graphql_types_from_location_rules' => 1,
	'graphql_types' => array(
		0 => 'Testimonial',
	),
	'modified' => 1716976476,
));

endif;