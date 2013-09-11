<?php
App::uses('PresentationsController', 'Controller');

/**
 * PresentationsController Test Case
 *
 */
class PresentationsControllerTest extends ControllerTestCase {

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
		'app.images_presentation',
		'app.presentations_quote',
		'app.quote',
		'app.items_quote'
	);

}
