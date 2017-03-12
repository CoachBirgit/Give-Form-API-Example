<?php
$forms['form-button'] = array(
	'display_style' => 'button',
	'fields' => array(
		'text-field' => array(
			'type'               => 'text',
			'label'              => __( 'Text Field' ),
			'field_attributes'   => array(
				'placeholder' => __( 'Text Field' ),
			),
		),
		'email-field'        => array(
			'type'             => 'email',
			'label'            => __( 'Email Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Email Field' ),
			),
		),
		'number-field'       => array(
			'type'             => 'number',
			'label'            => __( 'Number Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Number Field' ),
			),
		),
		'password-field'     => array(
			'type'             => 'password',
			'label'            => __( 'Password Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Password Field' ),
			),
		),
		'textarea-field'     => array(
			'type'             => 'textarea',
			'label'            => __( 'Textarea Field' ),
			'field_attributes' => array(
				'placeholder' => __( 'Textarea Field' ),
			),
		),
		'select-field'       => array(
			'type'    => 'select',
			'label'   => __( 'Select Field' ),
			'options' => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
		),
		'multi-select-field' => array(
			'type'    => 'multi_select',
			'label'   => __( 'Multi Select Field' ),
			'options' => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
		),
		'radio-field'        => array(
			'type'    => 'radio',
			'label'   => __( 'Radio Field' ),
			'options' => array(
				'option-1' => __( 'Option 1' ),
				'option-2' => __( 'Option 2' ),
				'option-3' => __( 'Option 3' ),
			),
		),
		'checkbox-field'     => array(
			'type'           => 'checkbox',
			'label'          => __( 'Checkbox Field' ),
			'label_position' => 'after',
		),

		'submit' => array(
			'type'  => 'submit',
			'value' => __( 'Submit' ),
		),
	),
);