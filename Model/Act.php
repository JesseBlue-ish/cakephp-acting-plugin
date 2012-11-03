<?php
App::uses('AppModel', 'Model');
/**
 * Actionable Model
 *
 * @property Type $Type
 */
class Act extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Type' => array(
			'className' => 'Acting.Type',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		/*
		'Stage' => array(
		  'className' => 'Acting.Stage',
		  'foreignKey' => 'stage_id',
		),
		*/
	);
}
