<?php
class TermRelationship extends AppModel {

	var $name = 'TermRelationship';
	var $primaryKey = 'object_id';
    var $useTable = 'wp_term_relationships';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
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