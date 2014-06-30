<?php
class Usermetum extends WordpressAppModel {

	var $name = 'Usermetum';
	var $primaryKey = 'umeta_id';
    var $useTable = 'wp_usermeta';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'Wordpress.User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>