<?php
App::uses('AppModel', 'Model');
/**
 * Benefit Model
 *
 */
class Benefit extends AppModel {


/**
 * img field
 *
 */
var $actsAs = array(
        'MeioUpload' => array('filename')
    );
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
