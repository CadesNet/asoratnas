<?php
/**
 * ImagesCategoryFixture
 *
 */
class ImagesCategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'filename' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dir' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'category_id' => array('column' => 'category_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'filename' => 1,
			'dir' => 1
		),
	);

}
