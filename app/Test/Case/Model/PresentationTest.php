<?php
App::uses('Presentation', 'Model');

/**
 * Presentation Test Case
 *
 */
class PresentationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Presentation = ClassRegistry::init('Presentation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Presentation);

		parent::tearDown();
	}

}
