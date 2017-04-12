<?php
Give_Form_API::register_form( array(
	'display_style' => 'button',
	'fields'        => array(
		'text-field'             => array(
			'type'             => 'text',
			'label'            => __( 'Text Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Text Field' ),
			),
		),
		'email-field'            => array(
			'type'             => 'email',
			'label'            => __( 'Email Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Email Field' ),
			),
		),
		'number-field'           => array(
			'type'             => 'number',
			'label'            => __( 'Number Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Number Field' ),
			),
		),
		'password-field'         => array(
			'type'             => 'password',
			'label'            => __( 'Password Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Password Field' ),
			),
		),
		'textarea-field'         => array(
			'type'             => 'textarea',
			'label'            => __( 'Textarea Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Textarea Field' ),
			),
		),
		'select-field'           => array(
			'type'    => 'select',
			'label'   => __( 'Select Field' ),
			'options' => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
		),
		'multi-select-field'     => array(
			'type'    => 'multi_select',
			'label'   => __( 'Multi Select Field' ),
			'options' => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
		),
		'radio-field'            => array(
			'type'    => 'radio',
			'label'   => __( 'Radio Field' ),
			'options' => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
		),
		'checkbox-field'         => array(
			'type'           => 'checkbox',
			'label'          => __( 'Checkbox Field' ),
			'label_position' => 'after',
		),

		// Repeater field.
		'repeater_field_setting' => array(
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


			'fields' => array(
				array(
					'label'   => esc_html__( 'Text', 'give' ),
					'id'      => 'text',
					'type'    => 'text',
					'default' => 'ram',
				),
				array(
					'label' => esc_html__( 'Textarea', 'give' ),
					'id'    => 'textarea',
					'type'  => 'textarea',
				),
				array(
					'label' => esc_html__( 'Checkbox', 'give' ),
					'id'    => 'checkbox',
					'type'  => 'checkbox',
				),
				array(
					'label'   => esc_html__( 'Select', 'give' ),
					'id'      => 'select',
					'type'    => 'select',
					'default' => 'option3',
					'options' => array(
						'option1' => __( 'Option 1', 'give' ),
						'option2' => __( 'Option 2', 'give' ),
						'option3' => __( 'Option 3', 'give' ),
					),
				),
				array(
					'label'   => esc_html__( 'Radio', 'give' ),
					'id'      => 'radio',
					'type'    => 'radio',
					'default' => 'option1',
					'options' => array(
						'option1' => __( 'Option 1', 'give' ),
						'option2' => __( 'Option 2', 'give' ),
						'option3' => __( 'Option 3', 'give' ),
					),
				),
				array(
					'label'   => esc_html__( 'Radio Inline', 'give' ),
					'id'      => 'radio_inline',
					'type'    => 'radio_inline',
					'default' => 'option3',
					'options' => array(
						'option1' => __( 'Option 1', 'give' ),
						'option2' => __( 'Option 2', 'give' ),
						'option3' => __( 'Option 3', 'give' ),
					),
				),
				'checkbox-field'       => array(
					'type'           => 'checkbox',
					// 'cbvalue'        => '1',
					'label'          => __( 'Checkbox Field' ),
					'label_position' => 'after',
				),
				'multi-checkbox-field' => array(
					'type'    => 'multi_checkbox',
					'label'   => __( 'Multi Checkbox Field' ),
					'options' => array(
						'daily'  => __( 'Daily' ),
						'hourly' => __( 'Hourly' ),
						'weekly' => __( 'Weekly' ),
					),
				),
				// array(
				// 	'label'        => __( 'Color Picker', 'give' ),
				// 	'type'        => 'colorpicker',
				// 	'id'          => 'colorpicker',
				// 	'description' => __( 'This is colorpicker field.', 'give' ),
				// ),
				// array(
				// 	'id'          => 'wysiwyg',
				// 	'label'        => __( 'WordPress Editor', 'give' ),
				// 	'type'        => 'wysiwyg',
				// 	'description' => __( 'This is wysiwyg field.', 'give' ),
				// ),
			),
		),

		'submit' => array(
			'type'  => 'submit',
			'value' => __( 'Submit' ),
		),
	),
), 'form-buttom' );