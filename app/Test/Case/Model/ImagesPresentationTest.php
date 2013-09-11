<?php
App::uses('ImagesPresentation', 'Model');

/**
 * ImagesPresentation Test Case
 *
 */
class ImagesPresentationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.images_presentation',
		'app.presentation',
		'app.item',
		'app.category',
		'app.images_category',
		'app.quote',
		'app.items_quote',
		'app.presentations_quote'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImagesPresentation = ClassRegistry::init('ImagesPresentation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImagesPresentation);

		parent::tearDown();
	}

}
