<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Форма Доставка Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '%d1%81%d0%bf%d0%b0%d1%81%d0%b8%d0%b1%d0%be.html',
	'resources' => array(
		'checkbox_checked' => 'Selected',
		'checkbox_unchecked' => 'Unselected',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'mail@l-ktm.ru',
		'to' => 'mail@l-ktm.ru,uslug.planeta@yandex.ru'
	),
	'fields' => array(
		'custom_U14076' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Название компании',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Название компании\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Электронная почта',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Электронная почта\' is required.',
				'format' => 'Field \'Электронная почта\' has an invalid email address.'
			)
		),
		'custom_U14080' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Номер телефона',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Номер телефона\' is required.'
			)
		),
		'custom_U14072' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Город',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Город\' is required.'
			)
		)
	)
);

process_form($form);
?>
