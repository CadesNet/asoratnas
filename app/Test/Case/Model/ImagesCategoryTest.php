<?php
App::uses('ImagesCategory', 'Model');

/**
 * ImagesCategory Test Case
 *
 */
class ImagesCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.images_category',
		'app.category',
		'app.item',
		'app.images_item',
		'app.items_quote',
		'app.quote'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImagesCategory = ClassRegistry::init('ImagesCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImagesCategory);

		parent::tearDown();
	}

}
