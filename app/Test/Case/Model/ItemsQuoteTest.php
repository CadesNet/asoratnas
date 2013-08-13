<?php
App::uses('ItemsQuote', 'Model');

/**
 * ItemsQuote Test Case
 *
 */
class ItemsQuoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.items_quote',
		'app.item',
		'app.category',
		'app.images_item',
		'app.quote'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemsQuote = ClassRegistry::init('ItemsQuote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemsQuote);

		parent::tearDown();
	}

}
