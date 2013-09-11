<?php
App::uses('ItemsController', 'Controller');

/**
 * ItemsController Test Case
 *
 */
class ItemsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item',
		'app.category',
		'app.images_category',
<<<<<<< HEAD
		'app.presentation',
		'app.images_presentation',
		'app.presentations_quote',
		'app.quote',
		'app.items_quote'
=======
		'app.images_item',
		'app.items_quote',
		'app.quote'
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
