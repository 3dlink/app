<?php
App::uses('AppModel', 'Model');
/**
 * Foruma Model
 *
 * @property User $User
 * @property Forumq $Forumq
 */
class Foruma extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'foruma';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Forumq' => array(
			'className' => 'Forumq',
			'foreignKey' => 'forumq_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
