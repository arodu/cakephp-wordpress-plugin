<?php
class User extends WordpressAppModel {

	var $name = 'User';
	var $primaryKey = 'ID';
    var $useTable = 'wp_users';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Comment' => array(
			'className' => 'Wordpress.Comment',
			'foreignKey' => 'user_id',
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
		'Post' => array(
			'className' => 'Wordpress.Post',
			'foreignKey' => 'post_author',
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
		'Usermetum' => array(
			'className' => 'Wordpress.Usermetum',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>