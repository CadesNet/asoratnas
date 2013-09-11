<?php
App::uses('PresentationsQuote', 'Model');

/**
 * PresentationsQuote Test Case
 *
 */
class PresentationsQuoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.presentations_quote',
		'app.presentation',
		'app.item',
		'app.category',
		'app.images_category',
		'app.quote',
		'app.items_quote'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PresentationsQuote = ClassRegistry::init('PresentationsQuote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PresentationsQuote);

		parent::tearDown();
	}

}
