<?php

App::uses('WordpressAppModel', 'Wordpress.Model');

class Usermetum extends WordpressAppModel {

    public $name = 'Usermetum';
    public $primaryKey = 'umeta_id';
    public $useTable = 'wp_usermeta';

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
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