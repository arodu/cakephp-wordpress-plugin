<?php

App::uses('WordpressAppModel', 'Wordpress.Model');

class Comment extends WordpressAppModel {

    public $name = 'Comment';
    public $primaryKey = 'comment_ID';
    public $useTable = 'wp_comments';

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
        'User' => array(
            'className' => 'Wordpress.User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Post' => array(
            'className' => 'Wordpress.Post',
            'foreignKey' => 'comment_post_ID',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'CommentParent' => array(
            'className' => 'Wordpress.Comment',
            'foreignKey' => 'comment_parent',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    public $hasMany = array(
        'Commentmetum' => array(
            'className' => 'Wordpress.Commentmetum',
            'foreignKey' => 'comment_id',
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
