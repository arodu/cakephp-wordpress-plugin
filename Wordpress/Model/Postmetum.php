<?php

App::uses('WordpressAppModel', 'Wordpress.Model');

class Postmetum extends AppModel {

	public $name = 'Postmetum';
	public $primaryKey = 'meta_id';
    public $useTable = 'wp_postmeta';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $belongsTo = array(
		'Post' => array(
			'className' => 'Wordpress.Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>