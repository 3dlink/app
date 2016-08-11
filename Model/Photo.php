<?php
App::uses('AppModel', 'Model');
/**
 * Photo Model
 *
 * @property Commentary $Commentary
 */
class Photo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Commentary' => array(
			'className' => 'Commentary',
			'foreignKey' => 'commentary_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
