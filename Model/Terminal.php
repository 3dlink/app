<?php
App::uses('AppModel', 'Model');
/**
 * Terminal Model
 *
 * @property Client $Client
 * @property Destination $Destination
 */
class Terminal extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Client' => array(
			'className' => 'Client',
			'joinTable' => 'clients_terminals',
			'foreignKey' => 'terminal_id',
			'associationForeignKey' => 'client_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Destination' => array(
			'className' => 'Destination',
			'joinTable' => 'destinations_terminals',
			'foreignKey' => 'terminal_id',
			'associationForeignKey' => 'destination_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
