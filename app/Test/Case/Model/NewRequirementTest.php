<?php
App::uses('NewRequirement', 'Model');

/**
 * NewRequirement Test Case
 *
 */
class NewRequirementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.new_requirement',
		'app.branch',
		'app.company',
		'app.charge',
		'app.requirement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NewRequirement = ClassRegistry::init('NewRequirement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NewRequirement);

		parent::tearDown();
	}

}
