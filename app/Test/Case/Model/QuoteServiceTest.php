<?php
App::uses('QuoteService', 'Model');

/**
 * QuoteService Test Case
 *
 */
class QuoteServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quote_service',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuoteService = ClassRegistry::init('QuoteService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuoteService);

		parent::tearDown();
	}

}
