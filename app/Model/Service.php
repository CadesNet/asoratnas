<?php
App::uses('AppModel', 'Model');
/**
 * Service Model
 *
 */
class Service extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'content' => array(
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
		public $hasMany = array(
		'QuoteService' => array(
			'className' => 'QuoteService',
			'foreignKey' => 'service_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
