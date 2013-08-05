<?php
App::uses('Benefit', 'Model');

/**
 * Benefit Test Case
 *
 */
class BenefitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.benefit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Benefit = ClassRegistry::init('Benefit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Benefit);

		parent::tearDown();
	}

}
