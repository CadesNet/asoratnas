<?php
App::uses('AppModel', 'Model');
/**
 * Carousel Model
 *
 */
class Carousel extends AppModel {


/**
 * img field
 *
 */
var $actsAs = array(
        'MeioUpload' => array('filename')
    );

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
