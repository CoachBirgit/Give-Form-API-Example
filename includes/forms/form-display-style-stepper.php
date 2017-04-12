<?php
Give_Form_API::register_form( array(
	'display_style' => 'stepper',
	'fields'        => array(
		'step-1' => array(
			'type'   => 'block',
			'fields' => array(
				'custom-amount'   => array(
					'type'               => 'text',
					'label'              => __( 'Custom Amount' ),
					'field_attributes'   => array(
						'placeholder' => __( 'Custom Amount' ),
					),
					'show_without_modal' => true,
					'show_within_modal'  => false,
					'required'           => 'required',
				),
				'payment-methods' => array(
					'label'  => __( 'Select Payment Method' ),
					'fields' => array(
						'gateway' => array(
							'type'    => 'radio',
							'options' => array(
								'manual'  => __( 'Test Donation' ),
								'offline' => __( 'Offline' ),
								'paypal'  => __( 'Paypal' ),
							),
						),
					),
				),
			),
		),
		'step-2' => array(
			'type'   => 'block',
			'fields' => array(
				'personal-information' => array(
					'label'  => __( 'Personal Information' ),
					'fields' => array(
						'first-name'    => array(
							'type'               => 'text',
							'label'              => __( 'First Name' ),
							'field_attributes'   => array(
								'placeholder' => __( 'First Name' ),
							),
							'sub_section_start'  => true,
							'wrapper_attributes' => array(
								'style' => 'width:50%',
							),
						),
						'last-name'     => array(
							'type'               => 'text',
							'label'              => __( 'Last Name' ),
							'field_attributes'   => array(
								'placeholder' => __( 'Last Name' ),
							),
							'sub_section_end'    => true,
							'wrapper_attributes' => array(
								'style' => 'width:50%',
							),
						),
						'email-address' => array(
							'type'             => 'email',
							'label'            => __( 'Email Address' ),
							'field_attributes' => array(
								'placeholder' => __( 'Email Address' ),
							),
						),
					),
				),
			),
		),
		'step-3' => array(
			'type'   => 'block',
			'fields' => array(
				'billing-details' => array(
					'label'  => __( 'Billing Details ' ),
					'fields' => array(
						'address-1' => array(
							'type'             => 'text',
							'label'            => __( 'Address 1' ),
							'field_attributes' => array(
								'placeholder' => __( 'Address Line 1' ),
							),
						),
						'address-2' => array(
							'type'             => 'text',
							'label'            => __( 'Address 2' ),
							'field_attributes' => array(
								'placeholder' => __( 'Address Line 2' ),
							),
						),
						'city'      => array(
							'type'               => 'text',
							'label'              => __( 'City' ),
							'field_attributes'   => array(
								'placeholder' => __( 'City' ),
							),
							'sub_section_start'  => true,
							'wrapper_attributes' => array(
								'style' => 'width:50%',
							),
						),
						'zipcode'   => array(
							'type'               => 'text',
							'label'              => __( 'Zip / Postal Code' ),
							'field_attributes'   => array(
								'placeholder' => __( 'Zip / Postal Code' ),
							),
							'sub_section_end'    => true,
							'wrapper_attributes' => array(
								'style' => 'width:50%',
							),
						),
						'country'   => array(
							'type'               => 'select',
							'label'              => __( 'Country' ),
							'options'            => array(
								'option-1' => __( 'Option 1' ),
								'option-2' => __( 'Option 2' ),
								'option-3' => __( 'Option 3' ),
							),
							'sub_section_start'  => true,
							'wrapper_attributes' => array(
								'style' => 'width:50%',
							),
						),
						'state'     => array(
							'type'               => 'select',
							'label'              => __( 'State / Province' ),
							'options'            => array(
								'option-1' => __( 'Option 1' ),
								'option-2' => __( 'Option 2' ),
								'option-3' => __( 'Option 3' ),
							),
							'sub_section_end'    => true,
							'wrapper_attributes' => array(
								'style' => 'width:50%',
							),
						),
						'submit'    => array(
							'type'  => 'submit',
							'value' => __( 'Submit' ),
						),
					),
				),
			),
		),
	),
), 'form-section-simple' );