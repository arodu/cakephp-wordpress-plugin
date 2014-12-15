<?php

App::uses('WordpressAppModel', 'Wordpress.Model');

class TermRelationship extends AppModel {

	public $name = 'TermRelationship';
	public $primaryKey = 'object_id';
    public $useTable = 'wp_term_relationships';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $belongsTo = array(
		'TermTaxonomy' => array(
			'className' => 'Wordpress.TermTaxonomy',
			'foreignKey' => 'term_taxonomy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>