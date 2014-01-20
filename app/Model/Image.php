<?php
App::uses('AppModel', 'Model');
/**
 * Service Model
 *
 */
class Image extends AppModel {
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
	
}
