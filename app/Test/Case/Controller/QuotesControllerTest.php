<?php
App::uses('QuotesController', 'Controller');

/**
 * QuotesController Test Case
 *
 */
class QuotesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quote',
<<<<<<< HEAD
		'app.presentations_quote',
		'app.presentation',
		'app.item',
		'app.category',
		'app.images_category',
		'app.images_presentation'
=======
		'app.item',
		'app.category',
		'app.images_item'
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
