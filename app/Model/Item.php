<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 * @property Category $Category
<<<<<<< HEAD
 * @property Presentation $Presentation
=======
 * @property ItemsQuote $ItemsQuote
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
 */
class Item extends AppModel {

/**
<<<<<<< HEAD
=======
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'item';

/**
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'maxlength' => array(
<<<<<<< HEAD
				'rule' => array('maxlength',100),
				//'message' => 'Your custom message here',
=======
				'rule' => array('maxlength',50),
				'message' => 'Maximo 50 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'presentacion' => array(
			'maxlength' => array(
				'rule' => array('maxlength',150),
				'message' => 'Maximo 150 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'maxlength' => array(
				'rule' => array('maxlength',15000),
				'message' => 'Maximo 15000 caracteres',
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
<<<<<<< HEAD
	public $hasMany = array(
		'Presentation' => array(
			'className' => 'Presentation',
=======
		public $hasMany = array(
'ImagesItem' => array(
			'className' => 'ImagesItem',
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
			'foreignKey' => 'item_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
<<<<<<< HEAD
		)
=======
		),
'ItemsQuote' => array(
			'className' => 'ItemsQuote',
			'foreignKey' => 'item_id',
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
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
	);

}
