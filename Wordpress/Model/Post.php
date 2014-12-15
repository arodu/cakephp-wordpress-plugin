<?php

App::uses('WordpressAppModel', 'Wordpress.Model');

class Post extends WordpressAppModel {

    public $name = 'Post';
    public $primaryKey = 'ID';
    public $useTable = 'wp_posts';

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
        'PostParent' => array(
            'className' => 'Wordpress.Post',
            'foreignKey' => 'post_parent',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ), 
        'User' => array(
            'className' => 'Wordpress.User',
            'foreignKey' => 'post_author',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    public $hasMany = array(
        'Postmetum' => array(
            'className' => 'Wordpress.Postmetum',
            'foreignKey' => 'post_id',
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
        'TermRelationship' => array(
            'className' => 'Wordpress.TermRelationship',
            'foreignKey' => 'object_id',
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
        'Comment' => array(
            'className' => 'Wordpress.Comment',
            'foreignKey' => 'comment_post_ID',
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