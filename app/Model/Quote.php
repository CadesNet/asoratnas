<?php
App::uses('AppModel', 'Model');
/**
 * Quote Model
 *
 */
class Quote extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
<<<<<<< HEAD
		'name' => array(
=======
		'fullname' => array(
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
			'maxlength' => array(
				'rule' => array('maxlength',50),
				'message' => 'Maximo 50 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'maxlength' => array(
				'rule' => array('maxlength',3000),
				'message' => 'Maximo 3000 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'message' => array(
			'maxlength' => array(
				'rule' => array('maxlength',3000),
				'message' => 'Maximo 3000 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
public $hasMany = array(
<<<<<<< HEAD
		'PresentationsQuote' => array(
			'className' => 'PresentationsQuote',
			'foreignKey' => 'Presentation_id',
=======
'ItemsQuote' => array(
			'className' => 'ItemsQuote',
			'foreignKey' => 'quote_id',
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);
}
