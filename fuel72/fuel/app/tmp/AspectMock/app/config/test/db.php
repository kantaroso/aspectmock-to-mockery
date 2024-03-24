<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Database settings for testing environment
 * -----------------------------------------------------------------------------
 *
 *  This environment is primarily used by unit tests, to run on a
 *  controlled environment.
 *
 *  These settings get merged with the global settings.
 *
 */

return array(
    'default' => [
        'type'           => 'mysqli',
        'connection'     => array(
            'hostname'       => 'mysql',
            'port'           => '3306',
            'database'       => 'db',
            'username'       => 'user',
            'password'       => 'password',
            'persistent'     => false,
            'compress'       => false,
        ),
        'identifier'   => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
    ],
);
