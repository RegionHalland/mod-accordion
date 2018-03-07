<?php

if (function_exists('register_field_group')) {

	register_field_group(array (
		'key' => 'group_5a9552db5e48d',
		'title' => 'Accordion',
		'fields' => array (
			array (
				'key' => 'field_5a95531d67ea5',
				'label' => 'Items',
				'name' => 'items',
				'prefix' => '',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'min' => '',
				'max' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
				'sub_fields' => array (
					array (
						'key' => 'field_5a95533667ea6',
						'label' => 'Title',
						'name' => 'title',
						'prefix' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => 'field_5a95533f67ea7',
						'label' => 'Url',
						'name' => 'url',
						'prefix' => '',
						'type' => 'url',
						'instructions' => '',
						'required' => 1,
						'wrapper' => array (
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'mod-accordion',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
	));
	
}