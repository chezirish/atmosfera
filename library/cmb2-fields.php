<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 $cmb CMB2 object.
 *
 * @return bool      True if metabox should show
 */



add_action( 'cmb2_admin_init', 'license_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */

function license_metabox() {
	// $prefix = 'yourprefix_demo_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_license = new_cmb2_box( array(
		'id'            => 'license_metabox',
		'title'         => esc_html__( 'Добавление сертификатов и лицензий', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/licence.php' ),
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$cmb_license->add_field( array(
		'name'         => esc_html__( 'Лицензии', 'cmb2' ),
		'desc'         => esc_html__( 'Upload or add multiple images/attachments.', 'cmb2' ),
		'id'           => 'file_list_licenses',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );

	$cmb_license->add_field( array(
		'name'         => esc_html__( 'Сертификаты', 'cmb2' ),
		'desc'         => esc_html__( 'Upload or add multiple images/attachments.', 'cmb2' ),
		'id'           => 'file_list_sertificates',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );

}


add_action( 'cmb2_admin_init', 'contact_metabox' );

function contact_metabox() {


	$cmb_contact = new_cmb2_box( array(
		'id'            => 'contact_metabox',
		'title'         => esc_html__( 'Добавление контактной информации', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/contacts.php' ),
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$group_field_id = $cmb_contact->add_field( array(
		'id'          => 'contact_group',
		'type'        => 'group',
		'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/contacts.php' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'cmb2' ),
			'remove_button' => __( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true, // true to have the groups closed by default
		),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb_contact->add_group_field( $group_field_id, array(
		'name' => 'Ключ',
		'id'   => 'key',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_contact->add_group_field( $group_field_id, array(
		'name' => 'Значение',
		'id'   => 'value',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

}


add_action( 'cmb2_admin_init', 'requisites_metabox' );

function requisites_metabox() {


	$cmb_requisites = new_cmb2_box( array(
		'id'            => 'requisites_metabox',
		'title'         => esc_html__( 'Добавление реквезитов', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/contacts.php' ),
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$group_field_id = $cmb_requisites->add_field( array(
		'id'          => 'requisites_group',
		'type'        => 'group',
		'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/contacts.php' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'cmb2' ),
			'remove_button' => __( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true, // true to have the groups closed by default
		),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb_requisites->add_group_field( $group_field_id, array(
		'name' => 'Ключ',
		'id'   => 'key',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_requisites->add_group_field( $group_field_id, array(
		'name' => 'Значение',
		'id'   => 'value',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );


}





add_action( 'cmb2_admin_init', 'masters_metabox' );

function masters_metabox() {


	$cmb_masters = new_cmb2_box( array(
		'id'            => 'masters_metabox',
		'title'         => esc_html__( 'Добавление мастеров', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/main.php' ),
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$group_field_id = $cmb_masters->add_field( array(
		'id'          => 'masters_group',
		'type'        => 'group',
		'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/main.php' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'cmb2' ),
			'remove_button' => __( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_masters->add_group_field( $group_field_id, array(
		'name'    => 'Фото мастера',
		'desc'    => 'Загрузите фото или введите ссылку на фото.',
		'id'      => 'img',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Добавить фаил' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			// 'type' => 'application/pdf', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			'type' => array(
				'image/gif',
				'image/jpeg',
				'image/png',
			),
		),
		// 'preview_size' => 'large', // Image size to use when previewing in the admin.
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb_masters->add_group_field( $group_field_id, array(
		'name' => 'Имя фамилия',
		'id'   => 'name',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_masters->add_group_field( $group_field_id, array(
		'name' => 'Заголовок',
		'id'   => 'title',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_masters->add_group_field( $group_field_id, array(
		'name' => 'Контент',
		// 'desc' => 'field description (optional)',
		// 'default' => 'standard value (optional)',
		'id' => 'content',
		'type' => 'textarea'
	) );


}


add_action( 'cmb2_admin_init', 'services_metabox' );

function services_metabox() {


	$cmb_services = new_cmb2_box( array(
		'id'            => 'services_metabox',
		'title'         => esc_html__( 'Изминение прайс листа', 'cmb2' ),
		'object_types'  => array( 'services-post' ), // Post type
		// 'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/services.php' ),
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$group_field_id = $cmb_services->add_field( array(
		'id'          => 'services_group',
		'type'        => 'group',
		'description' => __( 'Generates reusable form entries', 'cmb2' ),
		// 'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/services.php' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'cmb2' ),
			'remove_button' => __( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true, // true to have the groups closed by default
		),
	) );


	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb_services->add_group_field( $group_field_id, array(
		'name' => 'Имя услуги',
		'id'   => 'name',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_services->add_group_field( $group_field_id, array(
		'name' => 'Цена услуги',
		'id'   => 'val',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );



}




add_action( 'cmb2_admin_init', 'services_main_metabox' );

function services_main_metabox() {


	$cmb_main_services = new_cmb2_box( array(
		'id'            => 'services_main_metabox',
		'title'         => esc_html__( 'Добавление услуг', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/main.php' ),
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$group_field_id = $cmb_main_services->add_field( array(
		'id'          => 'main_services_group',
		'type'        => 'group',
		'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/main.php' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'cmb2' ),
			'remove_button' => __( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_main_services->add_group_field( $group_field_id, array(
		'name'    => 'Картинка услуги',
		'desc'    => 'Загрузите фото или введите ссылку на фото.',
		'id'      => 'img',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Добавить фаил' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			// 'type' => 'application/pdf', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			'type' => array(
				'image/gif',
				'image/jpeg',
				'image/png',
			),
		),
		// 'preview_size' => 'large', // Image size to use when previewing in the admin.
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb_main_services->add_group_field( $group_field_id, array(
		'name' => 'Название услуги',
		'id'   => 'name',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_main_services->add_group_field( $group_field_id, array(
		'name' => __( 'Ссылка на услугу', 'cmb2' ),
		'desc' => __( 'Открывать в новом окне', 'cmb2' ),
		'id'   => 'url',
		'type' => 'link_picker',
		// 'split_values' => true  // default is false
	) );

}