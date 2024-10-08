<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60654ec28bdc8',
	'title' => 'Editorial Taxonomy',
	'fields' => array(
		array(
			'key' => 'field_60654eeddc40e',
			'label' => 'Type',
			'name' => 'type',
			'aria-label' => '',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'taxonomy' => 'editorial_type',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
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
			'key' => 'field_60e6df4192782',
			'label' => 'Podcast Show',
			'name' => 'podcast_show',
			'aria-label' => '',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_60654eeddc40e',
						'operator' => '==',
						'value' => '72167',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'taxonomy' => 'podcast_show',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 0,
			'save_terms' => 1,
			'load_terms' => 1,
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
			'key' => 'field_6066d31112bc0',
			'label' => 'Topic',
			'name' => 'topic',
			'aria-label' => '',
			'type' => 'acfe_taxonomy_terms',
			'instructions' => 'First topic is a main topic.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'taxonomy' => array(
				0 => 'topic',
			),
			'allow_terms' => '',
			'allow_level' => '',
			'field_type' => 'select',
			'min' => '',
			'max' => '',
			'default_value' => array(
			),
			'return_format' => 'object',
			'ui' => 1,
			'allow_null' => 0,
			'placeholder' => '',
			'multiple' => 1,
			'ajax' => 0,
			'save_terms' => 1,
			'load_terms' => 0,
			'populate_parental_terms' => 1,
			'display_hierarchical' => 1,
			'required_message' => '',
			'choices' => array(
			),
			'search_placeholder' => '',
			'layout' => '',
			'toggle' => 0,
			'allow_custom' => 0,
			'other_choice' => 0,
		),
		array(
			'key' => 'field_6257b772835fd',
			'label' => 'Parent Topic',
			'name' => 'parent_topic',
			'aria-label' => '',
			'type' => 'acfe_taxonomy_terms',
			'instructions' => 'Filled automatically after post save/update',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'taxonomy' => array(
				0 => 'topic',
			),
			'allow_terms' => '',
			'allow_level' => '',
			'field_type' => 'select',
			'min' => '',
			'max' => '',
			'default_value' => array(
			),
			'return_format' => 'object',
			'ui' => 1,
			'allow_null' => 0,
			'placeholder' => '',
			'multiple' => 1,
			'ajax' => 0,
			'save_terms' => 1,
			'load_terms' => 0,
			'populate_parental_terms' => 0,
			'display_hierarchical' => 0,
			'choices' => array(
			),
			'search_placeholder' => '',
			'layout' => '',
			'toggle' => 0,
			'allow_custom' => 0,
			'other_choice' => 0,
		),
		array(
			'key' => 'field_60655ab51908d',
			'label' => 'Industry',
			'name' => 'industry',
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
			'taxonomy' => 'industry',
			'field_type' => 'multi_select',
			'allow_null' => 1,
			'add_term' => 1,
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
			'key' => 'field_60655b3f1908e',
			'label' => 'Brand',
			'name' => 'brand',
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
			'taxonomy' => 'brand',
			'field_type' => 'checkbox',
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 0,
			'return_format' => 'object',
			'populate_parental_terms' => 1,
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'multiple' => 0,
			'allow_null' => 0,
			'min' => '',
			'max' => '',
			'bidirectional_target' => array(
			),
		),
		array(
			'key' => 'field_6065761244f70',
			'label' => 'Region',
			'name' => 'region',
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
			'taxonomy' => 'region',
			'field_type' => 'select',
			'allow_null' => 1,
			'add_term' => 1,
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
			'key' => 'field_62666ecf9fed4',
			'label' => 'SC Award',
			'name' => 'sc_award',
			'aria-label' => '',
			'type' => 'acfe_taxonomy_terms',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'taxonomy' => array(
				0 => 'sc_award',
			),
			'allow_terms' => '',
			'allow_level' => '',
			'field_type' => 'select',
			'default_value' => array(
			),
			'return_format' => 'object',
			'ui' => 1,
			'allow_null' => 1,
			'placeholder' => '',
			'multiple' => 1,
			'ajax' => 0,
			'save_terms' => 1,
			'load_terms' => 0,
			'populate_parental_terms' => 1,
			'display_hierarchical' => 1,
			'choices' => array(
			),
			'search_placeholder' => '',
			'layout' => '',
			'toggle' => 0,
			'allow_custom' => 0,
			'other_choice' => 0,
			'min' => '',
			'max' => '',
		),
		array(
			'key' => 'field_63999ef9de607',
			'label' => 'Year',
			'name' => 'year',
			'aria-label' => '',
			'type' => 'acfe_taxonomy_terms',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'taxonomy' => array(
				0 => 'years',
			),
			'allow_terms' => '',
			'allow_level' => '',
			'field_type' => 'select',
			'min' => '',
			'max' => '',
			'default_value' => array(
			),
			'return_format' => 'object',
			'ui' => 1,
			'allow_null' => 1,
			'placeholder' => '',
			'multiple' => 1,
			'ajax' => 0,
			'save_terms' => 1,
			'load_terms' => 0,
			'populate_parental_terms' => 1,
			'display_hierarchical' => 1,
			'choices' => array(
			),
			'search_placeholder' => '',
			'layout' => '',
			'toggle' => 0,
			'allow_custom' => 0,
			'other_choice' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'editorial',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => 'Taxonomies for Editorial post type',
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
	'graphql_field_name' => 'editorialTaxonomy',
	'map_graphql_types_from_location_rules' => 1,
	'graphql_types' => array(
		0 => 'Editorial',
	),
	'modified' => 1714399326,
));

endif;