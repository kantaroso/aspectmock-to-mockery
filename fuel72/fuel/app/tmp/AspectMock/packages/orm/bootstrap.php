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

\Autoloader::add_classes(array(
	'Orm\\Model'               => '/var/www/fuel/packages/orm'.'/classes/model.php',
	'Orm\\Query'               => '/var/www/fuel/packages/orm'.'/classes/query.php',
	'Orm\\BelongsTo'           => '/var/www/fuel/packages/orm'.'/classes/belongsto.php',
	'Orm\\HasMany'             => '/var/www/fuel/packages/orm'.'/classes/hasmany.php',
	'Orm\\HasOne'              => '/var/www/fuel/packages/orm'.'/classes/hasone.php',
	'Orm\\ManyMany'            => '/var/www/fuel/packages/orm'.'/classes/manymany.php',
	'Orm\\Relation'            => '/var/www/fuel/packages/orm'.'/classes/relation.php',

	//Speclised models
	'Orm\\Model_Soft'          => '/var/www/fuel/packages/orm'.'/classes/model/soft.php',
	'Orm\\Query_Soft'          => '/var/www/fuel/packages/orm'.'/classes/query/soft.php',
	'Orm\\Model_Temporal'      => '/var/www/fuel/packages/orm'.'/classes/model/temporal.php',
	'Orm\\Query_Temporal'      => '/var/www/fuel/packages/orm'.'/classes/query/temporal.php',
	'Orm\\Model_Nestedset'     => '/var/www/fuel/packages/orm'.'/classes/model/nestedset.php',

	// Observers
	'Orm\\Observer'            => '/var/www/fuel/packages/orm'.'/classes/observer.php',
	'Orm\\Observer_CreatedAt'  => '/var/www/fuel/packages/orm'.'/classes/observer/createdat.php',
	'Orm\\Observer_Typing'     => '/var/www/fuel/packages/orm'.'/classes/observer/typing.php',
	'Orm\\Observer_UpdatedAt'  => '/var/www/fuel/packages/orm'.'/classes/observer/updatedat.php',
	'Orm\\Observer_Validation' => '/var/www/fuel/packages/orm'.'/classes/observer/validation.php',
	'Orm\\Observer_Self'       => '/var/www/fuel/packages/orm'.'/classes/observer/self.php',
	'Orm\\Observer_Slug'       => '/var/www/fuel/packages/orm'.'/classes/observer/slug.php',

	// Exceptions
	'Orm\\RecordNotFound'      => '/var/www/fuel/packages/orm'.'/classes/model.php',
	'Orm\\FrozenObject'        => '/var/www/fuel/packages/orm'.'/classes/model.php',
	'Orm\\InvalidContentType'  => '/var/www/fuel/packages/orm'.'/classes/observer/typing.php',
	'Orm\\ValidationFailed'    => '/var/www/fuel/packages/orm'.'/classes/observer/validation.php',
	'Orm\\RelationNotSoft'     => '/var/www/fuel/packages/orm'.'/classes/model/soft.php',
));

// Ensure the orm's config is loaded for Temporal
\Config::load('orm', true);
