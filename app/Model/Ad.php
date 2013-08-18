<?php
App::uses('AppModel', 'Model');
/**
 * Ad Model
 *
 */
class Ad extends AppModel {
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
		'type' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
