<?php
namespace model;

class User extends \Orm\Model
{
    protected static $_properties = array(
        'id',
        'username',
        'password',
        'email',
        'full_name',
        'created_at',
        'updated_at',
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => false,
        ),
    );

    protected static $_table_name = 'users';
}
