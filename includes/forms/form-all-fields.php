<?php
Give_Form_API::register_form( array(
	'sort_by_priority' => true,
	'fields'           => array(
		'text-field'                    => array(
			'type'             => 'text',
			'label'            => __( 'Text Field' ),
			// 'default'          => 'givewp',
			// 'value'            => 'GiveWP',
			'field_attributes' => array(
				'placeholder' => __( 'Text Field' ),
			),
			'priority'         => 1,
		),
		'email-field'                   => array(
			'type'             => 'email',
			'label'            => __( 'Email Field' ),
			// 'default'          => 'givewp@givewp.com',
			'field_attributes' => array(
				'placeholder' => __( 'Email Field' ),
			),
			'priority'         => 2,
		),
		'number-field'                  => array(
			'type'             => 'number',
			'label'            => __( 'Number Field' ),
			// 'default'          => 3,
			'field_attributes' => array(
				'placeholder' => __( 'Number Field' ),
			),
			'priority'         => 3,
		),
		'password-field'                => array(
			'type'             => 'password',
			'label'            => __( 'Password Field' ),
			// 'default'          => 'givewp',
			'field_attributes' => array(
				'placeholder' => __( 'Password Field' ),
			),
			'priority'         => 4,
		),
		'textarea-field'                => array(
			'type'             => 'textarea',
			'label'            => __( 'Textarea Field' ),
			// 'default'          => 'This is default textarea content.',
			// 'value'          => 'This is saved textarea content.',
			'field_attributes' => array(
				'placeholder' => __( 'Textarea Field' ),
			),
			'priority'         => 5,
		),
		'select-field'                  => array(
			'type'     => 'select',
			'label'    => __( 'Select Field' ),
			// 'default' => 'option-3',
			// 'value'   => 'option-2',
			'options'  => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
			'priority' => 5,
		),
		'multi-select-field'            => array(
			'type'     => 'multi_select',
			'label'    => __( 'Multi Select Field' ),
			// 'default' => array( 'option-1',  'option-3' ),
			// 'value' => 	 array( 'option-2',  'option-3' ),
			'options'  => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
			'priority' => 7,
		),
		'radio-field'                   => array(
			'type'     => 'radio',
			'label'    => __( 'Radio Field' ),
			// 'default' => 'option-2',
			// 'value' => 'option-3',
			'options'  => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
			'priority' => 8,
		),
		'checkbox-field'                => array(
			'type'           => 'checkbox',
			'cbvalue'        => 'off',
			// 'default' => 'off',
			// 'value' => '',
			'label'          => __( 'Checkbox Field' ),
			'label_position' => 'after',
			'priority'       => 9,
		),
		'multi-checkbox-field'          => array(
			'type'     => 'multi_checkbox',
			'label'    => __( 'Multi Checkbox Field' ),
			// 'default' => 'hourly',
			// 'value' => array( 'weekly' ),
			'options'  => array(
				'daily'  => __( 'Daily' ),
				'hourly' => __( 'Hourly' ),
				'weekly' => __( 'Weekly' ),
			),
			'priority' => 10,
		),
		'sortable-multi-checkbox-field' => array(
			'type'          => 'multi_checkbox',
			'label'         => __( 'Sortable Multi Checkbox Field' ),
			'sortable'      => true,
			'sortable-icon' => true,
			// 'default' => 'weekly',
			// 'value' => array( 'hourly' ),
			'options'       => array(
				'daily'  => __( 'Daily' ),
				'hourly' => __( 'Hourly' ),
				'weekly' => __( 'Weekly' ),
			),
			'priority'      => 11,
		),
		'hidden-field'                  => array(
			'type'     => 'hidden',
			// 'default' => 2839,
			// 'value' => 'wpravs',
			'priority' => 12,
		),
		// Repeater field.
		'repeater_field_setting'        => array(
			'id'          => 'repeater_field_setting',
			'label'       => esc_html__( 'Repeater Field', 'give' ),
			'type'        => 'group',
			'description' => esc_html__( 'This is repeater field.', 'give' ),
			'options'     => array(
				'add_button'      => esc_html__( 'Add row', 'give' ),
				'header_title'    => esc_html__( 'Group', 'give' ),
				'remove_button'   => '<span class="dashicons dashicons-no"></span>',
				'group_numbering' => true,
				'close_tabs'      => true,
			),
			'priority'    => 13,


			'fields' => array(
				array(
					'label'    => esc_html__( 'Text', 'give' ),
					'id'       => 'text',
					'type'     => 'text',
					'default'  => 'ram',
					'priority' => 1,
				),
				array(
					'label'    => esc_html__( 'Textarea', 'give' ),
					'id'       => 'textarea',
					'type'     => 'textarea',
					'priority' => 2,
				),
				array(
					'label'    => esc_html__( 'Checkbox', 'give' ),
					'id'       => 'checkbox',
					'type'     => 'checkbox',
					'priority' => 3,
				),
				array(
					'label'    => esc_html__( 'Select', 'give' ),
					'id'       => 'select',
					'type'     => 'select',
					'default'  => 'option3',
					'options'  => array(
						'option1' => __( 'Option 1', 'give' ),
						'option2' => __( 'Option 2', 'give' ),
						'option3' => __( 'Option 3', 'give' ),
					),
					'priority' => 4,
				),
				array(
					'label'    => esc_html__( 'Radio', 'give' ),
					'id'       => 'radio',
					'type'     => 'radio',
					'default'  => 'option1',
					'options'  => array(
						'option1' => __( 'Option 1', 'give' ),
						'option2' => __( 'Option 2', 'give' ),
						'option3' => __( 'Option 3', 'give' ),
					),
					'priority' => 2,
				),
				array(
					'label'    => esc_html__( 'Radio Inline', 'give' ),
					'id'       => 'radio_inline',
					'type'     => 'radio_inline',
					'default'  => 'option3',
					'options'  => array(
						'option1' => __( 'Option 1', 'give' ),
						'option2' => __( 'Option 2', 'give' ),
						'option3' => __( 'Option 3', 'give' ),
					),
					'priority' => 6,
				),
				'checkbox-field'       => array(
					'type'           => 'checkbox',
					// 'cbvalue'        => '1',
					'label'          => __( 'Checkbox Field' ),
					'label_position' => 'after',
					'priority'       => 7,
				),
				'multi-checkbox-field' => array(
					'type'     => 'multi_checkbox',
					'label'    => __( 'Multi Checkbox Field' ),
					// 'default' => array('daily', 'weekly' ),
					'options'  => array(
						'daily'  => __( 'Daily' ),
						'hourly' => __( 'Hourly' ),
						'weekly' => __( 'Weekly' ),
					),
					'priority' => 8,
				),
				// array(
				// 'label'        => __( 'Color Picker', 'give' ),
				// 'type'        => 'colorpicker',
				// 'id'          => 'colorpicker',
				// 'description' => __( 'This is colorpicker field.', 'give' ),
				// ),
				// array(
				// 'id'          => 'wysiwyg',
				// 'label'        => __( 'WordPress Editor', 'give' ),
				// 'type'        => 'wysiwyg',
				// 'description' => __( 'This is wysiwyg field.', 'give' ),
				// ),
			),
		),
		'submit'                        => array(
			'type'     => 'submit',
			'value'    => __( 'Submit' ),
			'priority' => 14,
		),
	),
), 'all-elements' );
